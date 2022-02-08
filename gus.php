<?php
/**
* glFusion CMS
*
* GUS - glFusion Usage Stats
*
* Table / Plugin definition
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
*           Tom Willett       - twillett@users.sourceforge.net
*           John Hughes       - jlhughes@users.sf.net
*
*/

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}
global $_DB_table_prefix;

$_GUS_CONF['pi_name']           = 'gus';
$_GUS_CONF['pi_display_name']   = 'GUS';
$_GUS_CONF['pi_version']        = '2.5.1';
$_GUS_CONF['gl_version']        = '1.5.0';
$_GUS_CONF['pi_url']            = 'https://www.glfusion.org';

$_GUS_table_prefix = $_DB_table_prefix . 'gus_';

$_TABLES['gus_userstats']      = $_GUS_table_prefix . 'userstats';
$_TABLES['gus_user_agents']    = $_GUS_table_prefix . 'user_agents';
$_TABLES['gus_ignore']         = $_GUS_table_prefix . 'ignore';
$_TABLES['gus_ignore_ip']      = $_GUS_table_prefix . 'ignore_ip';
$_TABLES['gus_ignore_user']    = $_GUS_table_prefix . 'ignore_user';
$_TABLES['gus_ignore_page']    = $_GUS_table_prefix . 'ignore_page';
$_TABLES['gus_ignore_ua']      = $_GUS_table_prefix . 'ignore_ua';
$_TABLES['gus_ignore_host']    = $_GUS_table_prefix . 'ignore_host';
$_TABLES['gus_ignore_referrer']= $_GUS_table_prefix . 'ignore_referrer';
$_TABLES['gus_vars']           = $_GUS_table_prefix . 'vars';
?>