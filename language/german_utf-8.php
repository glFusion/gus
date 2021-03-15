<?php
/**
* glFusion CMS
*
* GUS - glFusion Usage Stats Plugin for glFusion
*
* Language File - UTF-8
*
* @license GNU General Public License version 2 or later
*     http://www.opensource.org/licenses/gpl-license.php
*
*  Copyright (C) 2009-2018 by the following authors:
*   Mark R. Evans   mark AT glfusion DOT org
*
*  Based on the GUS Plugin
*
*  Copyright (C) 2002, 2003, 2005 by the following authors:
*     Authors: Andy Maloney      - asmaloney@users.sf.net
*              Tom Willett       - twillett@users.sourceforge.net
*
*/

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

/**
* General language
*/

$LANG_GUS00 = array (
	'GUS_title'	    => 'GUS',
    'main_menu_title' => 'Besucherstatistiken',
    'priv_pol'      => 'Datenschutzerklärung',
    'links_followed'=> 'Links gefolgt',
    'link'          => 'Link',
    'type'          => 'Typ',
    'ptu'           => 'Seite/Titel/URL',
    'browsers'      => 'Browser',
    'browser'       => 'Browser',
    'version'       => 'Version',
    'platforms'     => 'Plattformen',
    'platform'      => 'Plattform',
    'new_comments'  => 'Neue Kommentare',
    'comment_title' => 'Kommentartitel',
    'datetime'      => 'Datum/Zeit',
    'time'			=> 'Zeit',
    'countries'     => 'Länder',
    'code'          => 'Code',
    'referer'       => 'Referrer',
    'referers'      => 'Referrer',
    'count'         => 'Zähler',
    'new_stories'   => 'Neue Artikel',
    'story_title'   => 'Artikeltitel',
    'hits'          => 'Treffer',
    'user'          => 'Benutzer',
    'page'          => 'Seite',
    'pages'         => 'Seiten',
    'page_views'    => 'Seitenaufrufe',
    'views_per_page'=> 'Aufrufe/Seite',
    'views_per_hour'=> 'Aufrufe/Stunde',
    'hour'          => 'Stunde',
    'ip'            => 'IP',
    'host'			=> 'Host',
    'hostname'      => 'Hostname',
    'anon_users'    => 'Gäste',
	'reg_users'     => 'Registrierte Benutzer',
    'unique_visitors' => 'Eindeutige Besuche',
    'views'         => 'Aufrufe/Besuch',
    'total'         => 'Gesamt',
    'daily_title'   => 'Besucherstatistiken nach Tag',
    'monthly_title' => 'Besucherstatistiken nach Monat',
    'day_title'     => 'Tag',
    'month_title'   => 'Monat',
    'anon_title'    => 'Gäste',
    'reg_title'     => 'Registrierte Besucher',
    'page_title'    => 'Seitenaufrufe',
    'comm_title'    => 'Kommentare',
    'link_title'    => 'Links gefolgt',
    'hour_title'    => 'nach Stunde',
    'referer_title' => 'Referrer',
    'country_title' => 'Land',
    'browser_title' => 'Browser',
    'platform_title' => 'Plattform',
	'access_denied' => 'Zugriff verweigert',
	'access_denied_msg' => 'Nur bestimmte Benutzer haben Zugriff auf diese Seite. Dein Benutzername und IP wurden aufgezeichnet.',
	'install_header'	=> 'GUS - Installation',
	'sortDESC'			=> 'Absteigend sortieren',
	'sortASC'			=> 'Aufsteigend sortieren',
	'import_header'     => 'GUS Daten importieren',
	'allow_usage_tracking' => 'Nutzungsverfolgung zulassen',
	'tracking_help'     => 'Diese Website sammelt Nutzungsstatistiken, bestehend aus Benutzernamen, IP-Adresse, besuchte Seite, Datum und Uhrzeit. Indem Sie das Kontrollkästchen „Nutzungsverfolgung zulassen“ aktivieren, stimmen Sie der Aufzeichnung dieser Daten zu.',
);

// Admin and user block entries
$LANG_GUS_blocks = array(
	'admin_menu_title'	=> 'GUS',
	'user_menu_title'	=> 'GUS',
	'today'				=> 'heute'
);

// Who's Online
$LANG_GUS_wo = array(
    'title'				=> "Wer ist Online",
	'bots'				=> 'Bots',
	'stats'				=> 'Statistiken',
	'reg_users'     	=> 'Reg. Benutzer',
	'referers'      	=> 'Referrer',
	'new_users'         => 'Neue Benutzer',
	'page_title'    	=> 'Seitenaufrufe',
	'unique_visitors'	=> 'Eindeutige Besuche'
);

// Builtin stats
$LANG_GUS_builtin_stats = array(
	'unique_visitors'	=> 'Eindeutige Besucher',
	'users'				=> 'Registrierte Besucher'
);

