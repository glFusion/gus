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
    'main_menu_title' => 'Statystyki Odwiedzin',
    'priv_pol'      => 'Polityka Prywatności',
    'links_followed'=> 'Linki Śledzone ',
    'link'          => 'Link',
    'type'          => 'Typ',
    'ptu'           => 'Strona / Tytuł / WWW',
    'browsers'      => 'Przeglądarki',
    'browser'       => 'Przeglądarka',
    'version'       => 'Wersja',
    'platforms'     => 'Platformy',
    'platform'      => 'Platforma',
    'new_comments'  => 'Nowe Komentarze',
    'comment_title' => 'Komentarz Tytuł',
    'datetime'      => 'Data/Godzina',
    'time'			=> 'Czas',
    'countries'     => 'Państwa',
    'code'          => 'Code',
    'referer'       => 'Odwołujący',
    'referers'      => 'Odwołujące',
    'count'         => 'Liczba',
    'new_stories'   => 'Nowe Artykuły',
    'story_title'   => 'Tytuł Artykułu',
    'hits'          => 'Wyświetleń',
    'user'          => 'Użytkownik',
    'page'          => 'Strona',
    'pages'         => 'Strony',
    'page_views'    => 'Odsłony Strony',
    'views_per_page'=> 'Odwiedziny/Strona',
    'views_per_hour'=> 'Odwiedziny/Czas',
    'hour'          => 'Godzina',
    'ip'            => 'IP',
    'host'			=> 'Host',
    'hostname'      => 'Nazwa Hosta',
    'anon_users'    => 'Użytkownicy Anonimowi',
	'reg_users'     => 'Użytkownicy Zarejestrowani',
    'unique_visitors' => 'Unikalnych Wizyt',
    'views'         => 'Odwiedziny/Podgląd',
    'total'         => 'Razem',
    'daily_title'   => 'Statystyki odwiedzin według dni',
    'monthly_title' => 'Statystyki odwiedzin według miesięcy',
    'day_title'     => 'Dzień',
    'month_title'   => 'Miesiąc',
    'anon_title'    => 'Anonimowi Użytkownicy',
    'reg_title'     => 'Zarejestrowani Użytkownicy',
    'page_title'    => 'Odwiedzone Strony',
    'comm_title'    => 'Komentarze',
    'link_title'    => 'Linki Śledzące',
    'hour_title'    => 'Według Godzin',
    'referer_title' => 'Przekierowany z',
    'country_title' => 'Państwo',
    'browser_title' => 'Przeglądarka',
    'platform_title' => 'Platforma',
	'access_denied' => 'Odmowa Dostępu',
	'access_denied_msg' => 'Tylko niektórzy użytkownicy mają dostęp do tej strony. Twoje imię i adres IP zostały zarejestrowane.',
	'install_header'	=> 'Instalacja GUS',
	'sortDESC'			=> 'Sortuj malejąco',
	'sortASC'			=> 'Sortuj rosnąco',
	'import_header'     => 'Importuj Dane GUS',
	'allow_usage_tracking' => 'Zezwalaj na śledzenie',
	'tracking_help'     => 'Strona zbiera statystyki użytkowania składające się z nazwy użytkownika, adresu IP, odwiedzonej strony i daty / godziny. Zaznaczając pole wyboru Zezwalaj na śledzenie, udzielasz pozwolenia na gromadzenie tych danych po zalogowaniu się na stronie.',
);

// Admin and user block entries
$LANG_GUS_blocks = array(
	'admin_menu_title'	=> 'GUS',
	'user_menu_title'	=> 'GUS',
	'today'				=> 'dzisiaj'
);

// Who's Online
$LANG_GUS_wo = array(
    'title'				=> "Kto jest Online",
	'bots'				=> 'Boty',
	'stats'				=> 'Statystyki',
	'reg_users'     	=> 'Użytkownicy Zarejestrowani',
	'referers'      	=> 'Odsyłający',
	'new_users'         => 'Nowi Użytkownicy',
	'page_title'    	=> 'Odwiedzone Strony',
	'unique_visitors'	=> 'Unikalne Wizyty'
);

// Builtin stats
$LANG_GUS_builtin_stats = array(
	'unique_visitors'	=> 'Unikalni Odwiedzający',
	'users'				=> 'Zarejestrowani Użytkownicy'
);

