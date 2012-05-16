<?php
/*
Plugin Name: Bloginfo Shortcode Plugin
Plugin URI: http://www.w3dots.com/bloginfo-shortcode
Description: The Simple Plugin to access get_bloginfo() keys values through shortcodes. Ex: [url] will produce http://www.example.com/home. <a href="http://codex.wordpress.org/Function_Reference/get_bloginfo" target="_blank">Visit codex for more info.</a>

Version: 1.0
Author: Jick Lee
Author URI: x3box.com
Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function admin_email_func( ) {return get_bloginfo('admin_email');}
add_shortcode( 'admin_email', 'admin_email_func' );
function atom_url_func( ) {return get_bloginfo('atom_url');}
add_shortcode( 'atom_url', 'atom_url_func' );
function charset_func( ) {return get_bloginfo('charset');}
add_shortcode( 'charset', 'charset_func' );
function comments_atom_url_func( ) {return get_bloginfo('comments_atom_url');}
add_shortcode( 'comments_atom_url', 'comments_atom_url_func' );
function comments_rss2_url_func( ) {return get_bloginfo('comments_rss2_url');}
add_shortcode( 'comments_rss2_url', 'comments_rss2_url_func' );
function description_func( ) {return get_bloginfo('description');}
add_shortcode( 'description', 'description_func' );
function home_func( ) {return get_bloginfo('home');}
add_shortcode( 'home', 'home_func' );
function html_type_func( ) {return get_bloginfo('html_type');}
add_shortcode( 'html_type', 'html_type_func' );
function language_func( ) {return get_bloginfo('language');}
add_shortcode( 'language', 'language_func' );
function name_func( ) {return get_bloginfo('name');}
add_shortcode( 'name', 'name_func' );
function pingback_url_func( ) {return get_bloginfo('pingback_url');}
add_shortcode( 'pingback_url', 'pingback_url_func' );
function rdf_url_func( ) {return get_bloginfo('rdf_url');}
add_shortcode( 'rdf_url', 'rdf_url_func' );
function rss2_url_func( ) {return get_bloginfo('rss2_url');}
add_shortcode( 'rss2_url', 'rss2_url_func' );
function rss_url_func( ) {return get_bloginfo('rss_url');}
add_shortcode( 'rss_url', 'rss_url_func' );
function siteurl_func( ) {return get_bloginfo('siteurl');}
add_shortcode( 'siteurl', 'siteurl_func' );
function stylesheet_directory_func( ) {return get_bloginfo('stylesheet_directory');}
add_shortcode( 'stylesheet_directory', 'stylesheet_directory_func' );
function stylesheet_url_func( ) {return get_bloginfo('stylesheet_url');}
add_shortcode( 'stylesheet_url', 'stylesheet_url_func' );
function template_directory_func( ) {return get_bloginfo('template_directory');}
add_shortcode( 'template_directory', 'template_directory_func' );
function template_url_func( ) {return get_bloginfo('template_url');}
add_shortcode( 'template_url', 'template_url_func' );
function text_direction_func( ) {return get_bloginfo('text_direction');}
add_shortcode( 'text_direction', 'text_direction_func' );
function url_func( ) {return get_bloginfo('url');}
add_shortcode( 'url', 'url_func' );
add_shortcode( 'base_url', 'url_func' );
function version_func( ) {return get_bloginfo('version');}
add_shortcode( 'version', 'version_func' );
function wpurl_func( ) {return get_bloginfo('wpurl');}
add_shortcode( 'wpurl', 'wpurl_func' );

?>