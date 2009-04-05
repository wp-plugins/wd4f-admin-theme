<?php
/*
Plugin Name: WD4F Theme
Plugin URI: http://wd4f.centershock.com/2009/04/03/wp-admin-theme/
Description: WD4F WordPress Admin Theme - Upload and Activate.
Author: Burkhard Mudrick
Version: 1.0
Author URI: http://wd4f.centershock.com/
*/
?>
<?php
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

function wd4f_admin_head() {
    $url = get_settings('siteurl');
    $url = $url . '/wp-content/plugins/wd4f-admin-theme/wp-admin.css';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '" />';
}

add_action('admin_head', 'wd4f_admin_head');

?>
