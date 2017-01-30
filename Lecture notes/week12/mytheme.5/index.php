    <?php get_header(); ?>
        <div class="posts">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
			<article <?php post_class(); ?> id="<?php the_ID(); ?>">
				<header>
					<h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
				</header>

				<div class="content">
                    <?php the_content(); ?>
				</div>

				<p class="entry-meta">Posted on <?php the_date(); ?> by <span class="author"><?php the_author_posts_link(); ?></span> | <a href="#">Comments</a></p>
                <p><?php the_tags('', ' &bull; ', '<br>'); ?></p>
                <p>Categories: <?php the_category(', '); ?></p>

			</article>
            
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts match your search'); ?></p>
            <?php endif; ?>
            
            
		</div> <!-- end content -->

<?php get_footer(); ?>
