<?php
/*
Plugin Name: Mention
Plugin URI: 
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 0.1
Author: FredBrossard
Author URI: http://votre-site.com
License: GPL2
*/

function PluginMentionSimplon() {
	return '<p style ="font-style:italic; color:#8B572A;">La publication de cet article est possible grace à mon super partenaire <a href="http://www.simplon.co">simplon.co</a> - une entreprise de
l\'économie sociale et solidaire et un réseau "de fabriques" (écoles) qui propose
des formations GRATUITES pour devenir développeur web. </p>';
}
add_shortcode('Simplon', 'PluginMentionSimplon');