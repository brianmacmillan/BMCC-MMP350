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

        <div id="page" class="row">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
			<div class="columns medium-8">
                <header>
    				<h2 class="entry-title medium-12 columns">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
    			</header>

    			<div class="content">
                    <?php the_content(); ?>
    			</div>
            </div>

            
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts match your search'); ?></p>
            <?php endif; ?>

            <?php get_sidebar(); ?>
            
		</div> <!-- end content -->
