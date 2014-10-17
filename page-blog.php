<?php
/*
* 	The template for displaying Page Blog.
*
* 	@package ThemeIsle
*/
get_header();
?>
<div id="main-content">
	<div class="inner cf">
		<div class="blog-left">
			<div class="blog-left-title">
				<?php the_title(); ?>
			</div><!--/.blog-left-title-->

			<?php

			$args = array (
				'post_type'              => 'post',
				'pagination'             => true,
				'paged'					 => $paged,
			);

			$wp_query = new WP_Query( $args );

			if ( $wp_query->have_posts() ) {
				while ( $wp_query->have_posts() ) {
					$wp_query->the_post();
					$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
			} else {
				echo __( 'No posts found', 'ti' );
			}
			wp_reset_postdata();
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