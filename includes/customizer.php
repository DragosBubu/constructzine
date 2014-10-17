<?php

function constructzine_customizer( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    /*
    ** Header Customizer
    */
    $wp_customize->add_section( 'constructzine_header' , array(
    	'title'       => __( 'Header', 'ti' ),
    	'priority'    => 200,
	) );

		/* Header - Logo */
		$wp_customize->add_setting( 'ti_header_logo' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_header_logo', array(
		    'label'    => __( 'Logo:', 'ti' ),
		    'section'  => 'constructzine_header',
		    'settings' => 'ti_header_logo',
		    'priority' => '1',
		) ) );

		/* Header - Contact Title */
		$wp_customize->add_setting( 'ti_header_contact_title' );
		$wp_customize->add_control( 'ti_header_contact_title', array(
		    'label'    => __( 'Contact Title:', 'ti' ),
		    'section'  => 'constructzine_header',
		    'settings' => 'ti_header_contact_title',
			'priority' => '2',
		) );

		/* Header - Contact Telephone */
		$wp_customize->add_setting( 'ti_header_contact_telephone' );
		$wp_customize->add_control( 'ti_header_contact_telephone', array(
		    'label'    => __( 'Contact Telephone:', 'ti' ),
		    'section'  => 'constructzine_header',
		    'settings' => 'ti_header_contact_telephone',
			'priority' => '2',
		) );

		/* Header - Facebook - Link */
		$wp_customize->add_setting( 'ti_header_facebook_link' );
		$wp_customize->add_control( 'ti_header_facebook_link', array(
		    'label'    => __( 'Facebook - Link:', 'ti' ),
		    'section'  => 'constructzine_header',
		    'settings' => 'ti_header_facebook_link',
			'priority' => '3',
		) );

		/* Header - Twitter - Link */
		$wp_customize->add_setting( 'ti_header_twitter_link' );
		$wp_customize->add_control( 'ti_header_twitter_link', array(
		    'label'    => __( 'Twitter - Link:', 'ti' ),
		    'section'  => 'constructzine_header',
		    'settings' => 'ti_header_twitter_link',
			'priority' => '4',
		) );

		/* Header - YouTube - Link */
		$wp_customize->add_setting( 'ti_header_youtube_link' );
		$wp_customize->add_control( 'ti_header_youtube_link', array(
		    'label'    => __( 'YouTube - Link:', 'ti' ),
		    'section'  => 'constructzine_header',
		    'settings' => 'ti_header_youtube_link',
			'priority' => '5',
		) );

	/*
    ** Subheader Customizer
    */
    $wp_customize->add_section( 'constructzine_subheader' , array(
    	'title'       => __( 'Subheader', 'ti' ),
    	'priority'    => 250,
	) );

		/* Subheader - Contact Form - Title */
		$wp_customize->add_setting( 'ti_subheader_contact_form_title' );
		$wp_customize->add_control( 'ti_subheader_contact_form_title', array(
		    'label'    => __( 'Contact Form 7 - Title:', 'ti' ),
		    'section'  => 'constructzine_subheader',
		    'settings' => 'ti_subheader_contact_form_title',
			'priority' => '1',
		) );

		/* Subheader - Contact Form - Shortcode */
		$wp_customize->add_setting( 'ti_subheader_contact_form_shortcode' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_subheader_contact_form_shortcode', array(
		            'label' 	=> __( 'Contact Form 7 - Shortcode:', 'ti' ),
		            'section' 	=> 'constructzine_subheader',
		            'settings' 	=> 'ti_subheader_contact_form_shortcode',
		            'priority' 	=> '2'
		        )
		    )
		);

	/*
    ** Front Page Customizer
    */
    $wp_customize->add_section( 'constructzine_frontpage' , array(
    	'title'       => __( 'Front Page', 'ti' ),
    	'priority'    => 300,
	) );

		/* Front Page - Box One - Title */
		$wp_customize->add_setting( 'ti_frontpage_boxone_title' );
		$wp_customize->add_control( 'ti_frontpage_boxone_title', array(
		    'label'    => __( 'Box 1 - Title:', 'ti' ),
		    'section'  => 'constructzine_frontpage',
		    'settings' => 'ti_frontpage_boxone_title',
			'priority' => '1',
		) );

		/* Front Page - Box One - Content */
		$wp_customize->add_setting( 'ti_frontpage_boxone_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_boxone_content', array(
		            'label' 	=> __( 'Box 1 - Content:', 'ti' ),
		            'section' 	=> 'constructzine_frontpage',
		            'settings' 	=> 'ti_frontpage_boxone_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Front Page - Box Two - Title */
		$wp_customize->add_setting( 'ti_frontpage_boxtwo_title' );
		$wp_customize->add_control( 'ti_frontpage_boxtwo_title', array(
		    'label'    => __( 'Box 2 - Title:', 'ti' ),
		    'section'  => 'constructzine_frontpage',
		    'settings' => 'ti_frontpage_boxtwo_title',
			'priority' => '3',
		) );

		/* Front Page - Box Two - Content */
		$wp_customize->add_setting( 'ti_frontpage_boxtwo_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_boxtwo_content', array(
		            'label' 	=> __( 'Box 2 - Content:', 'ti' ),
		            'section' 	=> 'constructzine_frontpage',
		            'settings' 	=> 'ti_frontpage_boxtwo_content',
		            'priority' 	=> '4'
		        )
		    )
		);

		/* Front Page - Box Three - Title */
		$wp_customize->add_setting( 'ti_frontpage_boxthree_title' );
		$wp_customize->add_control( 'ti_frontpage_boxthree_title', array(
		    'label'    => __( 'Box 3 - Title:', 'ti' ),
		    'section'  => 'constructzine_frontpage',
		    'settings' => 'ti_frontpage_boxthree_title',
			'priority' => '5',
		) );

		/* Front Page - Box Three - Content */
		$wp_customize->add_setting( 'ti_frontpage_boxthree_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_boxthree_content', array(
		            'label' 	=> __( 'Box 3 - Content:', 'ti' ),
		            'section' 	=> 'constructzine_frontpage',
		            'settings' 	=> 'ti_frontpage_boxthree_content',
		            'priority' 	=> '6'
		        )
		    )
		);

		/* Front Page - Article - Title */
		$wp_customize->add_setting( 'ti_frontpage_article_title' );
		$wp_customize->add_control( 'ti_frontpage_article_title', array(
		    'label'    => __( 'About Us - Title:', 'ti' ),
		    'section'  => 'constructzine_frontpage',
		    'settings' => 'ti_frontpage_article_title',
			'priority' => '7',
		) );

		/* Front Page - Article - Image */
		$wp_customize->add_setting( 'ti_frontpage_article_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_article_image', array(
		    'label'    => __( 'About Us - Image:', 'ti' ),
		    'section'  => 'constructzine_frontpage',
		    'settings' => 'ti_frontpage_article_image',
		    'priority' => '8',
		) ) );

		/* Front Page - Box Three - Content */
		$wp_customize->add_setting( 'ti_frontpage_article_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_article_content', array(
		            'label' 	=> __( 'About Us - Content', 'ti' ),
		            'section' 	=> 'constructzine_frontpage',
		            'settings' 	=> 'ti_frontpage_article_content',
		            'priority' 	=> '9'
		        )
		    )
		);

		/* Front Page - Article - Title */
		$wp_customize->add_setting( 'ti_frontpage_testimonials_title' );
		$wp_customize->add_control( 'ti_frontpage_testimonials_title', array(
		    'label'    => __( 'Testimonials - Title:', 'ti' ),
		    'section'  => 'constructzine_frontpage',
		    'settings' => 'ti_frontpage_testimonials_title',
			'priority' => '10',
		) );

	/*
    ** Footer Customizer
    */
    $wp_customize->add_section( 'constructzine_footer' , array(
    	'title'       => __( 'Footer', 'ti' ),
    	'priority'    => 350,
	) );

		/* Footer - About us - Title */
		$wp_customize->add_setting( 'ti_footer_aboutus_title' );
		$wp_customize->add_control( 'ti_footer_aboutus_title', array(
		    'label'    => __( 'About us - Title:', 'ti' ),
		    'section'  => 'constructzine_footer',
		    'settings' => 'ti_footer_aboutus_title',
			'priority' => '1',
		) );

		/* Footer - About us - Content */
		$wp_customize->add_setting( 'ti_footer_aboutus_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_footer_aboutus_content', array(
		            'label' 	=> __( 'About us - Content', 'ti' ),
		            'section' 	=> 'constructzine_footer',
		            'settings' 	=> 'ti_footer_aboutus_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Footer - Contact us - Title */
		$wp_customize->add_setting( 'ti_footer_contactus_title' );
		$wp_customize->add_control( 'ti_footer_contactus_title', array(
		    'label'    => __( 'Contact us - Title:', 'ti' ),
		    'section'  => 'constructzine_footer',
		    'settings' => 'ti_footer_contactus_title',
			'priority' => '3',
		) );

		/* Footer - Contact us - Content */
		$wp_customize->add_setting( 'ti_footer_contactus_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_footer_contactus_content', array(
		            'label' 	=> __( 'Contact us - Content', 'ti' ),
		            'section' 	=> 'constructzine_footer',
		            'settings' 	=> 'ti_footer_contactus_content',
		            'priority' 	=> '4'
		        )
		    )
		);

		/* Footer - Map - Title */
		$wp_customize->add_setting( 'ti_footer_map_title' );
		$wp_customize->add_control( 'ti_footer_map_title', array(
		    'label'    => __( 'Map - Title:', 'ti' ),
		    'section'  => 'constructzine_footer',
		    'settings' => 'ti_footer_map_title',
			'priority' => '5',
		) );

		/* Footer - Contact us - Iframe */
		$wp_customize->add_setting( 'ti_footer_map_iframe' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_footer_map_iframe', array(
		            'label' 	=> __( 'Map - Iframe', 'ti' ),
		            'section' 	=> 'constructzine_footer',
		            'settings' 	=> 'ti_footer_map_iframe',
		            'priority' 	=> '6'
		        )
		    )
		);

	/*
    ** Contact Customizer
    */
    $wp_customize->add_section( 'constructzine_contact' , array(
    	'title'       => __( 'Contact', 'ti' ),
    	'priority'    => 400,
	) );

		/* Contact - Contact us - Title */
		$wp_customize->add_setting( 'ti_contact_contactus_title' );
		$wp_customize->add_control( 'ti_contact_contactus_title', array(
		    'label'    => __( 'Contact - Title:', 'ti' ),
		    'section'  => 'constructzine_contact',
		    'settings' => 'ti_contact_contactus_title',
			'priority' => '1',
		) );

		/* Contact - Contact us - Content */
		$wp_customize->add_setting( 'ti_contact_contactus_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_contact_contactus_content', array(
		            'label' 	=> __( 'Contact us - Content', 'ti' ),
		            'section' 	=> 'constructzine_contact',
		            'settings' 	=> 'ti_contact_contactus_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Contact - Contact us - Phone */
		$wp_customize->add_setting( 'ti_contact_phone' );
		$wp_customize->add_control( 'ti_contact_phone', array(
		    'label'    => __( 'Contact - Phone:', 'ti' ),
		    'section'  => 'constructzine_contact',
		    'settings' => 'ti_contact_phone',
			'priority' => '3',
		) );

		/* Contact - Contact us - Website */
		$wp_customize->add_setting( 'ti_contact_website' );
		$wp_customize->add_control( 'ti_contact_website', array(
		    'label'    => __( 'Contact - Website:', 'ti' ),
		    'section'  => 'constructzine_contact',
		    'settings' => 'ti_contact_website',
			'priority' => '4',
		) );

		/* Contact - Contact us - E-mail */
		$wp_customize->add_setting( 'ti_contact_email' );
		$wp_customize->add_control( 'ti_contact_email', array(
		    'label'    => __( 'Contact - E-mail:', 'ti' ),
		    'section'  => 'constructzine_contact',
		    'settings' => 'ti_contact_email',
			'priority' => '5',
		) );

}
add_action( 'customize_register', 'constructzine_customizer' );

if( class_exists( 'WP_Customize_Control' ) ):
	class Example_Customize_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';

	    public function render_content() { ?>

	        <label>
	        	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        	<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>

	        <?php
	    }
	}
endif;

?>