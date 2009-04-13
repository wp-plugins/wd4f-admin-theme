<?php
/*
Plugin Name: WD4F Theme
Plugin URI: http://willdesignforfood.de/2009/04/03/wp-admin-theme/
Description: WD4F WordPress Admin Theme - Upload and Activate.
Author: Burkhard Mudrick
Version: 1.2
Author URI: http://willdesignforfood.de/
*/

/* bof Branded-Admin code by Kerry Webster --------------------------------- */
/* This code was originaly written by Kerry Webster for his "Branded-Admin" Plugin. */
/* Integrated in the "WD4f" Admin theme by Burkhard Mudrick. */

$wd4f_header_logo = get_option('siteurl') . '/wp-content/plugins/wd4f-admin-theme/images/wd4f-top-bar-logo.png';

$wd4f_header_logo_width = 196;
$wd4f_header_logo_height = 86;
$wd4f_header_wphead_height = $wd4f_header_logo_height + 16;

$wd4f_footer_div_height = 45;
$wd4f_footer_logo = get_option('siteurl') . '/wp-content/plugins/wd4f-admin-theme/images/wd4f-footer-logo.png';

$wd4f_footer_logo_width = 90;
$wd4f_footer_logo_height = 40;

$wd4f_header_logo_title = 'Click to View ' . get_option("blogname");

add_filter('admin_footer', 'wd4f_header',11,0);

function wd4f_header() {
global $wd4f_header_wphead_height, $wd4f_header_logo, $wd4f_header_logo_width, $wd4f_header_logo_height, $wd4f_header_logo_title;
	$sbh  = '<script type="text/javascript">';
	$sbh .= '  jQuery("img#header-logo").attr("src", "' . $wd4f_header_logo . '");';
	$sbh .= '  jQuery("img#header-logo").attr("alt", "' . $wd4f_header_logo_title . '");';
	$sbh .= '  jQuery("img#header-logo").attr("title", "' . $wd4f_header_logo_title . '");';
	$sbh .= '  jQuery("img#header-logo").width('. $wd4f_header_logo_width . ');';
	$sbh .= '  jQuery("img#header-logo").height(' . $wd4f_header_logo_height . ');';
	$sbh .= '  jQuery("div#wphead").css("height", ' . $wd4f_header_wphead_height . ');';
	$sbh .= '  jQuery("#header-logo").css("background-image", "none");';
	$sbh .= '  jQuery("#header-logo").mouseover(function(e) { jQuery(this).css("cursor", "pointer"); jQuery(this).css("cursor", "hand"); });';
	$sbh .= '  jQuery("img#header-logo").wrap("<a href=\"/\"></a>");';
	$sbh .= '</script>';
	echo $sbh;
}
add_action('update_right_now_message', 'wd4f_update_right_now_message');

function wd4f_update_right_now_message () {
	echo 'Current version ' . get_bloginfo('version');
}

add_filter('admin_footer', 'wd4f_footer',1,0);

function wd4f_footer() {
global $wd4f_footer_div_height, $wd4f_footer_logo, $wd4f_footer_logo_width, $wd4f_footer_logo_height;
	$sbf  = '<script type="text/javascript">';
	$sbf .= '  jQuery("#footer").addClass("branded_footer");';
	$sbf .= '  jQuery("#footer").html("<img src=\"' . $wd4f_footer_logo . '\" style=\"float:left;margin:3px 15px 0px;\"><p id=\"footer-left\" class=\"alignleft\"> <span id=\"footer-thankyou\">Willkommen in der <a href=\"' . get_settings('siteurl') . '\" title=\"Zur&uuml;ck zur Hauptseite\">' . get_bloginfo('name') . '</a> - Seiten Administration' . '</span></p>");';
	$sbf .= '  jQuery("#footer").append("<p id=\"footer-upgrade\" class=\"alignright\">Version ' . get_bloginfo('version') . '</a></p>");';
	$sbf .= '  jQuery("#footer").css("height", ' . $wd4f_footer_div_height . ');';
	$sbf .= '</script>';
	echo $sbf;
}
/* eof Branded-Admin code by Kerry Webster --------------------------------- */

/* ------------------------------------------------------------------------- */

/* bof WD4f Admin theme ---------------------------------------------------- */

function wd4f_admin_head() {
    $url = get_settings('siteurl');
    $url = $url . '/wp-content/plugins/wd4f-admin-theme/wp-admin.css';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '" />';
}

add_action('admin_head', 'wd4f_admin_head');

/*  Copyright 2009  Burkhard Mudrick  (email : b.mudrick@online.de)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
/* eof WD4f Amin theme ------------------------------------------------------*/
?>
