<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
        <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation.min.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" >
    <?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<header class="show-for-small-only">
			<h1>Theme Starter</h1>
			<h2>A brand new theme</h2>
			
            <?php $main_menu_top = array(
                    'theme-location' => 'main-menu',
                    'container' => 'nav'
                );
            ?>
            <?php wp_nav_menu( $main_menu_top ); ?>
            
		</header>