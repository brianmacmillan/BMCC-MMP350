<?php 
    register_nav_menus( array(
    	'main-menu' => 'Main Menu',
    	'footer-menu' => 'Footer Menu',
    	'social-menu' => 'Social Menu'
    	)
    );

    add_theme_support( 'post-thumbnails' );

    $args = array(
    	'default-image' => get_template_directory_uri() . '/images/header.jpg'
    );
    add_theme_support( 'custom-header', $args );
?>