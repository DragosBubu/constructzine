<?php
/*
* 	The template for displaying Single.
*
* 	@package ThemeIsle
*/
get_header();
?>
<div id="main-content">
	<div class="inner cf">
		<div class="blog-left">

			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

					<article class="single-margin-top">
						<h1 class="post-title"><?php the_title(); ?></h1>
						<div class="post-meta">
							<?php _e( 'Posted by', 'ti' ); ?> <?php the_author_posts_link(); ?> <?php _e( 'in', 'ti' ); ?> <?php the_category( ', ' ); ?>, <?php _e( 'on', 'ti' ); ?><?php echo the_time( get_option( 'date_format' ) ); ?>
						</div><!--/.post-meta-->
						<div class="single-post-image">
							<?php
							if ( $featured_image != NULL ) { ?>
								<div class="asd" style="background-image: url('<?php echo $featured_image[0]; ?>');">
								</div>
							<?php }
							?>
						</div><!--/.single-post-image-->
						<div class="post-entry">
							<?php the_content(); ?>
						</div><!--/.post-entry-->
						<?php
							wp_link_pages( array(
								'before'      => '<div class="post-links"><span class="post-links-title">' . __( 'Pages:', 'ti' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) );
						?>
						<div class="post-tags">
							<?php the_tags('Tags: ', ', '); ?>
						</div><!--/.post-tags-->
						<div class="single-navigation cf">
							<div class="single-navigation-left">
								<?php previous_post_link('%link', 'Previous Post', true); ?>
							</div><!--/.single-navigation-left-->
							<div class="single-navigation-right">
								<?php next_post_link('%link', 'Next Post', true); ?>
							</div><!--/.single-navigation-right-->
						</div><!--/.single-navigation .cf-->
						<div class="similar-articles cf">
							<div class="title-border">
								<h3><?php _e( 'Similar Articles', 'ti' ); ?></h3>
							</div><!--/.title-border-->
							<div class="similar-articles-box">

								<?php
								$categories = get_the_category();
								$category_id = $categories[0]->cat_ID;

								$args = array(
									'post_type' => 'post',
									'orderby'	=> 'rand'
								);

								$random_posts = new WP_Query( $args );

								if ( $random_posts->have_posts() ) {
									while ( $random_posts->have_posts() ) {
										$random_posts->the_post(); ?>

										<div class="similar-article responsive">
											<span>
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													<?php
													if (strlen($post->post_title) > 25) {
														echo substr(the_title($before = '', $after = '', FALSE), 0, 25) . '...';
													} else {
														the_title();
													} ?>
												</a>
											</span>
											<?php echo excerpt_limit_length(get_the_excerpt(), '27'); ?>
										</div><!--/.similar-article-->

									<?php }
								} else { ?>
				                	<?php _e( 'No posts found.', 'ti' );
				           		}
				           		wp_reset_postdata();
           						?>

							</div><!--/.similar-articles-box-->
							<a href="" title="Previous" class="similar-articles-prev">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 32 32">
									<path d="M23.038 27.869c0.429 0.434 0.429 1.133 0 1.566s-1.122 0.434-1.55 0l-12.528-12.651c-0.429-0.434-0.429-1.134 0-1.566l12.528-12.653c0.429-0.434 1.122-0.434 1.55 0s0.429 1.133 0 1.566l-11.424 11.869 11.424 11.869z"></path>
								</svg>
							</a><!--/.similar-articles-prev-->
							<a href="" title="Next" class="similar-articles-next">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 32 32">
									<path d="M8.96 27.869c-0.429 0.434-0.429 1.133 0 1.566s1.122 0.434 1.55 0l12.528-12.651c0.429-0.434 0.429-1.134 0-1.566l-12.528-12.653c-0.429-0.434-1.122-0.434-1.55 0s-0.429 1.133 0 1.566l11.424 11.869-11.424 11.869z"></path>
								</svg>
							</a><!--/.similar-articles-next-->
						</div><!--/.similar-articles-->
						<?php comments_template(); ?>
					</article><!--/article-->

				<?php }
			} else {
				echo __( 'No posts found', 'ti' );
			}
			?>

		</div><!--/.blog-left-->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>