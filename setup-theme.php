<?php
/**
 * Plugin Name: Tutorials Iutilisation WP.
 * Plugin URI: https://www.6clicks.ch
 * Description:  La liste des vidéos tutotial pour la gestion du site
 * Version:  1.0
 * Author: John Robert-Nicoud
 * Author URI: https://www.clicks.ch
 * License: A "Slug" license name e.g. GPL2
 */
 
 add_action('wp_dashboard_setup', 'my_video_dashboard_widgets');

function my_video_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('video_help_widget', 'Tutorials Vidéos', 'video_dashboard_help');
}

function video_dashboard_help() {
echo '
<img src="https://raw.githubusercontent.com/6clicks/tuto-snow/master/logo-925.png">
<h2>tutorial L\'utilisation de WordPress </h2>
<ol>
<li> Si vous maitriser votre WordPress vous pouvez masquer cette fenêtre avec les option d\'écrant</li>
<li> <a href=" " target="_blanc" >Introduction à l\admin de Wordpress</a></li>
</ol>
<br>
';
}