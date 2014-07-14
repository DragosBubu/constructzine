<?php
/*
* 	The template for displaying Archive.
*
* 	@package ThemeIsle
*/
get_header();
?>
<div id="main-content">
	<div class="inner cf">
		<div class="blog-left">
			<div class="blog-left-title">
				<?php
					$category_archive = get_the_category();
					$author_archive = get_the_author();
					$search_archive = get_search_query();
					if ( is_day() ) {
						printf( __( 'Daily Archives: %s', 'ti' ), get_the_date() );
					} elseif ( is_month() ) {
						printf( __( 'Monthly Archives: %s', 'ti' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'ti' ) ) );
					} elseif ( is_year() ) {
						printf( __( 'Yearly Archives: %s.', 'ti' ), get_the_date( _x( 'Y', 'yearly archives date format', 'ti' ) ) );
					} elseif ( is_category() ) {
						echo _e( 'Category: ', 'ti' ) . single_cat_title("", false) . '.';
					} elseif ( is_author() ) {
						echo _e( 'Author: ', 'ti' ) . $author_archive;
					}
				?>
			</div><!--/.blog-left-title-->

			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
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