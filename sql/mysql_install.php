<?php
// +--------------------------------------------------------------------------+
// | GUS Plugin for glFusion CMS                                              |
// +--------------------------------------------------------------------------+
// | gus.php                                                                  |
// |                                                                          |
// | Contains all the SQL necessary to install the GUS plugin                 |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2008-2018 by the following authors:                        |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
// |                                                                          |
// | Copyright (C) 2005 by the following authors:                             |
// |                                                                          |
// | Authors: Andy Maloney      - asmaloney@users.sf.net                      |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | This program is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either version 2           |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this program; if not, write to the Free Software Foundation,  |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.          |
// |                                                                          |
// +--------------------------------------------------------------------------+

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
  user_agent varchar(128) default NULL,
  browser varchar(20) default NULL,
  version varchar(40) default NULL,
  platform varchar(30) default NULL,
  PRIMARY KEY  (ua_id),
  UNIQUE KEY user_agent (user_agent)
) ENGINE=MyISAM
";

$_SQL['gus_ignore_ip'] = "
CREATE TABLE IF NOT EXISTS {$_TABLES['gus_ignore_ip']} (
  ip varchar(20) NOT NULL default '0.0.0.0',
  PRIMARY KEY  (ip)
) ENGINE=MyISAM
";

$_SQL['gus_ignore_user'] = "
CREATE TABLE IF NOT EXISTS {$_TABLES['gus_ignore_user']} (
  username varchar(48) NOT NULL default '',
  PRIMARY KEY (username)
) ENGINE=MyISAM
";

$_SQL['gus_ignore_page'] = "
CREATE TABLE IF NOT EXISTS {$_TABLES['gus_ignore_page']} (
  page varchar(255) NOT NULL default '',
  PRIMARY KEY  (page(191))
) ENGINE=MyISAM
";

$_SQL['gus_ignore_ua'] = "
CREATE TABLE IF NOT EXISTS {$_TABLES['gus_ignore_ua']} (
  ua varchar(128) NOT NULL default '',
  PRIMARY KEY (ua)
) ENGINE=MyISAM
";

$_SQL['gus_ignore_host'] = "
CREATE TABLE IF NOT EXISTS {$_TABLES['gus_ignore_host']} (
  host varchar(128) NOT NULL default '',
  PRIMARY KEY (host)
) ENGINE=MyISAM
";

$_SQL['gus_ignore_referrer'] = "
CREATE TABLE IF NOT EXISTS {$_TABLES['gus_ignore_referrer']} (
  referrer varchar(128) NOT NULL default '',
  PRIMARY KEY (referrer)
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
$_DATA['remote_ip'] = "INSERT IGNORE INTO {$_TABLES['gus_ignore_ip']} VALUES ('" . $_GUS_VARS['remote_ip'] . "')";

// By default ignore current user
$_DATA['ignore_user'] ="INSERT IGNORE INTO {$_TABLES['gus_ignore_user']} VALUES ('" . $_USER['username'] . "')";

// Var that controls capture of info
$_DATA['capture'] = "INSERT IGNORE INTO {$_TABLES['gus_vars']} VALUES ( 'capture', '1' )";
$_DATA['imported'] = "INSERT IGNORE INTO {$_TABLES['gus_vars']} VALUES ( 'imported', '0' )";

?>