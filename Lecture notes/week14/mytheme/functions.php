<?php

    add_theme_support( 'post-formats', array( 'gallery', 'video', 'image', 'link') );

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

    function add_fancybox() {
        wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/fancybox/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
        wp_enqueue_style( 'fancybox-style', get_template_directory_uri() . '/fancybox/jquery.fancybox.css' );

        //this is our code that sets up fancybox to use in WP
        wp_enqueue_script( 'fancybox-wp-init', get_template_directory_uri() . '/fancybox/fancybox-wp-init.js', array( 'fancybox-js' ), false, true );

        //this lets you see other images as thumbs
        wp_enqueue_script( 'fancybox-thumbs', get_template_directory_uri() . '/fancybox/helpers/jquery.fancybox-thumbs.js', array( 'fancybox-js' ), false, true );
        wp_enqueue_style( 'fancybox-style-thumbs', get_template_directory_uri() . '/fancybox/helpers/jquery.fancybox-thumbs.css', array('fancybox-style') );
    }
    add_action( 'wp_enqueue_scripts', 'add_fancybox' );

    add_filter( 'use_default_gallery_style', '__return_false' );

?>