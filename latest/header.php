<?php
/*
* 	The template for displaying Header.
*
* 	@package ThemeIsle
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('title'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<?php
	if ( get_theme_mod( 'ti_subheader_contact_form_shortcode' ) ) {
		$header_class = '';
	} else {
		$header_class = 'class="header-responsive"';
	}

    $header_image = get_header_image();
    if ( ! empty( $header_image ) ) { ?>
        <header style="background-image: url('<?php header_image(); ?>'); ">
	<?php } else { ?>
		<header <?php echo $header_class; ?> style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/header.png');">
	<?php }
	?>

	<div class="layer">

	<div class="inner">
		<?php
		if ( get_theme_mod( 'ti_subheader_contact_form_shortcode' ) ) {
			$headerbg_style = '';
		} else {
			$headerbg_style = ' style="height: 272px;"';
		}
		?>
		<div class="headerbg"<?php echo $headerbg_style; ?>></div>
		<div class="header-top cf">
			<a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>" id="logo">
				<?php
				if ( get_theme_mod( 'ti_header_logo' ) != NULL) { ?>
					<img src="<?php echo get_theme_mod( 'ti_header_logo' ); ?>" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" />
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" />
				<?php }
				?>
			</a><!--/#logo-->
			<p class="call-for-action">
				<?php
				if ( get_theme_mod( 'ti_header_contact_telephone' ) != NULL ) { ?>

					<?php
					if ( get_theme_mod( 'ti_header_contact_title' ) != NULL ) {
						echo get_theme_mod( 'ti_header_contact_title' );
					} else {
						echo __( 'Contact us now: ', 'ti' );
					}
					?>
					<span>
						<?php
						if ( get_theme_mod( 'ti_header_contact_telephone' ) != NULL ) {
							echo '<a href="tel:'. get_theme_mod( 'ti_header_contact_telephone' ) .'" title="'. get_theme_mod( 'ti_header_contact_telephone' ) .'">'. get_theme_mod( 'ti_header_contact_telephone' ) .'</a>';
						} else {
							echo '<a href="tel:+40746.000.111" title="(+4) 0746.000.111">(+4) 0746.000.111</a>';
						}
						?>
					</span>

				<?php }
				?>
			</p><!--/.call-for-action-->
		</div><!--/header-top-->
		<nav>
			<div class="navigation-menu">
				<div class="openresponsivemenu">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
						<path d="M0 12h22v4h-22v-4zM0 6h22v4h-22v-4zM0 18h22v4h-22v-4zM0 24h22v4h-22v-4zM24 18l4 6 4-6h-8zM32 16l-4-6-4 6h8z"></path>
					</svg>
				</div><!--/.openresponsivemenu-->
				<div class="nav-container">
				<?php
					wp_nav_menu(
						array(
							'theme_location'	=> 'top-menu',
						)
					);
				?>
				</div>
				</div><!--/.navigation-menu-->
			<ul class="navigation-socials">
				<?php
				if ( get_theme_mod( 'ti_header_facebook_link' ) != NULL ) { ?>
					<li>
						<a href="<?php echo get_theme_mod( 'ti_header_facebook_link' ); ?>" title="Facebook" class="facebook-icon" target="_blank">
						</a><!--/.facebook-icon-->
					</li>
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'ti_header_twitter_link' ) != NULL ) { ?>
					<li>
						<a href="<?php echo get_theme_mod( 'ti_header_twitter_link' ); ?>" title="Twitter" class="twitter-icon" target="_blank">
						</a><!--/.twitter-icon-->
					</li>
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'ti_header_youtube_link' ) != NULL ) { ?>
					<li>
						<a href="<?php echo get_theme_mod( 'ti_header_youtube_link' ); ?>" title="YouTube" class="youtube-icon" target="_blank">
						</a><!--/.youtube-icon-->
					</li>
				<?php }
				?>
			</ul><!--/.navigation-socials-->
		</nav><!--/nav-->
		<?php
		if ( is_front_page() ) { ?>

			<?php
			if ( get_theme_mod( 'ti_subheader_contact_form_shortcode' ) ) {
				echo '<div class="front-form">';
				echo '<h1>'. get_theme_mod( 'ti_subheader_contact_form_title' ) .'</h1>';
				echo do_shortcode( get_theme_mod( 'ti_subheader_contact_form_shortcode' ) );
				echo '</div>';
			}
			?>

		<?php }
		?>
	</div>
</div><!--/layer-->
</header>