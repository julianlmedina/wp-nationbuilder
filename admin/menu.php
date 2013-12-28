<?php

// Register an Admin Menu Action
add_action('admin_menu', 'nb_admin_page');

// Admin Menu for NationBuilder Plugin
function nb_admin_page ()
{
	add_menu_page('NationBuilder', 'NationBuilder' , 'manage_options' , 'wp-nationbuilder/wp-nb-admin.php', '', '', 6);
}