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
$sql = <<<EOF

DROP TABLE IF EXISTS `pre_myfirstmodule`;

EOF;

runquery($sql);

$finish = true;
?>