<?php
/**
 * Plugin Name: Tutorials gestion du site
 * Plugin URI: https://www.6clicks.ch
 * Description:  La liste des vidéos tutotial pour la gestion du site
 * Version:  1.0
 * Author: John Robert-Nicoud
 * Author URI: https://www.6clicks.ch
 * License: A "Slug" license name e.g. GPL2
 */
 
 add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', 'Tutorial Video', 'custom_dashboard_help');
}

function custom_dashboard_help() {
echo '
<img src="https://www.onesolutions.ch/OneSolutions_100.png">
<h2>tutorial pour la gestion du site OneSolutions.ch<h2>
<br><a href="http://lachallensoise.ch/tuto/login-admin-dashboard.mp4" target="_blank"> Admin et Login</a>
<br><a href="http://lachallensoise.ch/tuto/articles.mp4" target="_blank"> Les articles</a>
<br><a href="http://lachallensoise.ch/tuto/form-page-event.mp4" target="_blank"> les events</a>
</p>';
}