    <?php get_header(); ?>
        
        <div class="posts row medium-up-3" id="front-page">
            
            <h2><?php echo single_cat_title(); ?></h2>

            <?php if ( is_category("animation") ) : ?>
                <p>Some examples of animation work.</p>
            <?php elseif ( is_category("web") ) : ?>
                <p>Some examples of my web design work:</p>
            <?php endif; ?>


            <?php 
                $count = 0;
            ?>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
			<article class="<?php echo get_post_format(); ?> column project<?php if ($count > 2): ?> show-for-medium-up<?php endif; ?>" id="<?php the_ID(); ?>">
				
                <a href="<?php the_permalink(); ?>">
				    <?php the_post_thumbnail( ); ?>
				    <div class="label"><?php the_title(); ?></div>
                </a>

			</article>

            <?php $count++; ?>
            
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts match your search'); ?></p>
            <?php endif; wp_reset_postdata(); ?>
            
            
		</div> <!-- end content -->

<?php get_footer(); ?>
