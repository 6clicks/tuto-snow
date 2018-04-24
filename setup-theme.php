<?php
/**
 * Plugin Name: Tutorials Installation du theme Snow.
 * Plugin URI: https://www.925.ch
 * Description:  La liste des vidéos tutotial pour la gestion du site
 * Version:  1.0
 * Author: John Robert-Nicoud
 * Author URI: https://www.925.ch
 * License: A "Slug" license name e.g. GPL2
 */
 
 add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', '!! Ne pas oublier !!', 'custom_dashboard_help');
}

function custom_dashboard_help() {
echo '
<img src="https://raw.githubusercontent.com/6clicks/tuto-snow/master/logo-925.png">
<h2>tutorial pour installer SNOW <h2>
1. une fois installé le thème vous pouvez masquer cette fenêtre avec les option d\'écrant
2. Importer les ACF pour les images résponsive télécharger ce fichier et l\' importer dans ACF
<br>
';
}