<?php
###############################################################################
# german_utf-8.php
# This is the German language page for GUS
# Modifiziert: August 09 Tony Kluever
#
# Copyright (C) 2002, 2003, 2005
# Andy Maloney - asmaloney@users.sf.net
# Tom Willett  - twillett@users.sourceforge.net
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
    'GUS_title' => 'GUS',
    'main_menu_title' => 'Besucherstatistiken',
    'priv_pol' => 'Privacy Policy',
    'links_followed' => 'Links gefolgt',
    'link' => 'Link',
    'type' => 'Typ',
    'ptu' => 'Seite/Titel/URL',
    'browsers' => 'Browser',
    'browser' => 'Browser',
    'version' => 'Version',
    'platforms' => 'Plattformen',
    'platform' => 'Plattform',
    'new_comments' => 'Neue Kommentare',
    'comment_title' => 'Kommentartitel',
    'datetime' => 'Datum/Zeit',
    'time' => 'Zeit',
    'countries' => 'Länder',
    'code' => 'Code',
    'referer' => 'Referrer',
    'referers' => 'Referrer',
    'count' => 'Zähler',
    'new_stories' => 'Neue Artikel',
    'story_title' => 'Artikeltitel',
    'hits' => 'Treffer',
    'user' => 'Benutzer',
    'page' => 'Seite',
    'pages' => 'Seiten',
    'page_views' => 'Seitenaufrufe',
    'views_per_page' => 'Aufrufe/Seite',
    'views_per_hour' => 'Aufrufe/Stunde',
    'hour' => 'Stunde',
    'ip' => 'IP',
    'host' => 'Host',
    'hostname' => 'Hostname',
    'anon_users' => 'Gäste',
    'reg_users' => 'Registrierte Benutzer',
    'unique_visitors' => 'Eindeutige Besuche',
    'views' => 'Aufrufe/Besuch',
    'total' => 'Gesamt',
    'daily_title' => 'Besucherstatistiken nach Tag',
    'monthly_title' => 'Besucherstatistiken nach Monat',
    'day_title' => 'Tag',
    'month_title' => 'Monat',
    'anon_title' => 'Gäste',
    'reg_title' => 'Registrierte Besucher',
    'page_title' => 'Seitenaufrufe',
    'comm_title' => 'Kommentare',
    'link_title' => 'Links gefolgt',
    'hour_title' => 'nach Stunde',
    'referer_title' => 'Referer',
    'country_title' => 'Land',
    'browser_title' => 'Browser',
    'platform_title' => 'Plattform',
    'access_denied' => 'Zugriff verweigert',
    'access_denied_msg' => 'Nur bestimmte Benutzer haben Zugriff auf diese Seite. Dein Benutzername und IP wurden aufgezeichnet.',
    'install_header' => 'GUS - Installation',
    'sortDESC' => 'Absteigend sortieren',
    'sortASC' => 'Aufsteigend sortieren',
    'import_header' => 'GUS Daten importieren',
    'allow_usage_tracking' => 'Allow Usage Tracking',
    'tracking_help' => 'This site collects usage statistics consisting of username, IP address, page visited and date / time. By checking the Allow Usage Tracking checkbox, you grant permission to collect this data when logged into the site.'
);

$LANG_GUS_blocks = array(
    'admin_menu_title' => 'GUS',
    'user_menu_title' => 'GUS',
    'today' => 'heute'
);

$LANG_GUS_wo = array(
    'title' => 'Wer ist Online',
    'bots' => 'Bots',
    'stats' => 'Stats',
    'reg_users' => 'Reg. Benutzer',
    'referers' => 'Referrer',
    'new_users' => 'Neue Benutzer',
    'page_title' => 'Seitenaufrufe',
    'unique_visitors' => 'Eindeutige Besuche'
);

$LANG_GUS_builtin_stats = array(
    'unique_visitors' => 'Eindeutige Besucher',
    'users' => 'Registrierte Besucher'
);

$LANG_GUS_admin = array(
    'admin' => 'GUS-Admin',
    'capture' => 'Erfassung',
    'captureon' => 'Statistikenerfassung ist AN',
    'captureoff' => 'Statistikenerfassung is AUS',
    'turnon' => 'Erfassung anschalten',
    'turnoff' => 'Erfassung ausschalten',
    'ignore' => 'Ignorieren',
    'tip' => 'Tipp:',
    'example' => 'Beispiel:',
    'wildcard_tip' => 'Verwende % als Platzhalter. Abgleich verwendet die MySQL <a href="http://dev.mysql.com/doc/mysql/en/string-comparison-functions.html">LIKE</a>-Syntax.',
    'irreversible' => '<b>Dies ist unumkehrbar</b>, sei Dir also sicher, dass Du es wirklich willst.',
    'clean_msg1' => 'Basierend auf diesen Filtern, habe ich Einträge in der Datenbank gefunden, die übereintimmen.',
    'clean_msg2' => 'Soll ich diese säubern?',
    'clean_num_entries' => 'Anzahl der passenden Einträge',
    'clean_up' => 'Säubern',
    'star' => '* Diese Sektion hat einige Daten, die Du vielleicht aus der Datenbank entfernen möchtest.',
    'add' => 'Hinzufügen',
    'remove' => 'Entfernen',
    'ip_title' => 'IP-Addressen',
    'ip_tip' => 'Deine IP-Addresse ist',
    'ip_example' => 'Verwendung von 123.0.1.% wird alle Adressen im Bereich 123.0.1.0 - 123.0.1.255 ignorieren. Verwendugn von 123.0.1% wird all diese <i>und</i> 123.0.10.% - 123.0.199.% ignorieren - sei vorsichtig mit dem Punkt!',
    'ip_num_ip' => 'Anzahl der übereinstimmenden IP-Adressen',
    'user_title' => 'Benutzer',
    'user_num_user' => 'Anzahl der übereinstimmenden Benutzer',
    'page_title' => 'Seiten',
    'page_num_page' => 'Anzahl der übereinstimmenden Seiten',
    'ua_title' => 'User-Agents',
    'ua_example' => 'Verwenden von %Googlebot% wird alle User-Agents ignorieren, die Googlebot beinhalten.',
    'ua_num_ua' => 'Anzahl der übereinstimmenden Agents',
    'host_title' => 'Hostnamen',
    'host_tip' => 'Dein Hostname scheint dieser zu sein: ',
    'host_example' => 'Verwendung von %.googlebot.com ignoriert den Googlebot.',
    'host_num_host' => 'Anzahl der übereinstimmenden Hosts',
    'referrer_title' => 'Referrer',
    'referrer_example' => 'Verwendung von %images.google.% wird alle Seiten ignorierenw, die von Google Image Seiten referriert werden.',
    'referrer_num_referrer' => 'Anzahl der übereinstimmenden Referrer',
    'remove_data' => 'Daten entfernen',
    'import_data' => 'Daten importieren',
    'housekeeping' => 'Alte Daten säubern',
    'purge_history' => 'Verlauf säubern'
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

$LANG_configSelect['gus'] = array(
    0 => array(1=>'Ja', 0 => 'Nein'),
    1 => array(true => 'Ja', false => 'Nein'),
    2 => array('host' => 'Host', 'nslookup' => 'Nslookup', 'gethostbyaddr' => 'gethostbyaddr', 'none'=> 'Keine'),
);

?>