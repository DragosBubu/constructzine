<?php
/*
* 	The template for displaying Page Services.
*
* 	@package ThemeIsle
*/
get_header();
?>
<div id="main-content">
	<div class="inner cf">

		<div id="services">

			<?php
			if ( $wp_query->have_posts() ) {
				while ( $wp_query->have_posts() ) {
					$wp_query->the_post(); ?>

					<div class="services-title">
						<?php the_title(); ?>
					</div><!--/.services-title-->
					
						<?php 
						$content = get_the_content();
						
						if($content != NULL) {
						    echo '<div class="services-entry">';
						    echo the_content();
						    echo '</div>';
						}
						
						?>
					

				<?php }
			} else {
				echo __e('No posts found.', 'ti');
			}
			?>

			<div class="services-content cf">
				<div class="services-content-left">

				<?php
				/* Show content in buttons */
				$args = array (
					'post_type'			=> 'services',
					'posts_per_page'	=> '1'
				);

				$wp_query = new WP_Query( $args );

				if ( $wp_query->have_posts() ) {
					while ( $wp_query->have_posts() ) {
						$wp_query->the_post();

						global $post;

						$services_description = get_post_meta( $post->ID, 'ti_services_description', true ); ?>

						<div class="service-button-box active">
							<div class="services-button">
								<span><?php the_title(); ?></span>
								<?php echo htmlspecialchars( $services_description ); ?>
							</div><!--/.services-button-->
							<div class="service-button-hover">
							</div><!--/.service-button-hover-->
						</div><!--/.service-button-box-->

						<?php }
				} else {
					echo __('No posts found.', 'ti');
				}
				wp_reset_postdata();
				?>


				<?php
				/* Show the firstly content services */
				$args = array (
					'post_type'	=> 'services',
					'offset'	=> '1'
				);

				$wp_query = new WP_Query( $args );

				if ( $wp_query->have_posts() ) {
					while ( $wp_query->have_posts() ) {
						$wp_query->the_post();

						global $post;

						$services_description = get_post_meta( $post->ID, 'ti_services_description', true ); ?>

						<div class="service-button-box">
							<div class="services-button">
								<span><?php the_title(); ?></span>
								<?php echo $services_description; ?>
							</div><!--/.services-button-->
							<div class="service-button-hover">
							</div><!--/.service-button-hover-->
						</div><!--/.service-button-box-->

						<?php }
				}
				wp_reset_postdata();
				?>

				</div><!--/.services-content-left-->

				<div class="services-content-right cf">

					<?php
					/* Show the content services */
					$args = array (
						'post_type'	=> 'services',
					);

					$wp_query = new WP_Query( $args );

					if ( $wp_query->have_posts() ) {
						while ( $wp_query->have_posts() ) {
							$wp_query->the_post(); ?>

							<div class="content-right-entry">
								<div class="content-right-title">
									<?php the_title(); ?>
								</div><!--/.content-right-title-->
								<?php the_content(); ?>
							</div><!--/.content-right-entry-->

						<?php }
					} else {
						echo __e( 'No posts found.', 'ti' );
					}

					wp_reset_postdata();
					?>

				</div><!--/.services-content-right-->
			</div><!--/.services-content-->
		</div><!--/#services-->
	</div><!--/.inner .cf-->
</div><!--/#main-content-->
<?php get_footer(); ?>