// Admin Page
$LANG_GUS_admin = array(
	'admin'		=> 'GUS-Admin',

	'capture'		=> 'Erfassung',
	'captureon'		=> 'Statistikenerfassung ist AN',
	'captureoff'	=> 'Statistikenerfassung is AUS',
	'turnon'		=> 'Erfassung anschalten',
	'turnoff'		=> 'Erfassung ausschalten',

	// Ignore section
	'ignore'    => 'Ignorieren',

	'tip'		=> 'Tipp:',
	'example'	=> 'Beispiel:',

	'wildcard_tip'	=> 'Verwende % als Platzhalter. Abgleich verwendet die MySQL <a href="http://dev.mysql.com/doc/mysql/en/string-comparison-functions.html">LIKE</a>-Syntax.',

	'irreversible'	=> '<b>Dies ist unumkehrbar</b>, sei Dir also sicher, dass Du es wirklich willst.',

	'clean_msg1'		=> 'Basierend auf diesen Filtern, habe ich Einträge in der Datenbank gefunden, die übereintimmen.',
	'clean_msg2'		=> 'Soll ich diese säubern?',
	'clean_num_entries'	=> 'Anzahl der passenden Einträge',
	'clean_up'			=> 'Säubern',
	'star'				=> '* Diese Sektion hat einige Daten, die Du vielleicht aus der Datenbank entfernen möchtest.',

	'add'		=> 'Hinzufügen',
	'remove'    => 'Entfernen',

	// IP
	'ip_title'		=> 'IP-Addressen',
	'ip_tip'		=> 'Deine IP-Addresse ist',
	'ip_example'	=> 'Verwendung von 123.0.1.% wird alle Adressen im Bereich 123.0.1.0 - 123.0.1.255 ignorieren. Verwendugn von 123.0.1% wird all diese <i>und</i> 123.0.10.% - 123.0.199.% ignorieren - sei vorsichtig mit dem Punkt!',
	'ip_num_ip'		=> 'Anzahl der übereinstimmenden IP-Adressen',

	// User
	'user_title'	=> 'Benutzer',
	'user_num_user'	=> 'Anzahl der übereinstimmenden Benutzer',

	// Page
	'page_title'	=> 'Seiten',
	'page_num_page'	=> 'Anzahl der übereinstimmenden Seiten',

	// User Agent
	'ua_title'		=> 'User-Agents',
	'ua_example'	=> 'Verwenden von %Googlebot% wird alle User-Agents ignorieren, die Googlebot beinhalten.',
	'ua_num_ua'		=> 'Anzahl der übereinstimmenden Agents',

	// Host
	'host_title'	=> 'Hostnamen',
	'host_tip'		=> 'Dein Hostname scheint dieser zu sein: ',
	'host_example'	=> 'Verwendung von %.googlebot.com ignoriert den Googlebot.',
	'host_num_host'	=> 'Anzahl der übereinstimmenden Hosts',

	// Referrer
	'referrer_title'	    => 'Referrer',
	'referrer_example'	    => 'Verwendung von %images.google.% wird alle Seiten ignorierenw, die von Google Image Seiten referriert werden.',
	'referrer_num_referrer'	=> 'Anzahl der übereinstimmenden Referrer',

	// Remove Data
	'remove_data'	=> 'Daten entfernen',

	// Import data
	'import_data'	=> 'Daten importieren',

	'housekeeping'  => 'Alte Daten säubern',
	'purge_history' => 'Verlauf säubern',
);

// Localization of the Admin Configuration UI
$LANG_configsections['gus'] = array(
    'label'                 => 'glFusion-Nutzungsstatistik (GUS)',
    'title'                 => 'GUS-Konfiguration'
);
$LANG_confignames['gus'] = array(
    'host_lookup'           => 'Hostname Suchmethode',
    'host_lookup_timeout'   => 'Timeout für Hostsuche',
    'SQL_use_TEMPORARY'     => 'MySQL-Temporäre Tabellen verwenden',
    'show_left_blocks'      => 'Menü-Block anzeigen',
    'show_right_blocks'     => 'Zusätzliche Blöcke anzeigen',
    'allow_ignore_anonymous'  => 'Gäste ignorieren',
    'hide_in_day_summary'   => 'Refferer in täglicher Zusammenfassung ausblenden',
    'wo_fullname'           => 'Vollen Namen des Benutzers verwenden',
    'wo_users_anonymous'	=> 'Anonyme Benutzer anzeigen',
    'wo_online'             => 'Online-Benutzer anzeigen',
    'wo_show_bots'          => 'Bots anzeigen',
    'wo_registered'         => 'Registrierte Benutzer anzeigen',
    'wo_new'                => 'Neue Benutzer anzeigen',
    'wo_daily'              => 'Tagessummen anzeigen',
    'wo_refs'               => 'Refferer anzeigen',
    'wo_hide_referrers'     => 'Ausschließende Refferer',
    'wo_max_referrers'      => 'Max anzuzeigende Referrer',
    'whois_url'             => 'URL zu Whois Suche',
    'anon_access'           => 'Anonymer Zugriff',
    'enable_main_menu_GUS'  => 'GUS zum Hauptmenü hinzufügen',
    'enable_main_menu_privacy_policy' => 'Datenschutzerklärung aktivieren',
    'gus_user'              => 'GUS-Link im Benutzermenü aktivieren',
    'gus_stats'             => 'GUS-Statistiken zur Seite "Website-Statistik" hinzufügen',
    'registration_opt_in'   => 'Opt-In im Registrierungsbildschirm erforderlich um Statistiken zu sammeln',
    'profile_opt_in'        => 'Erlaube dem Benutzer, die Statistiksammlung in Mein Konto abzubrechen',
);

$LANG_configsubgroups['gus'] = array(
    'sg_main'               => 'Haupteinstellungen'
);

$LANG_fs['gus'] = array(
    'gus_options'           => 'Allgemeine-Einstellungen',
    'gus_wo'                => 'Who\'s Online Block Settings',
    'gus_access'            => 'Rechte',
);

$LANG_configSelect['gus'] = array(
    0 => array(1=>'Ja', 0 => 'Nein'),
    1 => array(true => 'Ja', false => 'Nein'),
    2 => array('host' => 'Host', 'nslookup' => 'Nslookup', 'gethostbyaddr' => 'gethostbyaddr', 'none'=> 'Keine'),
);
?>