// Admin Page
$LANG_GUS_admin = array(
	'admin'		=> 'GUS Admin',

	'capture'		=> 'Przechwycone',
	'captureon'		=> 'Statistics capture is ON',
	'captureoff'	=> 'Statistics capture is OFF',
	'turnon'		=> 'Turn Capture On',
	'turnoff'		=> 'Turn Capture Off',

	// Ignore section
	'ignore'    => 'Ignore',

	'tip'		=> 'Tip:',
	'example'	=> 'Example:',

	'wildcard_tip'	=> 'Use % as a wildcard.  Matching uses the MySQL <a href="http://dev.mysql.com/doc/mysql/en/string-comparison-functions.html">LIKE</a> syntax.',

	'irreversible'	=> '<b>This is irreversible</b>, so make sure you really want to do this.',

	'clean_msg1'		=> 'Based on these filters, I took a quick look and have found entries in your database which match.',
	'clean_msg2'		=> 'Would you like me to clean these up?',
	'clean_num_entries'	=> 'Number of matching entries',
	'clean_up'			=> 'Clean Up',
	'star'				=> '* This section has some data which you may want to clean out of the database.',

	'add'		=> 'Add',
	'remove'    => 'Remove',

	// IP
	'ip_title'		=> 'IP Addresses',
	'ip_tip'		=> 'Your IP address is',
	'ip_example'	=> 'Using 123.0.1.% will ignore all addresses in the range 123.0.1.0 - 123.0.1.255.  Using 123.0.1% will ignore all of those <i>and</i> 123.0.10.% - 123.0.199.% - be careful of the period!',
	'ip_num_ip'		=> 'Number of matching IP addresses',

	// User
	'user_title'	=> 'Users',
	'user_num_user'	=> 'Number of matching users',

	// Page
	'page_title'	=> 'Pages',
	'page_num_page'	=> 'Number of matching pages',

	// User Agent
	'ua_title'		=> 'Użytkownik Agent
',
	'ua_example'	=> 'Użycie %Googlebot% zignoruje dowolnego agenta użytkownika zawierającego typ Googlebot',
	'ua_num_ua'		=> 'Liczba pasujących agentów użytkowników',

	// Host
	'host_title'	=> 'Hosty Nazwy',
	'host_tip'		=> 'Twoja nazwa hosta wydaje się być',
	'host_example'	=> 'Użycie %.googlebot.com zignoruje bota google.',
	'host_num_host'	=> 'Liczba pasujących hostów',

	// Referrer
	'referrer_title'	    => 'Odsyłacz',
	'referrer_example'	    => 'Użycie %images.google.% zignoruje wszelkie strony, do których odwołują się strony graficzne google.',
	'referrer_num_referrer'	=> 'Liczba pasujących odsyłaczy',

	// Remove Data
	'remove_data'	=> '	Usuń Dane',

	// Import data
	'import_data'	=> 'Importuj Dane',

	'housekeeping'  => 'Usuń Stare Dane',
	'purge_history' => 'Oczyść Historię',
);

// Localization of the Admin Configuration UI
$LANG_configsections['gus'] = array(
    'label'                 => 'glFusion Statystyki Odwiedzin (GUS)
',
    'title'                 => 'GUS Konfiguracja'
);
$LANG_confignames['gus'] = array(
    'host_lookup'           => 'Metoda Wyszukiwania Hosta',
    'host_lookup_timeout'   => 'Przekroczono limit czasu na wyszukiwanie hosta',
    'SQL_use_TEMPORARY'     => 'Użyj tabel tymczasowych MySQL',
    'show_left_blocks'      => 'Pokaż Bloki Nawigacyjne',
    'show_right_blocks'     => 'Pokaż Dodatkowe Bloki',
    'allow_ignore_anonymous'  => 'Ignoruj niezalogowanych użytkowników',
    'hide_in_day_summary'   => 'Odsyłacze do ukrycia przed podsumowaniem dziennym',
    'wo_fullname'           => 'Użyj pełnej nazwy użytkownika',
    'wo_users_anonymous'	=> 'Pokaż anonimowych użytkowników',
    'wo_online'             => 'Pokaż użytkowników online',
    'wo_show_bots'          => 'Pokaż Boty',
    'wo_registered'         => 'Pokaż zarejestrowanych użytkowników',
    'wo_new'                => 'Pokaż nowych użytkowników',
    'wo_daily'              => 'Pokaż Dzienne Razem',
    'wo_refs'               => 'Pokaż Odsyłających',
    'wo_hide_referrers'     => 'Odsyłacze do Wykluczenia',
    'wo_max_referrers'      => 'Maksymalnie Odsyłaczy do Pokazania',
    'whois_url'             => 'Adres WWW do wyszukiwania Whois',
    'anon_access'           => 'Dostęp anonimowy',
    'enable_main_menu_GUS'  => 'Dodaj GUS do menu',
    'enable_main_menu_privacy_policy' => 'Włącz Politykę Prywatności',
    'gus_user'              => 'Włącz link GUS w Menu Użytkownika',
    'gus_stats'             => 'Dodaj statystyki GUS do strony Statystyk',
    'registration_opt_in'   => 'Wymagaj akceptacji na ekranie rejestracji, aby zebrać statystyki',
    'profile_opt_in'        => 'Zezwalaj użytkownikowi na rezygnację z zbierania statystyk na moim koncie',
);

$LANG_configsubgroups['gus'] = array(
    'sg_main'               => 'Ustawienia Konfiguracji'
);

$LANG_fs['gus'] = array(
    'gus_options'           => 'Ustawienia Główne',
    'gus_wo'                => 'Ustawienia Bloku Online',
    'gus_access'            => 'Uprawnienia',
);

$LANG_configSelect['gus'] = array(
    0 => array(1=>'Włącz', 0 => 'Wyłącz'),
    1 => array(true => 'Włącz', false => 'Wyłącz'),
    2 => array('host' => 'Host', 'nslookup' => 'Nslookup', 'gethostbyaddr' => 'gethostbyaddr', 'none'=> 'None'),
);
?>