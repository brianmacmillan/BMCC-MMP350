    <?php get_header(); ?>
        <div class="posts" id="front-page">
            
            <?php 
                $args = array( 'category_name' => 'Featured' );
                $featured = new WP_Query( $args );
            ?>
            
            <?php if ( have_posts() ) : while ( $featured->have_posts() ) : $featured->the_post(); ?>
            
			<article <?php post_class(); ?> id="<?php the_ID(); ?>">
				
				<div class="content">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
				</div>
                <p><?php the_category(","); ?></p>

			</article>
            
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts match your search'); ?></p>
            <?php endif; wp_reset_postdata(); ?>
            
            
		</div> <!-- end content -->

<?php get_footer(); ?>
