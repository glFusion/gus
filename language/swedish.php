<?php
###############################################################################
# lang.php
# This is the Swedish language page for GUS
#
# Copyright (C) 2002, 2003, 2005
# Andy Maloney - asmaloney@users.sf.net
# Tom Willett  - twillett@users.sourceforge.net
# Markus Berg  - markus@kelvin.nu
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

if (!defined ('GVERSION')) {
    die ('This file cannot be used on its own.');
}

###############################################################################

$LANG_GUS00 = array(
    'GUS_title' => 'Statistik',
    'main_menu_title' => 'Bes�karstatistik',
    'priv_pol' => 'Sekretesspolicy',
    'links_followed' => 'F�ljda l�nkar',
    'link' => 'L�nk',
    'type' => 'Typ',
    'ptu' => 'Sida/Titel/URL',
    'browsers' => 'Webbl�sare',
    'browser' => 'Webbl�sare',
    'version' => 'Version',
    'platforms' => 'Operativsystem',
    'platform' => 'Operativsystem',
    'new_comments' => 'Nya kommentarer',
    'comment_title' => 'Kommentarstitel',
    'datetime' => 'Datum/Tid',
    'time' => 'Time',
    'countries' => 'L�nder',
    'code' => 'Kod',
    'referer' => 'H�nvisning',
    'referers' => 'H�nvisningar',
    'count' => 'Antal',
    'new_stories' => 'Nya artiklar',
    'story_title' => 'Artikeltitel',
    'hits' => 'Tr�ffar',
    'user' => 'Anv�ndare',
    'page' => 'Sida',
    'pages' => 'Sidor',
    'page_views' => 'Visningar',
    'views_per_page' => 'Visningar/sida',
    'views_per_hour' => 'Visningar/timme',
    'hour' => 'Timme',
    'ip' => 'IP',
    'host' => 'Host',
    'hostname' => 'Datornamn',
    'anon_users' => 'Anonyma',
    'reg_users' => 'Reg Users',
    'unique_visitors' => 'Unika bes�k',
    'views' => 'Visningar/bes�k',
    'total' => 'Totalt',
    'daily_title' => 'Daglig bes�karstatistik',
    'monthly_title' => 'M�natlig bes�karstatistik',
    'day_title' => 'Dag',
    'month_title' => 'M�nad',
    'anon_title' => 'Anonyma bes�kare',
    'reg_title' => 'Inloggade bes�kare',
    'page_title' => 'Antal visade sidor',
    'comm_title' => 'Kommentarer',
    'link_title' => 'F�ljda l�nkar',
    'hour_title' => 'Per timme',
    'referer_title' => 'H�nvisning',
    'country_title' => 'Land',
    'browser_title' => 'Webbl�sare',
    'platform_title' => 'Operativsystem',
    'access_denied' => '�tkomst nekas',
    'access_denied_msg' => 'Bara vissa anv�ndare har tillg�ng till den h�r sidan.  Ditt namn och IP har loggats.',
    'install_header' => 'Installera GUS',
    'sortDESC' => 'Sortera fallande',
    'sortASC' => 'Sortera stigande',
    'import_header' => 'GUS Importera Data',
    'allow_usage_tracking' => 'Allow Usage Tracking',
    'tracking_help' => 'This site collects usage statistics consisting of username, IP address, page visited and date / time. By checking the Allow Usage Tracking checkbox, you grant permission to collect this data when logged into the site.'
);

$LANG_GUS_blocks = array(
    'admin_menu_title' => 'GUS',
    'user_menu_title' => 'GUS',
    'today' => 'idag'
);

$LANG_GUS_wo = array(
    'title' => 'Vem �r h�r',
    'bots' => 'Bots',
    'stats' => 'Statistik',
    'reg_users' => 'Inloggade',
    'referers' => 'H�nvisningar',
    'new_users' => 'Nya anv�ndare',
    'page_title' => 'Antal visade sidor',
    'unique_visitors' => 'Unika bes�k'
);

$LANG_GUS_builtin_stats = array(
    'unique_visitors' => 'Unika bes�kare',
    'users' => 'Inloggade anv�ndare'
);

