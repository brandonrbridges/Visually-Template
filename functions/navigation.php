<?php

/**
 * Navigation Setup
 * 
 * Path: /functions/navigation.php
 * 
 * USAGE: Add or remove more menus from register_nav_menus
 */

/* Bootstrap Navwalker */
require_once get_template_directory() . '/functions/navwalker.php';

register_nav_menus( array(
	'primary'   => 'Primary Menu',
) );

?>