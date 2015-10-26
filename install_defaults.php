<?php
// +--------------------------------------------------------------------------+
// | GUS Plugin - glFusion CMS                                                |
// +--------------------------------------------------------------------------+
// | install_defaults.php                                                     |
// |                                                                          |
// | Initial Installation Defaults used when loading the online configuration |
// | records. These settings are only used during the initial installation    |
// | and not referenced any more once the plugin is installed.                |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2015 by the following authors:                             |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
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
    $c = config::get_instance();

    // Subgroup: Gus
    $c->add('sg_main', NULL, 'subgroup', 0, 0, NULL, 0, true, 'gus');

    $c->add('gus_options', NULL, 'fieldset', 0, 0, NULL, 0, TRUE);

    $c->add('hostlookup','gethostbyaddr','select', 0, 0, 2, 10, true, 'gus');
    $c->add('host_lookup_timeout', '1', 'text', 0, 0, 0, 20, true, 'gus');
    $c->add('SQL_use_TEMPORARY', 1, 'select', 0, 0, 0, 30, true, 'gus');
    $c->add('show_left_blocks', 1, 'select', 0, 0, 0, 40, true, 'gus');
    $c->add('show_right_blocks',1, 'select', 0, 0, 0, 50, true, 'gus');
    $c->add('allow_ignore_anonymous',0,'select', 0, 0, 0, 60, true, 'gus');
    $c->add('hide_in_day_summary',array($_CONF['site_url']),'%text',0,0,0,70,true,'gus');

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

    $c->add('gus_other', NULL, 'fieldset', 0, 2, NULL, 0, true, 'gus');
    $c->add('whois_url', 'http://www.whois.sc/', 'text', 0, 2, 0, 10, true, 'gus');

    $c->add('gus_access', NULL, 'fieldset', 0, 3, NULL, 0, true, 'gus');
    $c->add('anon_access', '0', 'select', 0, 3, 0, 10, true, 'gus');
    $c->add('enable_main_menu_GUS', '0', 'select', 0, 3, 0, 30, true, 'gus');
    $c->add('enable_main_menu_privacy_policy', '0', 'select', 0, 3, 0, 40, true, 'gus');
    $c->add('gus_user', '1', 'select', 0, 3, 0, 50, true, 'gus');
    $c->add('gus_stats', '0', 'select', 0, 3, 0, 60, true, 'gus');

    return true;
}
?>


/ This the URL for the Whois lookup. This uses www.whois.sc
$_GUS_Whois_URL_start = '<a href="http://www.whois.sc/';
$_GUS_Whois_URL_end = '" target="_blank">';
$_GUS_IMG_name = "GUS48.png";
$_GUS_IMG_small_name = "GUS24.png";
$_GUS_anon_access = 0;
$_GUS_enable_main_menu_GUS = 0;
$_GUS_enable_main_menu_privacy_policy = 0;
$_GUS_user = 1;
$_GUS_stats = 1;
$_GUS_phplinks = 0;
$_GUS_limit = 25;
$_GUS_months = 4;
$_GUS_days = 31;
$_GUS_cache = true;













// If set to true, then show bots as they access your site
$_GUS_CONF['wo_show_bots'] = true;

// If set to true, show Registered users
$_GUS_CONF['wo_registered'] = true;

// If set to true, show New users
$_GUS_CONF['wo_new'] = true;

// If set to true, show daily usage stats
$_GUS_CONF['wo_daily'] = true;

// If set to true, show referrers
$_GUS_CONF['wo_refs'] = false;

// Set this to the referrers you DO NOT want to show up in the Who's Online block.
//	Note that the data is still collected, it is just not visible in the block.
$_GUS_CONF['wo_hide_referrers'] = array(
		$_CONF['site_url']
	//	, 'http://images.google.com'	// hide all images.google.com referrers
	//	, 'http://images.google.'		// hide all images.google.* referrers
		 );

// Maximum number of referrers to show
$_GUS_CONF['wo_max_referrers'] = 100;

