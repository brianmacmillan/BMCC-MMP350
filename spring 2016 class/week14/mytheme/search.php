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

        <div class="search row">
            <div class="medium-8 columns">
                <h2>Search results:</h2>
            
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                <article id="<?php the_ID(); ?>">

                        <h2 class="entry-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <p class="entry-meta">Posted on <?php the_date(); ?> by <span class="author"><?php the_author_posts_link(); ?></span></p>
                        <p><?php the_tags('', ' &bull; ', '<br>'); ?></p>
                        <p>Categories: <?php the_category(', '); ?></p>

                </article>
                
                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts match your search'); ?></p>
                <?php endif; ?>
            
            </div>
        
            <?php get_sidebar(); ?>
        </div> <!-- end content -->
        
