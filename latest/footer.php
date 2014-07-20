<?php
/*
* 	The template for displaying Footer.
*
* 	@package ThemeIsle
*/
?>
<footer class="cf">
	<div class="inner cf">

		<div class="about-us">
			<?php
			if ( get_theme_mod( 'ti_footer_aboutus_title' ) != NULL ) {
				echo '<h3>'. get_theme_mod( 'ti_footer_aboutus_title' ) .'</h3>';
			} else {
				echo '<h3>'. __( 'About us', 'ti' ) .'</h3>';
			}
			?>

			<?php
			if ( get_theme_mod( 'ti_footer_aboutus_content' ) != NULL ) {
				echo '<p>'. get_theme_mod( 'ti_footer_aboutus_content' ) .'</p>';
			} else {
				echo '<p>'. __( 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non.', 'ti' ) .'</p>';
			}
			?>
		</div>

		<div class="contact-us">
			<?php
			if ( get_theme_mod( 'ti_footer_contactus_title' ) != NULL ) {
				echo '<h3>'. get_theme_mod( 'ti_footer_contactus_title' ) .'</h3>';
			} else {
				echo '<h3>'. __( 'Contact us', 'ti' ) .'</h3>';
			}
			?>
			<?php
			if ( get_theme_mod( 'ti_footer_contactus_content' ) != NULL ) {
				echo '<p>'. get_theme_mod( 'ti_footer_contactus_content' ) .'</p>';
			} else { ?>
				<p>Romania, Bucuresti<br>Str. Loreum ipsum, Nr. 2</p>
				<p>Tel: (+4) 0746123456<br>E-mail: contact@domeniu.com</p>
			<?php }
			?>
		</div>
		<div class="directions">
			<?php
			if ( get_theme_mod( 'ti_footer_map_title' ) != NULL ) {
				echo '<h3>'. get_theme_mod( 'ti_footer_map_title' ) .'</h3>';
			} else {
				echo '<h3>'. __( 'Map', 'ti' ) .'</h3>';
			}
			?>
			<?php
			if ( get_theme_mod( 'ti_footer_map_iframe' ) != NULL ) {
				echo get_theme_mod( 'ti_footer_map_iframe' );
			} else { ?>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48393.71012617254!2d-74.0047826738297!3d40.704654807499544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York!5e0!3m2!1sro!2sro!4v1403183009785" width="600" height="450" frameborder="0" style="border:0"></iframe>
			<?php }
			?>
		</div>
	</div>
	<?php wp_footer(); ?>
</footer>
</body>
</html>