// The method to use for host name lookup - can be 'host', 'nslookup', 'gethostbyaddr', or 'none'
// If your system is set up such that you cannot execute shell commands, use 'gethostbyaddr'.
$_GUS_CONF['host_lookup'] = 'gethostbyaddr';

// sets the timeout for host name lookup using 'host' or 'nslookup' [minimum 1 second]
$_GUS_CONF['host_lookup_timeout'] = 1;

// Set this to false if you know you cannot use temporary tables in your MySQL setup.
// If you aren't sure, then leave it set to true - everything will still work properly.
//	This is only used as a slight optimization - it doesn't have to try to use TEMPORARY tables first.
$_GUS_CONF['SQL_use_TEMPORARY'] = true;

// Set these to show or hide the left and right blocks
$_GUS_CONF['show_left_blocks'] = true;
$_GUS_CONF['show_right_blocks'] = false;

// Set this to true if you want to be able to ignore the user 'Anonymous'
//	Leaving it false allows a slight optimisation by eliminating a db lookup
$_GUS_CONF['allow_ignore_anonymous'] = false;

// Set this to the referrers you DO NOT want to show up in the day summary.
//	Note that the data is still collected, it is just not visible in the day summary.
$_GUS_CONF['hide_in_day_summary'] = array(
		$_CONF['site_url']
	//	, 'http://images.google.com'	// hide all images.google.com referrers
	//	, 'http://images.google.'		// hide all images.google.* referrers
		 );

// This the URL for the Whois lookup. This uses www.whois.sc
// If you have an alternate source of this information supply it here.
$_GUS_Whois_URL_start = '<a href="http://www.whois.sc/';
$_GUS_Whois_URL_end = '" target="_blank">';

// The icon to use for the GUS pages - located in the public_html/gus/images/ directory
$_GUS_IMG_name = "GUS48.png";
$_GUS_IMG_small_name = "GUS24.png";

// Enable anononymous access to summary stats
$_GUS_anon_access = 0;

// Show a link in the main menu if user has permission to access the stats
$_GUS_enable_main_menu_GUS = 0;

// Show a link to the privacy policy in the main menu
$_GUS_enable_main_menu_privacy_policy = 0;

// Set to 1 to enable user stats menu option in the 'User Functions' block
$_GUS_user = 1;

// Set to 1 to extend the regular glFusion stats page to include 'Unique Visitors' and 'Registered Users'
$_GUS_stats = 1;

// Set to 1 to enable phplinks integration
$_GUS_phplinks = 0;

// Limit on number of lines to display on certain stats reports
$_GUS_limit = 25;

// Number of months displayed on the index page
$_GUS_months = 4;

// Number of days on each page
$_GUS_days = 31;

// Enable the caching of stats
$_GUS_cache = true;

// The following variables allow custom configuration of WhosOnline Block.

// If set to true then the full name is displayed if available instead of username
$_GUS_CONF['wo_fullname'] = false;

// If set to true, show only a count of users for Who's Online, Registered Users, and New Users to anon users
$_GUS_CONF['wo_users_anonymous'] = true;

// If set to true, show a list of who's online
$_GUS_CONF['wo_online'] = true;

// If set to true, then show bots as they access your site
$_GUS_CONF['wo_show_bots'] = true;

// If set to true, show Registered users
$_GUS_CONF['wo_registered'] = true;

// If set to true, show New users
$_GUS_CONF['wo_new'] = true;

// If set to true, show daily usage stats
$_GUS_CONF['wo_daily'] = true;

// If set to true, show referrers
$_GUS_CONF['wo_refs'] = false;

// Set this to the referrers you DO NOT want to show up in the Who's Online block.
//	Note that the data is still collected, it is just not visible in the block.
$_GUS_CONF['wo_hide_referrers'] = array(
		$_CONF['site_url']
	//	, 'http://images.google.com'	// hide all images.google.com referrers
	//	, 'http://images.google.'		// hide all images.google.* referrers
		 );

// Maximum number of referrers to show
$_GUS_CONF['wo_max_referrers'] = 100;