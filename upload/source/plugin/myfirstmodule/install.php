<?php
/**
 * 2015 Webmaster Gambit
 * Discuz!X3.1 MyFirstModule
 * http://webmaster-gambit.ru/
 * 1.0.0
 */

if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}

$sql = <<<EOF
CREATE TABLE IF NOT EXISTS `pre_myfirstmodule` (
  `id` mediumint(8)  NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8)  NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;
EOF;

runquery($sql);

$finish = true;
?>