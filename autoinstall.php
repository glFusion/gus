<?php
/**
* glFusion CMS
*
* GUS - glFusion Usage Stats
*
* Auto Installer
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

global $_DB_dbms;

require_once $_CONF['path'].'plugins/gus/gus.php';
require_once $_CONF['path'].'plugins/gus/sql/mysql_install.php';

// +--------------------------------------------------------------------------+
// | Plugin installation options                                              |
// +--------------------------------------------------------------------------+

$INSTALL_plugin['gus'] = array(
    'installer' => array('type' => 'installer', 'version' => '1', 'mode' => 'install'),
    'plugin' => array('type' => 'plugin', 'name' => $_GUS_CONF['pi_name'], 'ver' => $_GUS_CONF['pi_version'], 'gl_ver' => $_GUS_CONF['gl_version'], 'url' => $_GUS_CONF['pi_url'], 'display' => $_GUS_CONF['pi_display_name']),
    array('type' => 'table', 'table' => $_TABLES['gus_userstats'], 'sql' => $_SQL['gus_userstats']),
    array('type' => 'table', 'table' => $_TABLES['gus_user_agents'], 'sql' => $_SQL['gus_user_agents']),
    array('type' => 'table', 'table' => $_TABLES['gus_ignore'], 'sql' => $_SQL['gus_ignore']),
    array('type' => 'table', 'table' => $_TABLES['gus_vars'], 'sql' => $_SQL['gus_vars']),
    array('type' => 'group', 'group' => 'Gus Admin', 'desc' => 'Moderators of the Gus Plugin',
            'variable' => 'admin_group_id', 'addroot' => true, 'admin' => true),
    array('type' => 'feature', 'feature' => 'gus.admin', 'desc' => 'Ability to administer the GUS plugin', 'variable' => 'admin_feature_id'),
    array('type' => 'feature', 'feature' => 'gus.view', 'desc' => 'GUS Viewer', 'variable' => 'view_feature_id'),
    array('type' => 'mapping', 'group' => 'admin_group_id', 'feature' => 'admin_feature_id', 'log' => 'Adding GUS feature to the GUS admin group'),
    array('type' => 'mapping', 'group' => 'admin_group_id', 'feature' => 'view_feature_id', 'log' => 'Adding GUS feature to the GUS admin group'),

    array('type' => 'sql', 'sql' => $_DATA['remote_ip']),
    array('type' => 'sql', 'sql' => $_DATA['ignore_user']),
    array('type' => 'sql', 'sql' => $_DATA['capture']),
    array('type' => 'sql', 'sql' => $_DATA['imported']),

    array('type' => 'block', 'name' => 'gus_block', 'title' => "Who's Online",
          'phpblockfn' => 'phpblock_gusstats', 'block_type' => 'phpblock',
          'group_id' => 'admin_group_id'),
);

/**
* Puts the datastructures for this plugin into the glFusion database
*
* Note: Corresponding uninstall routine is in functions.inc
*
* @return   boolean True if successful False otherwise
*
*/
function plugin_install_gus()
{
    global $INSTALL_plugin, $_GUS_CONF;

    $pi_name            = $_GUS_CONF['pi_name'];
    $pi_display_name    = $_GUS_CONF['pi_display_name'];
    $pi_version         = $_GUS_CONF['pi_version'];

    COM_errorLog("Attempting to install the $pi_display_name plugin", 1);

    $ret = INSTALLER_install($INSTALL_plugin[$pi_name]);
    if ($ret > 0) {
        return false;
    }

    return true;
}

/**
* Loads the configuration records for the Online Config Manager
*
* @return   boolean     true = proceed with install, false = an error occured
*
*/
function plugin_load_configuration_gus()
{
    global $_CONF;

    require_once $_CONF['path'].'plugins/gus/install_defaults.php';

    return plugin_initconfig_gus();
}


/**
* Automatic uninstall function for plugins
*
* @return   array
*
* This code is automatically uninstalling the plugin.
* It passes an array to the core code function that removes
* tables, groups, features and php blocks from the tables.
* Additionally, this code can perform special actions that cannot be
* foreseen by the core code (interactions with other plugins for example)
*
*/

function plugin_autouninstall_gus ()
{
    $out = array (
        /* give the name of the tables, without $_TABLES[] */
        'tables' => array ( 'gus_userstats',
						'gus_user_agents',
                        'gus_ignore',
						'gus_ignore_ip',
						'gus_ignore_user',
						'gus_ignore_page',
						'gus_ignore_ua',
						'gus_ignore_host',
						'gus_vars',
        				'gus_ignore_referrer' ),
        /* give the full name of the group, as in the db */
        'groups' => array('Gus Admin'),
        /* give the full name of the feature, as in the db */
        'features' => array('gus.admin','gus.view'),
        /* give the full name of the block, including 'phpblock_', etc */
        'php_blocks' => array('phpblock_gusstats'),
        /* give all vars with their name */
        'vars'=> array()
    );
    return $out;
}
?>