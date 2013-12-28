<?php
/**
 * Plugin Name: WP NationBuilder
 * Description: A handy plugin for integrating NationBuilder's awesome CRM features into WordPress.
 * Version: 0.1
 * Author: Julian Medina
 * License: GPL2
 */

register_activation_hook(__FILE__, 'wpnb_firstrun');


// Grab oAuth2 Files
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

// Grabs the necessary admin files for the plugin
if (is_admin()) {
	require_once('admin/menu.php');


}