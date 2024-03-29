<?php
/**
* glFusion CMS
*
* GUS - glFusion Usage Stats
*
* IP Viewer / Manager
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

require_once './include/security.inc';

if ( !GUS_HasAccess( false ) )
	exit;

require_once './include/sql.inc';
require_once './include/util.inc';

$dt = new \Date('now',$_CONF['timezone']);

if ( ($day == 0) && ($month == 0) && ($year == 0) ) {
    $year  = $dt->format('Y',true);
    $month = $dt->format('n',true);
    $day   = $dt->format('j',true);
}

$gus_ip_collect_data = isset( $_POST['gus_ip_collect_data'] ) ? COM_applyFilter( $_POST['gus_ip_collect_data'] ) : '';

$sort = isset( $_GET['sort'] ) ? COM_applyFilter( $_GET['sort'] ) : '';
$ip_addr = isset( $_GET['ip_addr'] ) ? COM_applyFilter( $_GET['ip_addr'] ) : '';

// handle our forms
if ( $gus_ip_collect_data == '0' ) {
	$sql = "INSERT IGNORE INTO `{$_TABLES['gus_ignore']}` (`type`, `value`) VALUES('ip','".DB_escapeString($ip_addr)."')";
	DB_query($sql,1);
} else if ( $gus_ip_collect_data == '1' ) {
	DB_query( "DELETE FROM {$_TABLES['gus_ignore']} WHERE type='ip' && value = '".DB_escapeString($ip_addr)."' LIMIT 1", 1 );
}


if ( isset($_POST['banmode'])) {
    $gus_ip_ban = isset( $_POST['gus_ip_ban'] ) ? COM_applyFilter( $_POST['gus_ip_ban']) : 0;
    if ( $gus_ip_ban == '0' && function_exists('bb2_ban_remove') ) {
        bb2_ban_remove($ip_addr);
    } elseif ( $gus_ip_ban == '1' && function_exists('bb2_ban') ) {
        bb2_ban($ip_addr,0);
    }
}
// main SQL query
$date_compare = GUS_get_date_comparison( 'date', $year, $month, $day );
$date_format = ($day == 0) ? 'CONCAT( DATE_FORMAT( date, \'%d %b - \' ), TIME_FORMAT( time, \'%H:%i\' ) )' : 'TIME_FORMAT( time, \'%H:%i\' )';
$order_by = GUS_get_order_by( $sort );

$sql = "SELECT page, uid, username, ip, host, referer, query_string, date, time, request,
		{$date_format} AS date_formatted
		FROM {$_TABLES['gus_userstats']}
		WHERE {$date_compare} AND ip='$ip_addr' {$order_by}";

// create navigation_URLs AND set urls
$totalrec = DB_query( $sql );
$totalrows = DB_numRows( $totalrec );

$num_pages = ceil( $totalrows / $_GUS_limit );

if ( !isset( $_GET['page'] ) || empty( $_GET['page'] ) )
  $curpage = 1;
else
  $curpage = $_GET['page'];

settype( $curpage, 'integer' );

$header_url = GUS_create_url( 'sort' );

$base_url = GUS_create_url( '' );
$navigation_URLs = COM_printPageNavigation( $base_url, $curpage, $num_pages );

// limit to the sql
$offset = ( $curpage - 1 ) * $_GUS_limit;
$sql .= " LIMIT " . $offset . ', ' . $_GUS_limit;

$rec = DB_query( $sql );
$nrows = DB_numRows( $rec );

// set template
$T = GUS_template_start();

$T->set_var( 'additional_nav', GUS_make_nav( $day, $month, $year, "ip_addr=$ip_addr" ) );

//----------------------
// IP info block

$block_title = "$ip_addr [" . $_GUS_Whois_URL_start . $ip_addr . $_GUS_Whois_URL_end . 'whois</a>]';

// Check to see if collect stats on this IP

$result = DB_query( "SELECT COUNT(*) AS ignored
						FROM {$_TABLES['gus_ignore']}
						WHERE type='ip' && '{$ip_addr}' LIKE value
						LIMIT 1", 1 );

$row = DB_fetchArray( $result, false );

$actionURL = $_SERVER['PHP_SELF'] . '?' . htmlentities( $_SERVER['QUERY_STRING'] ) ;

$data = "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tr class=\"header\"><td>$block_title</td></tr><tr><td>";
$data .= '<table cellspacing="0" cellpadding="0"  style="border: 0px;"><tr>';

$data .= '<td class="col_right">Stats collection:</td>';

if ( isset($row['ignored']) && $row['ignored'] == '1' ) {
	$data .= '<td><span style="font-weight: bold;">off</span></td>';

	$data .= "<td><form method=\"post\" action=\"" . $actionURL . "\">";
	$data .= "<input type=\"submit\" value=\"Turn On\">";
	$data .= "<input type=\"hidden\" value=\"1\" name=\"gus_ip_collect_data\">";
	$data .= '</form></td>';
} else {
	$data .= '<td><span style="font-weight: bold;">on</span></td>';

	$data .= "<td><form method=\"post\" action=\"" . $actionURL . "\">";
	$data .= "<input type=\"submit\" value=\"Turn Off\">";
	$data .= "<input type=\"hidden\" value=\"0\" name=\"gus_ip_collect_data\">";
	$data .= '</form></td>';
}

$data .= '</tr><tr>';

$data .= '<td class="col_right">Ban IP:</td>';

// check for the Ban plugin

if (function_exists('bb2_ban')) {
    $banned = bb2_ban_check($ip_addr);
    if ($banned) {
		$data .= '<td><span style="font-weight: bold;">on</span></td>';
		$data .= "<td><form method=\"post\" action=\"" . $actionURL . "\">";
		$data .= "<input type=\"submit\" name=\"banmode\" value=\"Turn Off\">";
		$data .= "<input type=\"hidden\" value=\"0\" name=\"gus_ip_ban\">";
		$data .= '</form></td>';
	} else {
		$data .= '<td><span style="font-weight: bold;">off</span></td>';
		$data .= "<td><form method=\"post\" action=\"" . $actionURL . "\">";
		$data .= "<input type=\"submit\" name=\"banmode\" value=\"Turn On\">";
		$data .= "<input type=\"hidden\" value=\"1\" name=\"gus_ip_ban\">";
		$data .= '</form></td>';
	}
} else {
    $data .= '<td colspan="2">[the <a href="https://www.glfusion.org">BB2 Banning</a> is not activated]</td>';
}
$data .= '</tr></table></td></tr><tr><td>';

// list the host names associated with this IP address
$sql = "SELECT DISTINCT( host )
		FROM {$_TABLES['gus_userstats']}
		WHERE ip='$ip_addr' AND host <> '$ip_addr'";

$result = DB_query( $sql );
$num_results = DB_numRows( $result );

if ( $num_results == 0 )
{
	$data .= "There are <b>no</b> host names associated with this IP address.";
}
else
{
	if ( $num_results == 1 )
		$data .= "There is <b>one</b> host name associated with this IP address:";
	else
		$data .= "There are <b>{$num_results}</b> host names associated with this IP address:";

	$data .= '<ul>';

	while ( $row = DB_fetchArray( $result ) )
	{
		$data .= '<li><a href="http://' . $row['host'] . '" target="_blank">' . $row['host'] . '</a>&nbsp;&nbsp;';
		$data .= ' [' . $_GUS_Whois_URL_start . $row['host'] . $_GUS_Whois_URL_end . 'whois</a>]';
		$data .= ' [<a href="http://toolbar.netcraft.com/site_report?url=http://' . $row['host'] . '" target="_blank">netcraft</a>]';
		$data .= '</li>';
	}

	$data .= '</ul>';
}

$data .= '</td></tr><tr><td>';

// list the user agents associated with this IP address
$sql = "SELECT DISTINCT( a.user_agent )
		FROM {$_TABLES['gus_userstats']} s
		JOIN {$_TABLES['gus_user_agents']} a
		WHERE s.ua_id = a.ua_id AND s.ip = '$ip_addr' AND a.user_agent <> ''";

$result = DB_query( $sql );
$num_results = DB_numRows( $result );

if ( $num_results == 0 ) {
	$data .= "There are <b>no</b> user agents associated with this IP address.";
} else {
	if ( $num_results == 1 ) {
		$data .= "There is <b>one</b> user agent associated with this IP address:";
	} else {
		$data .= "There are <b>{$num_results}</b> user agents associated with this IP address:";
	}

	$data .= '<ul>';

	while ( $row = DB_fetchArray( $result ) ) {
		$data .= '<li>' . htmlentities( $row['user_agent'] ) . '</li>';
	}

	$data .= '</ul>';
}

$data .= '</td></tr></table><br'.XHTML.'>';

$T->set_var( 'ip_info', $data );

// IP info block
//----------------------
// main table

$T->set_block( 'page','COLUMN','CBlock' );
$T->set_block( 'page','ROW','BBlock' );
$T->set_block( 'page','TABLE','ABlock' );

$nav_down = "<br".XHTML."><img src=\"{$_CONF['site_url']}/gus/images/nav_down.gif\" width=\"13\" height=\"11\" alt=\"{$LANG_GUS00['sortDESC']}\" border=\"0\"".XHTML.">";
$nav_up = "<img src=\"{$_CONF['site_url']}/gus/images/nav_up.gif\" width=\"13\" height=\"11\" alt=\"{$LANG_GUS00['sortASC']}\" border=\"0\"".XHTML.">";

$T->set_var( 'data', '<div align="center">' . $LANG_GUS00['type'] . '&nbsp;<a href="' . $header_url . '&amp;sort=typeDESC">' . $nav_down .'</a><a href="' . $header_url . '&amp;sort=typeASC">' . $nav_up . '</a></div>' );
$T->parse( 'CBlock', 'COLUMN', false );

$T->set_var( 'data', '<div align="center">' . $LANG_GUS00['ptu'] . '&nbsp;<a href="' . $header_url . '&amp;sort=ptuDESC">' . $nav_down .'</a><a href="' . $header_url . '&amp;sort=ptuASC">' . $nav_up . '</a></div>' );
$T->parse( 'CBlock', 'COLUMN', true );

$T->set_var( 'data', '<div align="center">' . $LANG_GUS00['user'] . '&nbsp;<a href="' . $header_url . '&amp;sort=usernameDESC">' . $nav_down .'</a><a href="' . $header_url . '&amp;sort=usernameASC">' . $nav_up . '</a></div>' );
$T->parse( 'CBlock', 'COLUMN', true );

$T->set_var( 'data', '<div align="center">' . $LANG_GUS00['hostname'] . '&nbsp;<a href="' . $header_url . '&amp;sort=hostDESC">' . $nav_down .'</a><a href="' . $header_url . '&amp;sort=hostASC">' . $nav_up . '</a></div>' );
$T->parse( 'CBlock', 'COLUMN', true );

$T->set_var( 'data', '<div align="center">' . (($day == 0) ? $LANG_GUS00['datetime'] : $LANG_GUS00['time']) . '&nbsp;<a href="' . $header_url . '&amp;sort=dateDESC">' . $nav_down .'</a><a href="' . $header_url . '&amp;sort=dateASC">' . $nav_up . '</a></div>' );
$T->parse( 'CBlock', 'COLUMN', true );

$T->set_var( 'data', '<div align="center">' . $LANG_GUS00['referer'] . '&nbsp;<a href="' . $header_url . '&amp;sort=refererDESC">' . $nav_down .'</a><a href="' . $header_url . '&amp;sort=refererASC">' . $nav_up . '</a></div>' );
$T->parse( 'CBlock', 'COLUMN', true );

$T->set_var( 'rowclass', 'header' );
$T->parse( 'BBlock', 'ROW' , true );

for ( $i = 0; $i < $nrows; $i++ ) {
    if ( ($i + 1) % 2 )
	    $T->set_var( 'rowclass', 'row1' );
	else
	    $T->set_var( 'rowclass', 'row2' );

    $A = DB_fetchArray( $rec );

    $T->set_var( 'data', $A['request'] );
    $T->parse( 'CBlock', 'COLUMN', false );

	$query_string = urldecode( $A['query_string'] );

	$the_data = GUS_template_get_page_data( $A['page'], $query_string );
 	$T->set_var( 'data', $the_data );
    $T->parse( 'CBlock', 'COLUMN', true );

	$the_data = GUS_template_get_user_data( $A['uid'], $A['username'] );
	$T->set_var( 'data', $the_data );
    $T->parse( 'CBlock', 'COLUMN', true );

	$T->set_var('data','<a href="http://' . $A['host'] . '" target="_blank">' . $A['host'] . '</a>');
    $T->parse( 'CBlock', 'COLUMN', true );

    $T->set_var( 'data', $A['date_formatted'] );
    $T->parse( 'CBlock', 'COLUMN', true );

	$the_data = GUS_template_get_referrer_data( $A['referer'] );
	$T->set_var( 'data', $the_data );
	$T->parse( 'CBlock', 'COLUMN', true );

    $T->parse( 'BBlock', 'ROW', true );
}
$T->parse( 'ABlock', 'TABLE', true );
$T->set_var( 'google_paging', $navigation_URLs );

if ( $day != '' ) {
    $title = "$ip_addr - " . $dt->format( 'l, j F, Y ', true );
} else if ( $month != '' ) {
    $title = "$ip_addr - " . $dt->format( 'F Y ', true );
} else {
    $title = "$ip_addr - " . $dt->format( 'Y ', true );
}

$T->set_var( 'header_text', $title );

$T->parse( 'page_header', 'header' );
$T->parse( 'table', 'page' );
$T->parse( 'page_footer', 'footer' );

$display = '<div class="gus">';
$display .= $T->finish( $T->get_var( 'page_header' ) );
$display .= $T->finish( $T->get_var( 'ip_info' ) );
$display .= $T->finish( $T->get_var( 'table' ) );
$display .= '<br>';
$display .= $T->finish( $T->get_var( 'page_footer' ) );
$display .= '</div>';

echo COM_siteHeader( $_GUS_CONF['show_left_blocks'] );
echo $display;
echo COM_siteFooter( $_GUS_CONF['show_right_blocks'] );
?>
