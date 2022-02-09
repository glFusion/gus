<?php
/**
* glFusion CMS
*
* GUS - glFusion Usage Stats
*
* SQL to build GUS tables
*
* @license GNU General Public License version 2 or later
*     http://www.opensource.org/licenses/gpl-license.php
*
*  Copyright (C) 2009-2021 by the following authors:
*   Mark R. Evans   mark AT glfusion DOT org
*
*  Based on the GUS Plugin
*  Copyright (C) 2002, 2003, 2005 by the following authors:
*  Authors: Andy Maloney      - asmaloney@users.sf.net
*
*/

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

global $_GUS_VARS, $_USER;

$_SQL['gus_userstats'] = "
CREATE TABLE IF NOT EXISTS {$_TABLES['gus_userstats']} (
  uid int(10) NOT NULL default '1',
  ip varchar(20) default '0.0.0.0',
  host varchar(75) default '',
  page varchar(50) default '',
  username varchar(48) default '',
  referer varchar(255) default '',
  request varchar(10) default '',
  query_string varchar(255) default '',
  `date` date default NULL,
  `time` time NOT NULL default '00:00:00',
  ua_id smallint(5) unsigned NOT NULL default '0',
  KEY uid (uid),
  KEY ip (ip),
  KEY page (page),
  KEY refer (referer(191)),
  KEY ua_id (ua_id),
  KEY `date` (`date`)
) ENGINE=MyISAM
";

$_SQL['gus_user_agents'] = "
CREATE TABLE IF NOT EXISTS {$_TABLES['gus_user_agents']} (
  ua_id smallint(5) unsigned NOT NULL auto_increment,
  user_agent varchar(256) default NULL,
  browser varchar(20) default NULL,
  version varchar(40) default NULL,
  platform varchar(30) default NULL,
  PRIMARY KEY  (ua_id),
  UNIQUE KEY user_agent (user_agent(200))
) ENGINE=MyISAM
";

$_SQL['gus_ignore'] = "
CREATE TABLE `{$_TABLES['gus_ignore']}` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(16) NOT NULL DEFAULT '',
  `value` VARCHAR(256) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `type_value` (`type`, `value`(200))
  ) ENGINE=MyISAM
";

$_SQL['gus_vars'] = "
CREATE TABLE IF NOT EXISTS {$_TABLES['gus_vars']} (
  name varchar(10) NOT NULL default '',
  `value` varchar(32) default '',
  PRIMARY KEY  (name)
) ENGINE=MyISAM
";

if ( !isset($_GUS_VARS['remote_ip'])) {
    if ( version_compare(GVERSION,'1.7.4','<')) {
        $_GUS_VARS['remote_ip'] = $_SERVER['REMOTE_ADDR'];
    } else {
        $_GUS_VARS['remote_ip'] = $_SERVER['REAL_ADDR'];
    }
}

if ( !isset($_USER['uid'])) $_USER['uid'] = 2;

// By default ignore current IP
//$_DATA['remote_ip'] = "INSERT IGNORE INTO {$_TABLES['gus_ignore']} VALUES ('" . $_GUS_VARS['remote_ip'] . "')";
$_DATA['remote_ip'] = "INSERT IGNORE INTO `{$_TABLES['gus_ignore']}` (`type`, `value`) VALUES('ip','".$_GUS_VARS['remote_ip']."');";

// By default ignore current user
$_DATA['ignore_user'] = "INSERT IGNORE INTO `{$_TABLES['gus_ignore']}` (`type`, `value`) VALUES('user','".$_USER['username']."');";

// Var that controls capture of info
$_DATA['capture'] = "INSERT IGNORE INTO {$_TABLES['gus_vars']} VALUES ( 'capture', '1' )";
$_DATA['imported'] = "INSERT IGNORE INTO {$_TABLES['gus_vars']} VALUES ( 'imported', '0' )";

?>