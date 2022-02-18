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
    'main_menu_title' => 'Statistika návštěv',
    'priv_pol'      => 'Zásady ochrany osobních údajů',
    'links_followed'=> 'Odkazy sledované',
    'link'          => 'Odkaz',
    'type'          => 'Typ',
    'ptu'           => 'Stránka/název/URL',
    'browsers'      => 'Prohlížeče',
    'browser'       => 'Prohlížeč',
    'version'       => 'Verze',
    'platforms'     => 'Platformy',
    'platform'      => 'Platforma',
    'new_comments'  => 'Nové kometáře',
    'comment_title' => 'Nadpis komentáře',
    'datetime'      => 'Datum/Čas',
    'time'			=> 'Čas',
    'countries'     => 'Státy',
    'code'          => 'Kód',
    'referer'       => 'Odkazující',
    'referers'      => 'Odkazovatelé',
    'count'         => 'Počet',
    'new_stories'   => 'Nové články',
    'story_title'   => 'Název článku',
    'hits'          => 'Zobrazení',
    'user'          => 'Uživatel',
    'page'          => 'Stránka',
    'pages'         => 'Stran',
    'page_views'    => 'Počet zobrazení stránky',
    'views_per_page'=> 'Zobrazení/Stránka',
    'views_per_hour'=> 'Zobrazení/Hodina',
    'hour'          => 'Hodina',
    'ip'            => 'IP',
    'host'			=> 'Hostitel',
    'hostname'      => 'Název hostitele',
    'anon_users'    => 'Anonymní uživatelé',
	'reg_users'     => 'Registrovaní uživatelé',
    'unique_visitors' => 'Unikátní návštěvy',
    'views'         => 'Zobrazení/Navštívení',
    'total'         => 'Celkový součet',
    'daily_title'   => 'Statistiky návštěvníků podle dne',
    'monthly_title' => 'Statistiky návštěvníků dle měsíce',
    'day_title'     => 'Den',
    'month_title'   => 'Měsíc',
    'anon_title'    => 'Anonymní návštěvníci',
    'reg_title'     => 'Registrovaní návštěvníci',
    'page_title'    => 'Zobrazených stránek',
    'comm_title'    => 'Komentáře',
    'link_title'    => 'Odkazy sledované',
    'hour_title'    => 'Podle Hodiny',
    'referer_title' => 'Odkazující',
    'country_title' => 'Stát',
    'browser_title' => 'Prohlížeč',
    'platform_title' => 'Platforma',
	'access_denied' => 'Přístup odepřen',
	'access_denied_msg' => 'K této stránce mají přístup pouze někteří uživatelé. Vaše jméno a IP adresa byly zaznamenány.',
	'install_header'	=> 'Install GUS',
	'sortDESC'			=> 'Řadit sestupně',
	'sortASC'			=> 'Seřadit vzestupně',
	'import_header'     => 'GUS Import dat',
	'allow_usage_tracking' => 'Povolit sledování využití',
	'tracking_help'     => 'Tato stránka shromažďuje statistiky o používání skládající se z uživatelského jména, IP adresy, navštívené stránky a data / času. Zaškrtnutím zaškrtnutím políčka Povolit sledování používání, udělíte oprávnění shromažďovat tato data po přihlášení do webu.',
);

// Admin and user block entries
$LANG_GUS_blocks = array(
	'admin_menu_title'	=> 'GUS',
	'user_menu_title'	=> 'GUS',
	'today'				=> 'dnes'
);

// Who's Online
$LANG_GUS_wo = array(
    'title'				=> "Kdo je online",
	'bots'				=> 'Botů',
	'stats'				=> 'Statistiky',
	'reg_users'     	=> 'Registrovaní uživatelé',
	'referers'      	=> 'Odkazující',
	'new_users'         => 'Noví uživatelé',
	'page_title'    	=> 'Zobrazené stránky',
	'unique_visitors'	=> 'Unikátní návštěvy'
);

// Builtin stats
$LANG_GUS_builtin_stats = array(
	'unique_visitors'	=> 'Unikátní návštěvníci',
	'users'				=> 'Registrovaní uživatelé'
);

