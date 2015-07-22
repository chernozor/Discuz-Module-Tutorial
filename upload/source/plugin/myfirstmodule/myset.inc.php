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

require_once './source/class/class_core.php';
require_once './source/plugin/myfirstmodule/myfirstmodule.class.php';

$discuz = & discuz_core::instance();
$discuz->init();

global $_G;
if(!$_G['uid'])
{
	showmessage('not_loggedin', null, array(), array('login' => 1));
}

$myset1 = myfirstmodule::MyFirstFunc();
$myset2 = myfirstmodule::MySecFunc();

?>