    <?php get_header(); ?>
        
        <div class="posts row medium-up-3" id="front-page">
            
            <?php 
                $args = array( 'category_name' => 'Featured' );
                $featured = new WP_Query( $args );
                $count = 0;
            ?>
            
            <?php if ( have_posts() ) : while ( $featured->have_posts() ) : $featured->the_post(); ?>
            
			<article class="column project<?php if ($count > 2): ?> show-for-medium-up<?php endif; ?>" id="<?php the_ID(); ?>">
				
                <a href="<?php the_permalink(); ?>">
				    <?php the_post_thumbnail( 'thumb' ); ?>
				    <div class="label"><?php the_title(); ?></div>
                </a>

			</article>

            <?php $count++; ?>
            
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts match your search'); ?></p>
            <?php endif; wp_reset_postdata(); ?>
            
            
		</div> <!-- end content -->

<?php get_footer(); ?>
