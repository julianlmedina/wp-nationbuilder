<?php
/**
 * Plugin Name: WP NationBuilder
 * Description: A handy plugin for integrating NationBuilder's awesome CRM features into WordPress.
 * Version: 0.1
 * Author: Julian Medina
 * License: GPL2
 */

// First, let's hook up oauth2
require('includes/oauth2/client.php');
require('includes/oauth2/GrantType/IGrantType.php');
require('includes/oauth2/GrantType/AuthorizationCode.php');

$clientId = $_ENV['CLIENT_ID'];
$clientSecret = $_ENV['CLIENT_SECRET'];
$redirectUri = $_ENV['REDIRECT_URL'];

$nationUrl = $_ENV['NATION_URL'];
$authorizeUri = $nationUrl . '/oauth/authorize';
$accessTokenUri = $nationUrl . '/oauth/token';

$client = new OAuth2\Client($clientId, $clientSecret);

// Admin Menu
add_action('admin_menu', 'nb_admin_page');

function nb_admin_page () {
	add_menu_page('NationBuilder', 'NationBuilder' , 'manage_options' , 'wp-nationbuilder/wp-nb-admin.php', '', '', 6);
}