$LANG_GUS_admin = array(
    'admin' => 'GUS Admin',
    'capture' => 'Statistikmodulen',
    'captureon' => 'Statistikmodulen �r P�',
    'captureoff' => 'Statistikmodulen �r AV',
    'turnon' => 'Aktivera statistikinsamling',
    'turnoff' => 'Avaktivera statistikinsamling',
    'ignore' => 'Ignorera',
    'tip' => 'Tip:',
    'example' => 'Example:',
    'wildcard_tip' => 'Use % as a wildcard.  Matching uses the MySQL <a href="http://dev.mysql.com/doc/mysql/en/string-comparison-functions.html">LIKE</a> syntax.',
    'irreversible' => '<b>This is irreversible</b>, so make sure you really want to do this.',
    'clean_msg1' => 'Based on these filters, I took a quick look and have found entries in your database which match.',
    'clean_msg2' => 'Would you like me to clean these up?',
    'clean_num_entries' => 'Number of matching entries',
    'clean_up' => 'Clean Up',
    'star' => '* This section has some data which you may want to clean out of the database.',
    'add' => 'L�gg till',
    'remove' => 'Radera',
    'ip_title' => 'IP-addresser',
    'ip_tip' => 'Your IP address is',
    'ip_example' => 'Using 123.0.1.% will ignore all addresses in the range 123.0.1.0 - 123.0.1.255.  Using 123.0.1% will ignore all of those <i>and</i> 123.0.10.% - 123.0.199.% - be careful of the period!',
    'ip_num_ip' => 'Number of matching IP addresses',
    'user_title' => 'Anv�ndaren',
    'user_num_user' => 'Number of matching users',
    'page_title' => 'Sidor',
    'page_num_page' => 'Number of matching pages',
    'ua_title' => 'User Agents',
    'ua_example' => 'Using %Googlebot% will ignore any user agent containing the term Googlebot.',
    'ua_num_ua' => 'Number of matching user agents',
    'host_title' => 'Host Names',
    'host_tip' => 'Your host name appears to be',
    'host_example' => 'Using %.googlebot.com will ignore the google bot.',
    'host_num_host' => 'Number of matching hosts',
    'referrer_title' => 'Referrers',
    'referrer_example' => 'Using %images.google.% will ignore any pages referred from any of the google image sites.',
    'referrer_num_referrer' => 'Number of matching referrers',
    'remove_data' => 'Radera Data',
    'import_data' => 'Importera Data',
    'housekeeping' => 'Purge Old Data',
    'purge_history' => 'Purge History'
);

// Localization of the Admin Configuration UI
$LANG_configsections['gus'] = array(
    'label' => 'glFusion Usage Stats (GUS)',
    'title' => 'GUS Configuration'
);

$LANG_confignames['gus'] = array(
    'host_lookup' => 'Hostname Lookup Method',
    'host_lookup_timeout' => 'Timeout for host lookup',
    'SQL_use_TEMPORARY' => 'Use MySQL Temporary Tables',
    'show_left_blocks' => 'Show Navigation Blocks',
    'show_right_blocks' => 'Show Extra Blocks',
    'allow_ignore_anonymous' => 'Ignore Non-Logged in Users',
    'hide_in_day_summary' => 'Referrers to hide from Daily Summary',
    'wo_fullname' => 'Use user\'s full name',
    'wo_users_anonymous' => 'Show anonymous users',
    'wo_online' => 'Show online users',
    'wo_show_bots' => 'Show Bots',
    'wo_registered' => 'Show registered Users',
    'wo_new' => 'Show New Users',
    'wo_daily' => 'Show Daily Totals',
    'wo_refs' => 'Show Referrers',
    'wo_hide_referrers' => 'Referrers to Exclude',
    'wo_max_referrers' => 'Max Referrers to Show',
    'whois_url' => 'URL to Whois Lookup',
    'anon_access' => 'Anonymous Access',
    'enable_main_menu_GUS' => 'Add GUS to main menu',
    'enable_main_menu_privacy_policy' => 'Enable Privacy Policy',
    'gus_user' => 'Enable GUS link on User Menu',
    'gus_stats' => 'Add GUS stats to site Statistics Page',
    'registration_opt_in' => 'Require Opt-In on Registration screen to collect statistics',
    'profile_opt_in' => 'Allow user to opt-out of stats collection in My Account'
);

$LANG_configsubgroups['gus'] = array(
    'sg_main' => 'Configuration Settings'
);

$LANG_fs['gus'] = array(
    'gus_options' => 'General Settings',
    'gus_wo' => 'Who\'s Online Block Settings',
    'gus_access' => 'Permissions'
);

// Note: entries 0, 1, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['gus'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => true, 'False' => false),
    2 => array('Host' => 'host', 'Nslookup' => 'nslookup', 'gethostbyaddr' => 'gethostbyaddr', 'None' => 'none')
);

?>