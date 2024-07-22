<?php
/**
 * w3layouts Theme HomePage Customizer
 *
 * @package w3layouts
 */



$w3layouts_settings=new w3layouts_customizer_settings();

class w3layouts_customizer_settings {
	// Get our default values
	private $defaults;

	public function __construct() {
		// Get our Customizer defaults
		// $this->defaults = skyrocket_generate_defaults();

		// add_action( 'customize_register', array( $this, 'skyrocket_register_sample_custom_controls' ) );

		// Register our sample default controls
		add_action('customize_register', array($this, 'w3layouts_cust_register'));
		// add_action( 'customize_register', array( $this, 'skyrocket_add_customizer_panels' ) );
		add_action('customize_register', array($this, 'w3layouts_HomePage_panels'));



	}

	public function w3layouts_HomePage_panels($wp_customize) {
		/**
		 * Add our Header & Navigation Panel
		 */
		$wp_customize->add_panel('HomePage_panel',
			array('title'=> __('HomePage Customize', 'skyrocket'),
				'priority'=> 30,
				'description'=> esc_html__('add and update HomePage data.', 'skyrocket')));


		$wp_customize->add_section('HomePageBannerSection',
			array('title'=> __('HomePage Section 1 Banner', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageFeaturesSection',
			array('title'=> __('HomePage Section 2 Features', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageAboutSection',
			array('title'=> __('HomePage Section 3 About', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageWCUSection',
			array('title'=> __('HomePage Section 4 Why Choose Us', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageStatsSection',
			array('title'=> __('HomePage Section 5 Stats', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageTestimonialsSection',
			array('title'=> __('HomePage Section 6 Testimonials', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageBlogGridsSection',
			array('title'=> __('HomePage Section 7 Blog Posts', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageJoinNumberSection',
			array('title'=> __('HomePage Section 8 Join Now', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));







		/** HomePage Banner section starts **/

		$wp_customize->add_setting('HomePageBannerRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageBannerRequired',
				array('label'=> __('HomePage Banner Required', 'w3layouts'),
					'section'=> 'HomePageBannerSection',
					'settings'=> 'HomePageBannerRequired',
					'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('HomePageBannerRequired', array('selector'=> 'div.HomePageBanner', // You can also select a css class
			));

	$wp_customize->add_setting('HomePageBannerBgImage',
		array('default'=> '',
			'transport'=> 'refresh',
			'sanitize_callback'=> 'absint'
		));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageBannerBgImage',
			array('label'=> __('Banner Bg Image'),
				'description'=> esc_html__(''),
				'section'=> 'HomePageBannerSection',
				'flex_width'=> false, // Optional. Default: false
				'flex_height'=> true, // Optional. Default: false
				'width'=> 1800, // Optional. Default: 150
				'height'=> 900, // Optional. Default: 150
				'button_labels'=> array( // Optional.
					'select'=> __('Select Image'),
					'change'=> __('Change Image'),
					'remove'=> __('Remove'),
					'default'=> __('Default'),
					'placeholder'=> __('No image selected'),
					'frame_title'=> __('Select Image'),
					'frame_button'=> __('Choose Image'),
				))));


		$wp_customize->add_setting('HomePageBannerTitle1', array('default'=> "Your Kids Deserve The",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBannerTitle1',
				array('label'=> __('Banner Title1 Bold', 'w3layouts'),
					'section'=> 'HomePageBannerSection',
					'settings'=> 'HomePageBannerTitle1',
				)));

		$wp_customize->add_setting('HomePageBannerTitle2', array('default'=> "Best Education",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBannerTitle2',
				array('label'=> __('Banner Title2 Thin', 'w3layouts'),
					'section'=> 'HomePageBannerSection',
					'settings'=> 'HomePageBannerTitle2',
				)));

		$wp_customize->add_setting('HomePageBannerContent', array('default'=> 'Active Learning, Expert Teachers & Safe Environment',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBannerContent',
				array('label'=> __('Banner Content', 'w3layouts'),
					'section'=> 'HomePageBannerSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageBannerBtnURL', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBannerBtnURL',
				array('label'=> __('Banner Button URL', 'w3layouts'),
					'section'=> 'HomePageBannerSection',
					'settings'=> 'HomePageBannerBtnURL'
				)));

		$wp_customize->add_setting('HomePageBannerBtnText', array('default'=> 'Admission Now',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBannerBtnText',
				array('label'=> __('Banner Button Text', 'w3layouts'),
					'section'=> 'HomePageBannerSection',
					'settings'=> 'HomePageBannerBtnText'
				)));

		$wp_customize->add_setting('HomePageBannerImageTitle', array('default'=> "Back to School",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBannerImageTitle',
				array('label'=> __('Banner Image Title', 'w3layouts'),
					'section'=> 'HomePageBannerSection',
					'settings'=> 'HomePageBannerImageTitle',
				)));

		$wp_customize->add_setting('HomePageBannerImage',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageBannerImage',
				array('label'=> __('Banner Image'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageBannerSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 408, // Optional. Default: 150
					'height'=> 612, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		// Banner top & bottom  area textarea

		// $wp_customize->add_setting('HomePageBannerTopArea', array('default'=> '',
		// 		'transport'=> 'refresh',
		// 	));
		// $wp_customize->add_control(new WP_Customize_Control($wp_customize,
		// 		'HomePageBannerTopArea',
		// 		array('label'=> __('Banner Top', 'w3layouts'),
		// 			'section'=> 'HomePageBannerSection',
		// 			'type'=> 'textarea',
		// 			'input_attrs'=> array('class'=> 'my-custom-class',
		// 				'style'=> 'border: 1px solid #999',
		// 				'placeholder'=> __('Enter message...', 'w3layouts'),
		// 			),
		// 		)));

		$wp_customize->add_setting('HomePageBannerBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBannerBottomArea',
				array('label'=> __('Banner Bottom', 'w3layouts'),
					'section'=> 'HomePageBannerSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));
		// Banner top & bottom  area textarea

		/** HomePage Banner section ends **/


		/** HomePage Features section starts **/

		$wp_customize->add_setting('HomePageFeaturesRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageFeaturesRequired',
				array('label'=> __('HomePage Features Section Required', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeaturesRequired',
					'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('HomePageFeaturesRequired', array('selector'=> 'div.HomePageFeatures', // You can also select a css class
			));

		$wp_customize->add_setting('HomePageFeaturesTitle1', array('default'=> 'Best Features',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeaturesTitle1',
				array('label'=> __('HomePage Features Title 1', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeaturesTitle1'
				)));

		$wp_customize->add_setting('HomePageFeaturesTitle2', array('default'=> 'Achieve Your Goals With Edu School',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeaturesTitle2',
				array('label'=> __('HomePage Features Title 2', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeaturesTitle2'
				)));


		// Feature 1 grid starts
		$wp_customize->add_setting('HomePageFeature1Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageFeature1Required',
				array('label'=> __('HomePage Feature 1 Required', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature1Required'
				)));

		$wp_customize->add_setting('HomePageFeature1Icon', array('default'=> 'fas fa-user-friends',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature1Icon',
				array('label'=> __('HomePage Feature 1 Icon', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature1Icon'
				)));

		$wp_customize->add_setting('HomePageFeature1Url', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature1Url',
				array('label'=> __('HomePage Feature 1 URL', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature1Url'
				)));

		$wp_customize->add_setting('HomePageFeature1Title', array('default'=> "Expert Teachers",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature1Title',
				array('label'=> __('HomePage Feature 1 Title', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature1Title',
				)));

		$wp_customize->add_setting('HomePageFeature1Content', array('default'=> 'Ras effic itur metusga via suscipit consect eturerse adi unde omnis.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature1Content',
				array('label'=> __('HomePage Feature 1 Content', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// Feature 1 grid ends


		// Feature 2 grid starts
		$wp_customize->add_setting('HomePageFeature2Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageFeature2Required',
				array('label'=> __('HomePage Feature 2 Required', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature2Required'
				)));

		$wp_customize->add_setting('HomePageFeature2Icon', array('default'=> 'fas fa-book-reader',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature2Icon',
				array('label'=> __('HomePage Feature 2 Icon', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature2Icon'
				)));

		$wp_customize->add_setting('HomePageFeature2Url', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature2Url',
				array('label'=> __('HomePage Feature 2 URL', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature2Url'
				)));

		$wp_customize->add_setting('HomePageFeature2Title', array('default'=> "Quality Education",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature2Title',
				array('label'=> __('HomePage Feature 2 Title', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature2Title',
				)));

		$wp_customize->add_setting('HomePageFeature2Content', array('default'=> 'Ras effic itur metusga via suscipit consect eturerse adi unde omnis.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature2Content',
				array('label'=> __('HomePage Feature 2 Content', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// Feature 2 grid ends


		// Feature 3 grid starts
		$wp_customize->add_setting('HomePageFeature3Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageFeature3Required',
				array('label'=> __('HomePage Feature 3 Required', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature3Required'
				)));

		$wp_customize->add_setting('HomePageFeature3Icon', array('default'=> 'fas fa-user-graduate',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature3Icon',
				array('label'=> __('HomePage Feature 3 Icon', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature3Icon'
				)));

		$wp_customize->add_setting('HomePageFeature3Url', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature3Url',
				array('label'=> __('HomePage Feature 3 URL', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature3Url'
				)));

		$wp_customize->add_setting('HomePageFeature3Title', array('default'=> "Life Time Support",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature3Title',
				array('label'=> __('HomePage Feature 3 Title', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature3Title',
				)));

		$wp_customize->add_setting('HomePageFeature3Content', array('default'=> 'Ras effic itur metusga via suscipit consect eturerse adi unde omnis.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature3Content',
				array('label'=> __('HomePage Feature 3 Content', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));
		// Feature 3 grid ends


		// Feature 4 grid starts
		$wp_customize->add_setting('HomePageFeature4Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageFeature4Required',
				array('label'=> __('HomePage Feature 4 Required', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature4Required'
				)));

		$wp_customize->add_setting('HomePageFeature4Icon', array('default'=> 'fas fa-university',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature4Icon',
				array('label'=> __('HomePage Feature 4 Icon', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature4Icon'
				)));

		$wp_customize->add_setting('HomePageFeature4Url', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature4Url',
				array('label'=> __('HomePage Feature 4 URL', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature4Url'
				)));

		$wp_customize->add_setting('HomePageFeature4Title', array('default'=> "Best Scholarships",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature4Title',
				array('label'=> __('HomePage Feature 4 Title', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'settings'=> 'HomePageFeature4Title',
				)));

		$wp_customize->add_setting('HomePageFeature4Content', array('default'=> 'Ras effic itur metusga via suscipit consect eturerse adi unde omnis.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeature4Content',
				array('label'=> __('HomePage Feature 4 Content', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));
		// Feature 4 grid ends


		// HomePage Features top & bottom area textarea

		$wp_customize->add_setting('HomePageFeaturesTopArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeaturesTopArea',
				array('label'=> __('HomePage Features Top', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageFeaturesBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageFeaturesBottomArea',
				array('label'=> __('HomePage Features Bottom', 'w3layouts'),
					'section'=> 'HomePageFeaturesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));
		// HomePage Features top & bottom area textarea

		/** HomePage Features section ends **/





		/** HomePage About Section starts **/

		$wp_customize->add_setting('HomePageAboutRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageAboutRequired',
				array('label'=> __('HomePage About Section Required', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutRequired',
					'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('HomePageAboutRequired', array('selector'=> 'div.HomePageAbout', // You can also select a css class
			));

		$wp_customize->add_setting('HomePageAboutImage',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageAboutImage',
				array('label'=> __('About Image'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageAboutSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 640, // Optional. Default: 150
					'height'=> 660, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		// About Get Appointment Block
		$wp_customize->add_setting('HomePageAboutGetAppointmentBlockRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageAboutGetAppointmentBlockRequired',
				array('label'=> __('About Get Appointment Required', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutGetAppointmentBlockRequired'
				)));

		$wp_customize->add_setting('HomePageAboutGetAppointmentTitle', array('default'=> "Get a Appointment Today!",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutGetAppointmentTitle',
				array('label'=> __('About Get Appointment Title', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutGetAppointmentTitle'
				)));

		$wp_customize->add_setting('HomePageAboutGetAppointmentPara', array('default'=> 'Nemo enim ipsam oluptatem quia oluptas<br> sit aspernatur aut odit aut fugit.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutGetAppointmentPara',
				array('label'=> __('About Get Appointment Para', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageAboutPhoneURL', array('default'=> "tel:1-800-654-3210",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutPhoneURL',
				array('label'=> __('About Phone Number URL', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutPhoneURL'
				)));

		$wp_customize->add_setting('HomePageAboutPhoneNumber', array('default'=> "1-800-654-3210",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutPhoneNumber',
				array('label'=> __('About Phone Number', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutPhoneNumber'
				)));

		// About Get Appointment Block

		$wp_customize->add_setting('HomePageAboutTitle', array('default'=> "We Are The Best Choice For Your Child",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutTitle',
				array('label'=> __('About Title', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutTitle'
				)));

		$wp_customize->add_setting('HomePageAboutContent', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit.',
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutContent',
				array('label'=> __('About Para', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageAboutListTitle1', array('default'=> "Special Education",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutListTitle1',
				array('label'=> __('About List Title 1', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutListTitle1'
				)));

		$wp_customize->add_setting('HomePageAboutListTitle2', array('default'=> "Access more then 100K online courses",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutListTitle2',
				array('label'=> __('About List Title 2', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutListTitle2'
				)));

		$wp_customize->add_setting('HomePageAboutListTitle3', array('default'=> "Traditional Academies",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutListTitle3',
				array('label'=> __('About List Title 3', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutListTitle3'
				)));

		$wp_customize->add_setting('HomePageAboutBtnURL', array('default'=> "#url",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutBtnURL',
				array('label'=> __('About Btn URL', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutBtnURL'
				)));

		$wp_customize->add_setting('HomePageAboutBtnText', array('default'=> "Apply Now",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutBtnText',
				array('label'=> __('About Btn Text', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutBtnText'
				)));


		// HomePage About Section top & bottom  textarea

		$wp_customize->add_setting('HomePageAboutTopArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutTopArea',
				array('label'=> __('About Top', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageAboutBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutBottomArea',
				array('label'=> __('About Bottom', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// HomePage About Section top & bottom  textarea

		/** HomePage About Section ends **/




		/** HomePage Why Choose Us starts **/

		$wp_customize->add_setting('HomePageWCURequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageWCURequired',
				array('label'=> __('HomePage Why Choose Us Required', 'w3layouts'),
					'section'=> 'HomePageWCUSection',
					'settings'=> 'HomePageWCURequired',
					'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('HomePageWCURequired', array('selector'=> 'div.HomePageWCU', // You can also select a css class
			));

		$wp_customize->add_setting('HomePageWCUTitle1', array('default'=> 'Why Choose Us',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageWCUTitle1',
				array('label'=> __('Why Choose Us Title 1', 'w3layouts'),
					'section'=> 'HomePageWCUSection',
					'settings'=> 'HomePageWCUTitle1'
				)));

		$wp_customize->add_setting('HomePageWCUTitle2', array('default'=> 'Why Choose Us',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageWCUTitle2',
				array('label'=> __('Why Choose Us Title 2', 'w3layouts'),
					'section'=> 'HomePageWCUSection',
					'settings'=> 'HomePageWCUTitle2'
				)));

		$wp_customize->add_setting('HomePageWCUImage1',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageWCUImage1',
				array('label'=> __('Why Choose Us Image 1'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageWCUSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 640, // Optional. Default: 150
					'height'=> 426, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageWCUImage1TitleURL', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageWCUImage1TitleURL',
				array('label'=> __('Why Choose Us Image1 Title URL', 'w3layouts'),
					'section'=> 'HomePageWCUSection',
					'settings'=> 'HomePageWCUImage1TitleURL'
				)));

		$wp_customize->add_setting('HomePageWCUImage1Title', array('default'=> 'Expert Teachers',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageWCUImage1Title',
				array('label'=> __('Why Choose Us Image1 Title', 'w3layouts'),
					'section'=> 'HomePageWCUSection',
					'settings'=> 'HomePageWCUImage1Title'
				)));

		$wp_customize->add_setting('HomePageWCUImage2',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageWCUImage2',
				array('label'=> __('Why Choose Us Image 2'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageWCUSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 640, // Optional. Default: 150
					'height'=> 426, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageWCUImage2TitleURL', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageWCUImage2TitleURL',
				array('label'=> __('Why Choose Us Image2 Title URL', 'w3layouts'),
					'section'=> 'HomePageWCUSection',
					'settings'=> 'HomePageWCUImage2TitleURL'
				)));

		$wp_customize->add_setting('HomePageWCUImage2Title', array('default'=> 'Safe Environment',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageWCUImage2Title',
				array('label'=> __('Why Choose Us Image2 Title', 'w3layouts'),
					'section'=> 'HomePageWCUSection',
					'settings'=> 'HomePageWCUImage2Title'
				)));

		// Why Choose Us top & bottom  area textarea

		$wp_customize->add_setting('HomePageWCUTopArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageWCUTopArea',
				array('label'=> __('Why Choose Us Top', 'w3layouts'),
					'section'=> 'HomePageWCUSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageWCUBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageWCUBottomArea',
				array('label'=> __('Why Choose Us Bottom', 'w3layouts'),
					'section'=> 'HomePageWCUSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));
		// Why Choose Us top & bottom  area textarea

		/** HomePage Why Choose Us section ends **/





		/** HomePage stats section starts **/

		$wp_customize->add_setting('HomePageStatsRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageStatsRequired',
				array('label'=> __('HomePage Stats Section Required', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStatsRequired',
					'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('HomePageStatsRequired', array('selector'=> 'div.HomePageStats', // You can also select a css class
			));

		$wp_customize->add_setting('HomePageStatsMainTitle1', array('default'=> "Our Statistics",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStatsMainTitle1',
				array('label'=> __('Stats Main Title 1', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStatsMainTitle1'
				)));

		$wp_customize->add_setting('HomePageStatsMainTitle2', array('default'=> "We are Proud to Share with You",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStatsMainTitle2',
				array('label'=> __('Stats Main Title 2', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStatsMainTitle2'
				)));

		// stats grid 1
		$wp_customize->add_setting('HomePageStatsGrid1Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageStatsGrid1Required',
				array('label'=> __('HomePage Stats1 Required', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStatsGrid1Required'
				)));

		$wp_customize->add_setting('HomePageStats1Image',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageStats1Image',
				array('label'=> __('HomePage Stats1 Icon'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageStatsSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 64, // Optional. Default: 150
					'height'=> 64, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageStats1Number', array('default'=> "36076",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats1Number',
				array('label'=> __('Stats1 Number', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats1Number'
				)));

		$wp_customize->add_setting('HomePageStats1Title', array('default'=> "Students Enrolled",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats1Title',
				array('label'=> __('Stats1 Title', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats1Title'
				)));
		// stats grid 1


		// stats grid 2
		$wp_customize->add_setting('HomePageStatsGrid2Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageStatsGrid2Required',
				array('label'=> __('HomePage Stats2 Required', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStatsGrid2Required'
				)));

		$wp_customize->add_setting('HomePageStats2Image',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageStats2Image',
				array('label'=> __('HomePage Stats2 Icon'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageStatsSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 48, // Optional. Default: 150
					'height'=> 48, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageStats2Number', array('default'=> "786",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats2Number',
				array('label'=> __('Stats2 Number', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats2Number'
				)));

		$wp_customize->add_setting('HomePageStats2Title', array('default'=> "Our Branches",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats2Title',
				array('label'=> __('Stats2 Title', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats2Title'
				)));

		// stats grid 2


		// stats grid 3
		$wp_customize->add_setting('HomePageStatsGrid3Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageStatsGrid3Required',
				array('label'=> __('HomePage Stats3 Required', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStatsGrid3Required'
				)));

		$wp_customize->add_setting('HomePageStats3Image',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageStats3Image',
				array('label'=> __('HomePage Stats3 Icon'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageStatsSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 48, // Optional. Default: 150
					'height'=> 48, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageStats3Number', array('default'=> "3630",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats3Number',
				array('label'=> __('Stats3 Number', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats3Number'
				)));

		$wp_customize->add_setting('HomePageStats3Title', array('default'=> "Total Courses",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats3Title',
				array('label'=> __('Stats3 Title', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats3Title'
				)));

		// stats grid 3


		// stats grid 4
		$wp_customize->add_setting('HomePageStatsGrid4Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageStatsGrid4Required',
				array('label'=> __('HomePage Stats4 Required', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStatsGrid4Required'
				)));

		$wp_customize->add_setting('HomePageStats4Image',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageStats4Image',
				array('label'=> __('HomePage Stats4 Icon'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageStatsSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 48, // Optional. Default: 150
					'height'=> 48, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageStats4Number', array('default'=> "6300",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats4Number',
				array('label'=> __('Stats4 Number', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats4Number'
				)));

		$wp_customize->add_setting('HomePageStats4Title', array('default'=> "Awards Won",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats4Title',
				array('label'=> __('Stats4 Title', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats4Title'
				)));

		// stats grid 4


		// HomePage stats Section top & bottom  textarea

		$wp_customize->add_setting('HomePageStatsTopArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStatsTopArea',
				array('label'=> __('Stats Top', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageStatsBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStatsBottomArea',
				array('label'=> __('Stats Bottom', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// HomePage stats Section top & bottom  textarea

		/** HomePage Stats Section ends **/





		/** HomePage Testimonials starts **/

		$wp_customize->add_setting('HomePageTestimonialsRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageTestimonialsRequired',
				array('label'=> __('HomePage Testimonials Required', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsRequired',
					'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('HomePageTestimonialsRequired', array('selector'=> 'div.HomePageTestimonials', // You can also select a css class
			));			

			$wp_customize->add_setting('HomePageTestimonialsBgImage',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageTestimonialsBgImage',
				array('label'=> __('Testimonials Bg Image'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageTestimonialsSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 1680, // Optional. Default: 150
					'height'=> 900, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		// client 1
		$wp_customize->add_setting('HomePageTestimonial1Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageTestimonial1Required',
				array('label'=> __('Testimonial 1 Required', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonial1Required'
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient1Image',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageTestimonialsClient1Image',
				array('label'=> __('Client 1 Image'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageTestimonialsSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 150, // Optional. Default: 150
					'height'=> 150, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageTestimonialsMessage1', array('default'=> 'Duis aute irure dolor in reprehenderit in voluptate
velit esse cillum dolore eu. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsMessage1',
				array('label'=> __('Client 1 Message', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient1Name', array('default'=> 'Mario Spe',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient1Name',
				array('label'=> __('Client 1 Name', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient1Name'
				)));
		// client 1

		// client 2
		$wp_customize->add_setting('HomePageTestimonial2Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageTestimonial2Required',
				array('label'=> __('Testimonial 2 Required', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonial2Required'
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient2Image',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageTestimonialsClient2Image',
				array('label'=> __('Client 2 Image'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageTestimonialsSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 150, // Optional. Default: 150
					'height'=> 150, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageTestimonialsMessage2', array('default'=> 'Sed ut perspiciatis unde omnis iste natus error sit
voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.',
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsMessage2',
				array('label'=> __('Client 2 Message', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient2Name', array('default'=> 'Petey Cru',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient2Name',
				array('label'=> __('Client 2 Name', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient2Name'
				)));

		// client 2

		// client 3
		$wp_customize->add_setting('HomePageTestimonial3Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageTestimonial3Required',
				array('label'=> __('Testimonial 3 Required', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonial3Required'
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient3Image',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageTestimonialsClient3Image',
				array('label'=> __('Client 3 Image'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageTestimonialsSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 150, // Optional. Default: 150
					'height'=> 150, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageTestimonialsMessage3', array('default'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing
elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsMessage3',
				array('label'=> __('Client 3 Message', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient3Name', array('default'=> 'Anna Sth',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient3Name',
				array('label'=> __('Client 3 Name', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient3Name'
				)));

		// client 3

		// client 4
		$wp_customize->add_setting('HomePageTestimonial4Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageTestimonial4Required',
				array('label'=> __('Testimonial 4 Required', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonial4Required'
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient4Image',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageTestimonialsClient4Image',
				array('label'=> __('Client 4 Image'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageTestimonialsSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 150, // Optional. Default: 150
					'height'=> 150, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageTestimonialsMessage4', array('default'=> 'Duis aute irure dolor in reprehenderit in voluptate
		velit esse cillum dolore eu. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsMessage4',
				array('label'=> __('Client 4 Message', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient4Name', array('default'=> 'Gail For',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient4Name',
				array('label'=> __('Client 4 Name', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient4Name'
				)));
		// client 4

		// client 5
		$wp_customize->add_setting('HomePageTestimonial5Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageTestimonial5Required',
				array('label'=> __('Testimonial 5 Required', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonial5Required'
				)));				

		$wp_customize->add_setting('HomePageTestimonialsClient5Image',
		array('default'=> '',
			'transport'=> 'refresh',
			'sanitize_callback'=> 'absint'
		));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageTestimonialsClient5Image',
			array('label'=> __('Client 5 Image'),
				'description'=> esc_html__(''),
				'section'=> 'HomePageTestimonialsSection',
				'flex_width'=> false, // Optional. Default: false
				'flex_height'=> true, // Optional. Default: false
				'width'=> 150, // Optional. Default: 150
				'height'=> 150, // Optional. Default: 150
				'button_labels'=> array( // Optional.
					'select'=> __('Select Image'),
					'change'=> __('Change Image'),
					'remove'=> __('Remove'),
					'default'=> __('Default'),
					'placeholder'=> __('No image selected'),
					'frame_title'=> __('Select Image'),
					'frame_button'=> __('Choose Image'),
				))));

		$wp_customize->add_setting('HomePageTestimonialsMessage5', array('default'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing
		elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
		veniam, quis nostrud exercitation.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsMessage5',
				array('label'=> __('Client 5 Message', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient5Name', array('default'=> 'Boye Fra',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient5Name',
				array('label'=> __('Client 5 Name', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient5Name'
				)));
		// client 5

		// HomePage Testimonials top & bottom  area textarea

		$wp_customize->add_setting('HomePageTestimonialsTopArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsTopArea',
				array('label'=> __('Testimonials Top', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageTestimonialsBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsBottomArea',
				array('label'=> __('Testimonials Bottom', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));
		// HomePage Testimonials top & bottom  area textarea

		/** HomePage Testimonials ends **/



		/** Homepage Blog section starts **/

		$wp_customize->add_setting('HomePageBlogGridsRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageBlogGridsRequired',
			array('label'=> __('Homepage Blog Grids Required', 'w3layouts'),
				'section'=> 'HomePageBlogGridsSection',
				'settings'=> 'HomePageBlogGridsRequired',
				'priority'=> 1)));
	$wp_customize->selective_refresh->add_partial('HomePageBlogGridsRequired', array('selector'=> 'div.HomePageBlog', // You can also select a css class
		));

	$wp_customize->add_setting('HomePageBlogGridsTitle1', array('default'=> "Our News",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageBlogGridsTitle1',
			array('label'=> __('HomePage Blog Grids Title 1', 'w3layouts'),
				'section'=> 'HomePageBlogGridsSection',
				'settings'=> 'HomePageBlogGridsTitle1',
			)));

	$wp_customize->add_setting('HomePageBlogGridsTitle2', array('default'=> "Latest Blog Posts",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageBlogGridsTitle2',
			array('label'=> __('HomePage Blog Grids Title 2', 'w3layouts'),
				'section'=> 'HomePageBlogGridsSection',
				'settings'=> 'HomePageBlogGridsTitle2',
			)));

	$wp_customize->add_setting('HomePageBlogAuthorRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageBlogAuthorRequired',
			array('label'=> __('Homepage Blog Author Required', 'w3layouts'),
				'section'=> 'HomePageBlogGridsSection',
				'settings'=> 'HomePageBlogAuthorRequired'
			)));

	$wp_customize->add_setting('HomePageBlogDateRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageBlogDateRequired',
			array('label'=> __('Homepage Blog Date Required', 'w3layouts'),
				'section'=> 'HomePageBlogGridsSection',
				'settings'=> 'HomePageBlogDateRequired'
			)));

	// HomePage Blog section top & bottom  textarea

	$wp_customize->add_setting('HomePageBlogTopArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageBlogTopArea',
			array('label'=> __('Blog Grids Top', 'w3layouts'),
				'section'=> 'HomePageBlogGridsSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	$wp_customize->add_setting('HomePageBlogBottomArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageBlogBottomArea',
			array('label'=> __('Blog Grids Bottom', 'w3layouts'),
				'section'=> 'HomePageBlogGridsSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	// HomePage Blog section top & bottom  textarea

	/** Homepage Blog section ends **/






		/** HomePage Join Number section starts **/

		$wp_customize->add_setting('HomePageJoinNumberRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageJoinNumberRequired',
			array('label'=> __('HomePage Join Number Section Required', 'w3layouts'),
				'section'=> 'HomePageJoinNumberSection',
				'settings'=> 'HomePageJoinNumberRequired',
				'priority'=> 1)));
	$wp_customize->selective_refresh->add_partial('HomePageJoinNumberRequired', array('selector'=> 'div.HomePageJoinNumber', // You can also select a css class
		));

	$wp_customize->add_setting('HomePageJoinNumberTitle', array('default'=> "Call To Enroll Your Child",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageJoinNumberTitle',
			array('label'=> __('HomePage Join Number Title', 'w3layouts'),
				'section'=> 'HomePageJoinNumberSection',
				'settings'=> 'HomePageJoinNumberTitle',
			)));

	$wp_customize->add_setting('HomePageJoinNumberContent', array('default'=> 'Begin the change today!',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageJoinNumberContent',
			array('label'=> __('HomePage Join Number Content', 'w3layouts'),
				'section'=> 'HomePageJoinNumberSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	$wp_customize->add_setting('HomePageJoinNumberIcon', array('default'=> 'fas fa-phone-volume',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageJoinNumberIcon',
			array('label'=> __('HomePage Join Number Icon', 'w3layouts'),
				'section'=> 'HomePageJoinNumberSection',
				'settings'=> 'HomePageJoinNumberIcon'
			)));

	$wp_customize->add_setting('HomePageJoinNumberURL', array('default'=> "tel:+1(23) 456 789 0000",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageJoinNumberURL',
			array('label'=> __('HomePage Join Number URL', 'w3layouts'),
				'section'=> 'HomePageJoinNumberSection',
				'settings'=> 'HomePageJoinNumberURL',
			)));

	$wp_customize->add_setting('HomePageJoinNumber', array('default'=> "+1(23) 456 789 0000",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageJoinNumber',
			array('label'=> __('HomePage Join Number', 'w3layouts'),
				'section'=> 'HomePageJoinNumberSection',
				'settings'=> 'HomePageJoinNumber',
			)));

	$wp_customize->add_setting('HomePageJoinNumberBtnUrl', array('default'=> '#url',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageJoinNumberBtnUrl',
			array('label'=> __('Button URL', 'w3layouts'),
				'section'=> 'HomePageJoinNumberSection',
				'settings'=> 'HomePageJoinNumberBtnUrl'
			)));

	$wp_customize->add_setting('HomePageJoinNumberBtnText', array('default'=> 'Join for free',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageJoinNumberBtnText',
			array('label'=> __('Button Text', 'w3layouts'),
				'section'=> 'HomePageJoinNumberSection',
				'settings'=> 'HomePageJoinNumberBtnText'
			)));


	// HomePage Join Number Section top & bottom  textarea

	$wp_customize->add_setting('HomePageJoinNumberTopArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageJoinNumberTopArea',
			array('label'=> __('Booking Number Top', 'w3layouts'),
				'section'=> 'HomePageJoinNumberSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	$wp_customize->add_setting('HomePageJoinNumberBottomArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'HomePageJoinNumberBottomArea',
			array('label'=> __('Booking Number Bottom', 'w3layouts'),
				'section'=> 'HomePageJoinNumberSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	// HomePage Join Number Section top & bottom  textarea

	/** HomePage Join Number section ends **/





	}

	public function w3layouts_cust_register($wp_customize) {}



}