// Admin Page
$LANG_GUS_admin = array(
	'admin'		=> 'GUS Admin',

	'capture'		=> 'Zachytit',
	'captureon'		=> 'Snímání statistiky je zapnuto',
	'captureoff'	=> 'Zachycování statistik je vypnuté',
	'turnon'		=> 'Zapnout zachytávání',
	'turnoff'		=> 'Vypnout zachytávání',

	// Ignore section
	'ignore'    => 'Ignorovat',

	'tip'		=> 'Tip:',
	'example'	=> 'Příklad:',

	'wildcard_tip'	=> 'Použijte % jako wildcard. Odpovídající používá syntaxi MySQL <a href="http://dev.mysql.com/doc/mysql/en/string-comparison-functions.html">LIKE</a>.',

	'irreversible'	=> '<b>Toto je nevratné</b>, ujistěte se, že to opravdu chcete udělat.',

	'clean_msg1'		=> 'Na základě těchto filtrů jsem se rychle podíval a našel jsem záznamy ve vaší databázi, které se shodují.',
	'clean_msg2'		=> 'Chtěli byste, abych je vyčistil?',
	'clean_num_entries'	=> 'Počet odpovídajících položek',
	'clean_up'			=> 'Vyčistit',
	'star'				=> '* Tato sekce obsahuje některá data, která můžete chtít vyčistit z databáze.',

	'add'		=> 'Přidat',
	'remove'    => 'Odstranit',

	// IP
	'ip_title'		=> 'IP adresa',
	'ip_tip'		=> 'Vaše IP adresa je',
	'ip_example'	=> 'Použití 123.0.1.% ignoruje všechny adresy v rozsahu 123.0.1.0 - 123.0.1.255. Použití 123.0. % bude ignorovat všechny tyto <i>a</i> 123.0.10.% - 123.0.199.% - buďte opatrní na nastavení!',
	'ip_num_ip'		=> 'Počet odpovídajících IP adres',

	// User
	'user_title'	=> 'Uživatelé',
	'user_num_user'	=> 'Počet odpovídajících hostitelů',

	// Page
	'page_title'	=> 'Stránky',
	'page_num_page'	=> 'Počet odpovídajících stránek',

	// User Agent
	'ua_title'		=> 'Prohlížeč',
	'ua_example'	=> 'Pomocí %Googlebot% bude ignorovat jakýkoli prohlížeč obsahující termín Googlebot.',
	'ua_num_ua'		=> 'Počet odpovídajících prohlížečů',

	// Host
	'host_title'	=> 'Název hostitele',
	'host_tip'		=> 'Zdá se, že Váš hostitel je',
	'host_example'	=> 'Použití %.googlebot.com ignoruje Google bot.',
	'host_num_host'	=> 'Počet odpovídajících hostitelů',

	// Referrer
	'referrer_title'	    => 'Odkazovatelé',
	'referrer_example'	    => 'Pomocí %images.google.% budou ignorovány všechny stránky, na které odkazují jakékoliv obrázky z Google.',
	'referrer_num_referrer'	=> 'Number of matching referrers',

	// Remove Data
	'remove_data'	=> 'Odstranit data',

	// Import data
	'import_data'	=> 'Importovat data',

	'housekeeping'  => 'Smazat stará data',
	'purge_history' => 'Vymazat historii',
);

// Localization of the Admin Configuration UI
$LANG_configsections['gus'] = array(
    'label'                 => 'statistiky využití glFusion (GUS)',
    'title'                 => 'Konfigurace anket'
);
$LANG_confignames['gus'] = array(
    'host_lookup'           => 'Metoda vyhledávání názvu hostitele',
    'host_lookup_timeout'   => 'Časový limit pro vyhledávání hostitele',
    'SQL_use_TEMPORARY'     => 'Použít MySQL dočasné tabulky',
    'show_left_blocks'      => 'Zobrazit navigační bloky',
    'show_right_blocks'     => 'Zobrazit speciální bloky',
    'allow_ignore_anonymous'  => 'Ignorovat nepřihlášené uživatele',
    'hide_in_day_summary'   => 'Odkazující skrýt z denního přehledu',
    'wo_fullname'           => 'Použít celé jméno uživatele',
    'wo_users_anonymous'	=> 'Zobrazit anonymní uživatele',
    'wo_online'             => 'Zobrazit online uživatele',
    'wo_show_bots'          => 'Zobrazit boty',
    'wo_registered'         => 'Zobrazit registrované uživatele',
    'wo_new'                => 'Zobrazit nové uživatele',
    'wo_daily'              => 'Zobrazit denní součty',
    'wo_refs'               => 'Zobrazit odkazující',
    'wo_hide_referrers'     => 'Odkazující vyloučit z',
    'wo_max_referrers'      => 'Maximální počet odkazů k zobrazení',
    'whois_url'             => 'URL pro vyhledávání uživatele Whois',
    'anon_access'           => 'Anonymní přístup',
    'enable_main_menu_GUS'  => 'Přidat GUS do hlavního menu',
    'enable_main_menu_privacy_policy' => 'Povolit zásady ochrany osobních údajů',
    'gus_user'              => 'Povolit odkaz GUS v uživatelském menu',
    'gus_stats'             => 'Přidat GUS statistiky do stránky statistiky webu',
    'registration_opt_in'   => 'Vyžadovat možnost přihlášení na obrazovce Registrace pro sběr statistik',
    'profile_opt_in'        => 'Umožnit uživateli zvolit zobrazení statistiky v Jeho účtu',
);

$LANG_configsubgroups['gus'] = array(
    'sg_main'               => 'Konfigurační nastavení'
);

$LANG_fs['gus'] = array(
    'gus_options'           => 'Obecná nastavení',
    'gus_wo'                => 'Kdo je příhlášen - nastavení On-line bloku',
    'gus_access'            => 'Oprávnění',
);

$LANG_configSelect['gus'] = array(
    0 => array(1=>'Ano', 0 => 'Ne'),
    1 => array(true => 'Ano', false => 'Ne'),
    2 => array('host' => 'Hostitel', 'nslookup' => 'Nslookup', 'gethostbyaddr' => 'gethostbyaddr', 'none'=> 'None'),
);
?>