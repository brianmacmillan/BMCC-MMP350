<?php 
    register_nav_menus( array(
    	'main-menu' => 'Main Menu',
    	'footer-menu' => 'Footer Menu',
    	'social-menu' => 'Social Menu'
    	)
    );

    add_theme_support( 'post-thumbnails' );
    add_image_size( 'thumb', 300, 168, true );
    add_image_size( 'featured', 960, 9999, false );

    $args = array(
    	'default-image' => get_template_directory_uri() . '/images/header.jpg'
    );
    add_theme_support( 'custom-header', $args );

    $sidebar = array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'description'   => 'Place widgets here.'
    );
    register_sidebar( $sidebar );
?>