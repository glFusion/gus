## GUS Plugin for glFusion
**Version: 2.3.0**

For the latest documentation, please see

http://www.glfusion.org/wiki/doku.php?id=gus:start

### LICENSE

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

### OVERVIEW

The glFusion Usage Stats [GUS] plugin collects statistics on who visits your site, what browser and operating system they are using, which pages they view, and which links they are clicking to get there. It allows the administrator to browse these stats through a series of tables, getting right down into the data.

### SYSTEM REQUIREMENTS

GUS has the following system requirements:

* PHP 5.3.0 and higher.
* glFusion v1.5.0 or newer.  This version does not work on older versions of glFusion.

### INSTALLATION

The GUS Plugin uses the glFusion automated plugin installer. Simply upload the distribution using the glFusion plugin installer located in the Plugin Administration page.

### UPGRADING

The upgrade process is identical to the installation process, simply upload the distribution from the Plugin Administration page.

### CONFIGURATION

In the Admin block you will find a link to the GUS admin page where you may set up ignored IP addresses, pages, and users. By default the user and IP of the user who installed the plugin is entered in the ignore list and statistics capture is turned on. The admin page lets you enter additional users and IPs for which usage information will not be collected. It also allows you to enable and disable statics capture.

Set up security. Upon install, only the root users have access to statistics admin and viewing. You can delegate control for either of these functions through the user and group editors.

Review the privacy policy. The installation also provides a privacy policy page. This is controlled by the $_GUS_priv variable in the config.php file. If your site already has a privacy policy available to your site users, I would encourage you to review it and see that it is worded so that your site users know what information is being collected about them. If you allowed anonymous access, a link to the visitor statistics viewer is also added.

#### Configuration Options

Configuration options are controlled in the glFusion Online configuration section under Command & Control.


**host-lookup**
:  The method to use for host name look up - can be 'host','nslookup', 'gethostbyaddr', or 'none'

**host_lookup_timeout**
:	Sets the timeout for host name look up using 'host' or 'nslookup' [minimum 1 second]

**SQL_use_TEMPORARY**
:	Set this to false if you know you cannot use temporary tables in your MySQL setup. If you aren't sure, then leave it set to true - everything will still work properly. This is only used as a slight optimization - it doesn't have to try to use TEMPORARY tables first.

**show_left_blocks**
:	Set these to show or hide the left and right blocks

**show_right_blocks**
:	Right or left

**allow_ignore_anonymous**
:	Set this to true if you want to be able to ignore the user 'Anonymous' Leaving it false allows a slight optimization by eliminating a database look up.

**hide_in_day_summary**
: 	Set this to the referrers you DO NOT want to show up in the day summary. Note that the data is still collected, it is just not visible in the day summary.

**GUS_Whois_URL_start**
:	This the URL for the Whois lookup. This uses www.whois.sc If you have an alternate source of this information supply it here.

**GUS_Whois_URL_end**
:	target="_blank"

**anon_access**
:	Enable anonymous access to summary stats

**enable_main_menu_GUS**
:	Show a link in the main menu if user has permission to access the stats

**enable_main_menu_privacy_policy**
:	Show a link to the privacy policy in the main menu

**GUS_user**
:	Set to 1 to enable user stats menu option in the 'User Functions' block

**GUS_stats**
:	Set to 1 to extend the regular glFusion stats page to include 'Unique Visitors' and 'Registered Users'

**GUS_phplinks**
:	Set to 1 to enable phplinks integration

**GUS_limit**
:	Limit on number of lines to display on certain stats reports


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
?>
