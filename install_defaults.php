<?php
/**
* glFusion CMS
*
* GUS - glFusion Usage Stats
*
* Configuration Settings
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

/**
* Initialize GUS plugin configuration
*
* Creates the database entries for the configuation if they don't already
* exist.
*
* @return   boolean     true: success; false: an error occurred
*
*/
function plugin_initconfig_gus()
{
    global $_CONF;

    $c = config::get_instance();

    // Subgroup: Gus
    $c->add('sg_main', NULL, 'subgroup', 0, 0, NULL, 0, true, 'gus');
    $c->add('gus_options', NULL, 'fieldset', 0, 0, NULL, 0, TRUE, 'gus');

    $c->add('registration_opt_in',1,'select', 0, 0, 0, 5, true, 'gus');
    $c->add('profile_opt_in',1,'select', 0, 0, 0, 7, true, 'gus');

    $c->add('host_lookup','gethostbyaddr','select', 0, 0, 2, 10, true, 'gus');
    $c->add('host_lookup_timeout', '1', 'text', 0, 0, 0, 20, true, 'gus');
    $c->add('SQL_use_TEMPORARY', 1, 'select', 0, 0, 0, 30, true, 'gus');
    $c->add('show_left_blocks', 0, 'select', 0, 0, 0, 40, true, 'gus');
    $c->add('show_right_blocks',0, 'select', 0, 0, 0, 50, true, 'gus');
    $c->add('allow_ignore_anonymous',1,'select', 0, 0, 0, 60, true, 'gus');
    $c->add('hide_in_day_summary',array($_CONF['site_url']),'%text',0,0,0,70,true,'gus');
    $c->add('whois_url', 'http://www.whois.sc/', 'text', 0, 0, 0, 80, true, 'gus');
    $c->add('gus_wo', NULL, 'fieldset', 0, 1, NULL, 0, true, 'gus');
    $c->add('wo_fullname',0,'select',0,1,0,10,true,'gus');
    $c->add('wo_users_anonymous',0,'select',0,1,0,20,true,'gus');
    $c->add('wo_online',1,'select',0,1,0,30,true,'gus');
    $c->add('wo_show_bots',1,'select',0,1,0,40,true,'gus');
    $c->add('wo_registered',1,'select',0,1,0,50,true,'gus');
    $c->add('wo_new',1,'select',0,1,0,60,true,'gus');
    $c->add('wo_daily',1,'select',0,1,0,70,true,'gus');
    $c->add('wo_refs',0,'select',0,1,0,80,true,'gus');
    $c->add('wo_hide_referrers',array($_CONF['site_url']),'%text',0,1,0,90,true,'gus');
    $c->add('wo_max_referrers','100','text',0,1,0,100,true,'gus');
    $c->add('gus_access', NULL, 'fieldset', 0, 3, NULL, 0, true, 'gus');
    $c->add('anon_access', '0', 'select', 0, 3, 0, 10, true, 'gus');
    $c->add('enable_main_menu_GUS', '0', 'select', 0, 3, 0, 30, true, 'gus');
    $c->add('gus_user', '1', 'select', 0, 3, 0, 50, true, 'gus');
    $c->add('gus_stats', '0', 'select', 0, 3, 0, 60, true, 'gus');

    return true;
}
?>