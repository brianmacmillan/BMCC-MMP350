		<footer>
			<div class="row">

				<?php $footer_menu = array(
                    'theme_location' => 'footer-menu',
                    'container' => 'nav',
                    'container_class' => 'medium-2 columns links'
                );
            	?>
            	<?php wp_nav_menu( $footer_menu ); ?>

            	<?php $social_menu = array(
                    'theme_location' => 'social-menu',
                    'container' => 'nav',
                    'container_class' => 'medium-2 columns links'
                );
            	?>
            	<?php wp_nav_menu( $social_menu ); ?>

            	<div id="logo" class="medium-2 columns show-for-medium">
            		<img src="<?php header_image(); ?>" />
            	</div>

			</div>
			
		
		</footer>

	</div> <!-- end wrapper -->
</body>
</html>