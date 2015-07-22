<?php
/**
 * 2015 Webmaster Gambit
 * Discuz!X3.1 MyFirstModule
 * http://webmaster-gambit.ru/
 * 1.0.0
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class myfirstmodule{

    public static function MyFirstFunc(){
        global $_G;
        loadcache('plugin');
        $set = $_G['cache']['plugin']['myfirstmodule'];
        if(isset($set['myfirstmodule_id1']))
            return $set['myfirstmodule_id1'];
        return 'Значение не определено';
    }

    public static function MySecFunc(){
        global $_G;
        loadcache('plugin');
        $set = $_G['cache']['plugin']['myfirstmodule'];
        if(isset($set['myfirstmodule_id2']))
            return !empty($set['myfirstmodule_id2'])?'Да':'Нет';
        return 'Значение не определено';
    }
}

class plugin_myfirstmodule{

    public static function global_login_extra(){
        return '<h1 style="float: right;">'.myfirstmodule::myFirstFunc().'</h1>';
    }
}

class plugin_myfirstmodule_member extends plugin_myfirstmodule {
    public static function logging_method(){
        return myfirstmodule::myFirstFunc();
    }
    public static function register_logging_method(){
        return myfirstmodule::myFirstFunc();
    }
}

?>