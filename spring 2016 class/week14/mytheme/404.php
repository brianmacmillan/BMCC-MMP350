<?php get_header(); ?>
        
        <header class="row show-for-medium">

            <div id="logo" class="medium-2 columns show-for-medium">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php header_image(); ?>" />
                </a>
            </div>
            
            <?php $main_menu_top = array(
                    'theme-location' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'medium-2 columns links'
                );
            ?>
            <?php wp_nav_menu( $main_menu_top ); ?>
            
        </header>

        <div class="404 row">
            
            <p>Sorry, that page doesn't exist.</p>

            <?php get_sidebar(); ?>
            
            
        </div> <!-- end content -->

