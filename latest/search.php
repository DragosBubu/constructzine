<?php
/*
* 	The template for displaying Search.
*
* 	@package ThemeIsle
*/
get_header();
?>
<div id="main-content">
	<div class="inner cf">
		<div class="blog-left">
			<div class="blog-left-title">
				<?php _e( 'Search: ', 'ti' ); ?> <?php the_search_query(); ?>
			</div><!--/.blog-left-title-->

			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

					<article>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-title">
							<?php the_title(); ?>
						</a><!--/.post-title-->
						<div class="post-meta">
							<?php _e( 'Posted by', 'ti' ); ?> <?php the_author_posts_link(); ?> <?php _e( 'in', 'ti' ); ?> <?php the_category( ', ' ); ?>, <?php _e( 'on', 'ti' ); ?> <?php echo the_time( get_option( 'date_format' ) ); ?>
						</div><!--/.post-meta-->
						<div class="post-image">
							<?php
							if ( $featured_image != NULL ) { ?>
								<img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
							<?php }
							?>
						</div><!--/.post-image-->
						<div class="post-entry">
							<?php the_excerpt(); ?>
						</div><!--/.post-entry-->
						<div class="post-footer">
							<ul>
								<li class="comments-icon">
									<a href="<?php the_permalink(); ?>#comments" title="<?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?>">
										<?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?>
									</a>
								</li>
								<li><a href="<?php the_permalink(); ?>" title="<?php _e( 'Read more...', 'ti' ); ?>"><?php _e( 'Read more...', 'ti' ); ?></a></li>
							</ul>
						</div><!--/.post-footer-->
					</article><!--/article-->

				<?php }
			} else { ?>

				<article>
					<h1 class="post-title">
						<?php _e( 'It looks like we couldn\'t find what you were looking for!', 'ti' ); ?>
					</h1><!--/.post-tytle-->
					<div class="post-entry">
						<?php
						echo '<p>' . __( 'Try a different search. Thank you!', 'ti' ) . '</p>';
						?>
					</div><!--/.post-entry-->
				</article>

			<?php }
			?>

			<?php
			if (function_exists("pagination")) {
    			pagination();
			}
			?>
		</div><!--/.blog-left-->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>