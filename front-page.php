<?php
/*
* 	The template for displaying Front Page.
*
* 	@package ThemeIsle
*/
get_header();
?>
<div id="main-content">
	<div class="inner cf">
		<section class="featured">

			<div class="box3">
				<h3 class="block-title">
					<?php
					if ( get_theme_mod( 'ti_frontpage_boxone_title' ) != NULL ) {
						echo get_theme_mod( 'ti_frontpage_boxone_title' );
					}
					?>
				</h3>
				<?php
				if ( get_theme_mod( 'ti_frontpage_boxone_content' ) != NULL ) {
					echo '<p>'. get_theme_mod( 'ti_frontpage_boxone_content' ) .'</p>';
				} else {
					echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'ti' ) .'</p>';
				}
				?>
			</div>

			<div class="box3">
				<h3 class="block-title">
					<?php
					if ( get_theme_mod( 'ti_frontpage_boxtwo_title' ) != NULL ) {
						echo get_theme_mod( 'ti_frontpage_boxtwo_title' );
					}
					?>
				</h3>
				<?php
				if ( get_theme_mod( 'ti_frontpage_boxtwo_content' ) != NULL ) {
					echo '<p>'. get_theme_mod( 'ti_frontpage_boxtwo_content' ) .'</p>';
				} else {
					echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'ti' ) .'</p>';
				}
				?>
			</div>

			<div class="box3">
				<h3 class="block-title">
					<?php
					if ( get_theme_mod( 'ti_frontpage_boxthree_title' ) != NULL ) {
						echo get_theme_mod( 'ti_frontpage_boxthree_title' );
					}
					?>
				</h3>
				<?php
				if ( get_theme_mod( 'ti_frontpage_boxthree_content' ) != NULL ) {
					echo '<p>'. get_theme_mod( 'ti_frontpage_boxthree_content' ) .'</p>';
				} else {
					echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'ti' ) .'</p>';
				}
				?>
			</div>

		</section>
		<article class="front">
			<h2 class="first-title">
				<?php
				if ( get_theme_mod( 'ti_frontpage_article_title' ) != NULL ) {
					echo get_theme_mod( 'ti_frontpage_article_title' );
				} else {
					echo __( 'About us', 'ti' );
				}
				?>
			</h2>
			<?php
			if ( get_theme_mod( 'ti_frontpage_article_image' ) != NULL ) { ?>
				<img src="<?php echo get_theme_mod( 'ti_frontpage_article_image' ); ?>" alt="<?php echo get_theme_mod( 'ti_frontpage_article_title' ); ?>" title="<?php echo get_theme_mod( 'ti_frontpage_article_title' ); ?>">
			<?php } else { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/front-article.jpg" alt="<?php echo get_theme_mod( 'ti_frontpage_article_title' ); ?>" title="<?php echo get_theme_mod( 'ti_frontpage_article_title' ); ?>">
			<?php }
			?>

			<?php
			if ( get_theme_mod( 'ti_frontpage_article_content' ) != NULL ) {
				echo '<p>'. get_theme_mod( 'ti_frontpage_article_content' ) .'</p>';
			} else {
				echo '<p>'. __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.', 'ti' ) .'</p>';
			}
			?>
		</article>
		<aside>
			<div class="feedback block">
				<h2 class="block-title">
					<?php
					if ( get_theme_mod( 'ti_frontpage_testimonials_title' ) != NULL ) {
						echo get_theme_mod( 'ti_frontpage_testimonials_title' );
					} else {
						echo __( 'What customers says', 'ti' );
					}
					?>
				</h2>

				<?php
				$args = array (
					'post_type'              => 'testimonials',
					'posts_per_page'         => '2',
				);

				$wp_query = new WP_Query( $args );

				if ( $wp_query->have_posts() ) {
					while ( $wp_query->have_posts() ) {
						$wp_query->the_post();

						$testimonials_position = get_post_meta($post->ID, 'ti_testimonials_position', true);
						$testimonials_company_name = get_post_meta($post->ID, 'ti_testimonials_company_name', true);
						$testimonials_company_url = get_post_meta($post->ID, 'ti_testimonials_company_url', true);

						if ( $testimonials_position != NULL ) {
							$line_style = __( ' -', 'ti' );
						} else {
							$line_style = '';
						}

						if ( ( $testimonials_company_name ) == NULL ) {
							$at_style = __( '', 'ti' );
						} else {
							$at_style = __( 'at', 'ti' );
						}

						?>

						<div class="feedback">
							<p class="feedback-meta">
								<strong>
									<?php the_title(); ?> <?php echo $line_style; ?>
								</strong>
								<?php echo $testimonials_position; ?> <?php echo $at_style; ?>
								<?php
								if ( $testimonials_company_url != NULL ) {
									echo '<a href="'. $testimonials_company_url .'" title="'. $testimonials_company_name .'" target="_blank">'. $testimonials_company_name .'</a>';
								} else {
									echo $testimonials_company_name;
								}
								?>
							</p><!--/.feedback-meta-->
							<blockquote>
								<?php the_excerpt(); ?>
							</blockquote><!--/.feedback-entry-->
						</div>

					<?php }
				} else {
					echo __( 'No posts found.', 'ti' );
				}

				// Restore original Post Data
				wp_reset_postdata();
				?>

			</div>
		</aside>
	</div>
</div>
<?php get_footer(); ?>