## GUS Plugin for glFusion

For the latest documentation, please see

https://www.glfusion.org/wiki/glfusion:plugins:gus:start

### LICENSE

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

### OVERVIEW

The glFusion Usage Stats [GUS] plugin collects statistics on who visits your site, what browser and operating system they are using, which pages they view, and which links they are clicking to get there. It allows the administrator to browse these stats through a series of tables, getting right down into the data.

### SYSTEM REQUIREMENTS

GUS has the following system requirements:

* PHP 5.3.3 and higher.
* glFusion v1.5.0 or newer.  This version does not work on older versions of glFusion.

### INSTALLATION

The GUS Plugin uses the glFusion automated plugin installer. Simply upload the distribution using the glFusion plugin installer located in the Plugin Administration page.

### UPGRADING

The upgrade process is identical to the installation process, simply upload the distribution from the Plugin Administration page.

### CONFIGURATION

In the Admin block you will find a link to the GUS admin page where you may set up ignored IP addresses, pages, and users. By default the user and IP of the user who installed the plugin is entered in the ignore list and statistics capture is turned on. The admin page lets you enter additional users and IPs for which usage information will not be collected. It also allows you to enable and disable statics capture.

Set up security. Upon install, only the root users have access to statistics admin and viewing. You can delegate control for either of these functions through the user and group editors.

Review the privacy policy. The installation also provides a privacy policy page. This is controlled by the **Enable Privacy Policy** setting in the GUS configuration. If your site already has a privacy policy available to your site users, I would encourage you to review it and see that it is worded so that your site users know what information is being collected about them. If you allowed anonymous access, a link to the visitor statistics viewer is also added.

#### Configuration Options

Configuration options are controlled in the glFusion Online configuration section under Command & Control.


**Hostname Lookup Method**
:  The method to use for host name look up - can be 'host','nslookup', 'gethostbyaddr', or 'none'

**Timeout for Host Lookup**
:	Sets the timeout for host name look up using 'host' or 'nslookup' [minimum 1 second]

**Use MySQL Temporary Tables**
:	Set this to false if you know you cannot use temporary tables in your MySQL setup. If you aren't sure, then leave it set to true - everything will still work properly. This is only used as a slight optimization - it doesn't have to try to use TEMPORARY tables first.

**Show Navigation Blocks**
:	Set these to show or hide the left and right blocks

**Show Extra Blocks**
:	Right or left

**Ignore Non-Logged-in Users**
:	Set this to true if you want to be able to ignore the user 'Anonymous' Leaving it false allows a slight optimization by eliminating a database look up.

**Referrers to hide from Daily Summary**
: 	Set this to the referrers you DO NOT want to show up in the day summary. Note that the data is still collected, it is just not visible in the day summary.

### Who's Online Block Settings

**Use User's Full Name**
:   If set to true then the full name is displayed if available instead of username

**Show Anonymous Users**
:   If set to true, show only a count of users for Who's Online, Registered Users, and New Users to anon users

**Show Online Users**
:   If set to true, show a list of who's online

**Show Bots**
:   If set to true, then show bots as they access your site

**Show Registered Users**
:   If set to true, show Registered users

**Show New Users**
:   If set to true, show New users

**Show Daily Totals**
:   If set to true, show daily usage stats

**Show Referrers**
:   If set to true, show referrers

**Referrers to Exclude**
:   Set this to the referrers you DO NOT want to show up in the Who's Online block. Note that the data is still collected, it is just not visible in the block.

**Max Referrers to Show**
:   Maximum number of referrers to show

### Permissions

**Anonymous Access**
:	Enable anonymous access to summary stats

**Add GUS to main menu**
:	Show a link in the main menu if user has permission to access the stats

**Enable Privacy Policy**
:	Show a link to the privacy policy in the main menu

**Enable GUS link on User Menu**
:	Set to True to enable user stats menu option in the 'User Functions' block

**Add GUS stats to site Statistics Page**
:	Set to True to extend the regular glFusion stats page to include 'Unique Visitors' and 'Registered Users'

