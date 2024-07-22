<?php
/**
 * w3layouts Theme Single Landing Page Customizer
 *
 * @package w3layouts
 */

$w3layouts_Landing_settings=new w3layouts_Landing_customizer_settings();

class w3layouts_Landing_customizer_settings {
    // Get our default values
    // private $defaults;

    public function __construct() {
        // add_action( 'customize_register', array( $this, 'w3layouts_Landing_cust_register' ) );
        add_action('customize_register', array($this, 'w3layouts_Landingpage_panels'));

    }

    public function w3layouts_Landingpage_panels($wp_customize) {
        /**
 		 * Add our Header & Navigation Panel
 		 */
        $wp_customize->add_panel('LandingPage_panel',
            array('title'=> __('Single Landing Page Customize', 'w3layouts'),
                'priority'=> 30,
                'description'=> esc_html__('add and update Landingpage data.', 'w3layouts')));

        $wp_customize->add_section('LandingPageBannerSection',
			array('title'=> __('LandingPage Section 1 Banner', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'LandingPage_panel'
			));

		$wp_customize->add_section('LandingPageAboutSection',
			array('title'=> __('LandingPage Section 2 About', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'LandingPage_panel'
			));

		$wp_customize->add_section('LandingPageFeaturesSection',
			array('title'=> __('LandingPage Section 3 Features', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'LandingPage_panel'
			));

		$wp_customize->add_section('LandingPageTeamSection',
			array('title'=> __('LandingPage Section 4 Team', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'LandingPage_panel'
			));

		$wp_customize->add_section('LandingPageStatsSection',
			array('title'=> __('Section 5 Stats', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'LandingPage_panel'
			));

		$wp_customize->add_section('LandingPageTestimonialsSection',
			array('title'=> __('Section 6 Testimonials', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'LandingPage_panel'
			));
            
		$wp_customize->add_section('LandingPageBlogGridsSection',
			array('title'=> __('Section 7 Blog Posts', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'LandingPage_panel'
			));
			
		$wp_customize->add_section('LandingPageContactSection',
			array('title'=> __('Section 8 Contact Section', 'w3layouts'),
			  'description'=> esc_html__('', 'w3layouts'),
			  'panel'=> 'LandingPage_panel'
			));
	
		$wp_customize->add_section('LandingPageContactForm',
			array('title'=> __('Section 9 Contact Form', 'w3layouts'),
			  'description'=> esc_html__('', 'w3layouts'),
			  'panel'=> 'LandingPage_panel'
			));
	
		$wp_customize->add_section('LandingPageContactMap',
			array('title'=> __('Section 10 Contact Contact Map', 'w3layouts'),
			  'description'=> esc_html__('', 'w3layouts'),
			  'panel'=> 'LandingPage_panel'
			));

		$wp_customize->add_section('LandingPageJoinNumberSection',
			array('title'=> __('Section 11 Join Now', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'LandingPage_panel'
			));







			/** LandingPage Banner section starts **/
	
			$wp_customize->add_setting('LandingPageBannerRequired',
				array('default'=> 1,
					'transport'=> 'refresh',
					'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
			$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageBannerRequired',
					array('label'=> __('LandingPage Banner Required', 'w3layouts'),
						'section'=> 'LandingPageBannerSection',
						'settings'=> 'LandingPageBannerRequired',
						'priority'=> 1)));
	
			$wp_customize->selective_refresh->add_partial('LandingPageBannerRequired', array('selector'=> 'div.LandingPageBanner', // You can also select a css class
				));
	
			/** Banner */
	
			$wp_customize->add_setting('LandingPageBannerTitle1', array('default'=> "Your Kids Deserve The",
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageBannerTitle1',
					array('label'=> __('Banner Title1 Bold', 'w3layouts'),
						'section'=> 'LandingPageBannerSection',
						'settings'=> 'LandingPageBannerTitle1',
					)));
	
			$wp_customize->add_setting('LandingPageBannerTitle2', array('default'=> "Best Education",
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageBannerTitle2',
					array('label'=> __('Banner Title2 Thin', 'w3layouts'),
						'section'=> 'LandingPageBannerSection',
						'settings'=> 'LandingPageBannerTitle2',
					)));
	
			$wp_customize->add_setting('LandingPageBannerContent', array('default'=> 'Active Learning, Expert Teachers & Safe Environment',
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageBannerContent',
					array('label'=> __('Banner Content', 'w3layouts'),
						'section'=> 'LandingPageBannerSection',
						'type'=> 'textarea',
						'input_attrs'=> array('class'=> 'my-custom-class',
							'style'=> 'border: 1px solid #999',
							'placeholder'=> __('Enter message...', 'w3layouts'),
						),
					)));
	
			$wp_customize->add_setting('LandingPageBannerBtnURL', array('default'=> '#url',
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageBannerBtnURL',
					array('label'=> __('Banner Button URL', 'w3layouts'),
						'section'=> 'LandingPageBannerSection',
						'settings'=> 'LandingPageBannerBtnURL'
					)));
	
			$wp_customize->add_setting('LandingPageBannerBtnText', array('default'=> 'Admission Now',
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageBannerBtnText',
					array('label'=> __('Banner Button Text', 'w3layouts'),
						'section'=> 'LandingPageBannerSection',
						'settings'=> 'LandingPageBannerBtnText'
					)));
	
			$wp_customize->add_setting('LandingPageBannerImageTitle', array('default'=> "Back to School",
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageBannerImageTitle',
					array('label'=> __('Banner Image Title', 'w3layouts'),
						'section'=> 'LandingPageBannerSection',
						'settings'=> 'LandingPageBannerImageTitle',
					)));
	
			$wp_customize->add_setting('LandingPageBannerImage',
				array('default'=> '',
					'transport'=> 'refresh',
					'sanitize_callback'=> 'absint'
				));
			$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageBannerImage',
					array('label'=> __('Banner Image'),
						'description'=> esc_html__(''),
						'section'=> 'LandingPageBannerSection',
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
	
			// $wp_customize->add_setting('LandingPageBannerTopArea', array('default'=> '',
			// 		'transport'=> 'refresh',
			// 	));
			// $wp_customize->add_control(new WP_Customize_Control($wp_customize,
			// 		'LandingPageBannerTopArea',
			// 		array('label'=> __('Banner Top', 'w3layouts'),
			// 			'section'=> 'LandingPageBannerSection',
			// 			'type'=> 'textarea',
			// 			'input_attrs'=> array('class'=> 'my-custom-class',
			// 				'style'=> 'border: 1px solid #999',
			// 				'placeholder'=> __('Enter message...', 'w3layouts'),
			// 			),
			// 		)));
	
			$wp_customize->add_setting('LandingPageBannerBottomArea', array('default'=> '',
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageBannerBottomArea',
					array('label'=> __('Banner Bottom', 'w3layouts'),
						'section'=> 'LandingPageBannerSection',
						'type'=> 'textarea',
						'input_attrs'=> array('class'=> 'my-custom-class',
							'style'=> 'border: 1px solid #999',
							'placeholder'=> __('Enter message...', 'w3layouts'),
						),
					)));
			// Banner top & bottom  area textarea
	
			/** LandingPage Banner section ends **/
	
	
	
	
	
			/** LandingPage About Section starts **/
	
			$wp_customize->add_setting('LandingPageAboutRequired',
				array('default'=> 1,
					'transport'=> 'refresh',
					'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
			$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageAboutRequired',
					array('label'=> __('LandingPage About Section Required', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'settings'=> 'LandingPageAboutRequired',
						'priority'=> 1)));
			$wp_customize->selective_refresh->add_partial('LandingPageAboutRequired', array('selector'=> 'div.LandingPageAbout', // You can also select a css class
				));
	
			$wp_customize->add_setting('LandingPageAboutImage',
				array('default'=> '',
					'transport'=> 'refresh',
					'sanitize_callback'=> 'absint'
				));
			$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageAboutImage',
					array('label'=> __('About Image'),
						'description'=> esc_html__(''),
						'section'=> 'LandingPageAboutSection',
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
			$wp_customize->add_setting('LandingPageAboutGetAppointmentBlockRequired',
				array('default'=> 1,
					'transport'=> 'refresh',
					'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
			$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageAboutGetAppointmentBlockRequired',
					array('label'=> __('About Get Appointment Required', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'settings'=> 'LandingPageAboutGetAppointmentBlockRequired'
					)));
	
			$wp_customize->add_setting('LandingPageAboutGetAppointmentTitle', array('default'=> "Get a Appointment Today!",
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutGetAppointmentTitle',
					array('label'=> __('About Get Appointment Title', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'settings'=> 'LandingPageAboutGetAppointmentTitle'
					)));
	
			$wp_customize->add_setting('LandingPageAboutGetAppointmentPara', array('default'=> 'Nemo enim ipsam oluptatem quia oluptas<br> sit aspernatur aut odit aut fugit.',
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutGetAppointmentPara',
					array('label'=> __('About Get Appointment Para', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'type'=> 'textarea',
						'input_attrs'=> array('class'=> 'my-custom-class',
							'style'=> 'border: 1px solid #999',
							'placeholder'=> __('Enter message...', 'w3layouts'),
						),
					)));
	
			$wp_customize->add_setting('LandingPageAboutPhoneURL', array('default'=> "tel:1-800-654-3210",
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutPhoneURL',
					array('label'=> __('About Phone Number URL', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'settings'=> 'LandingPageAboutPhoneURL'
					)));
	
			$wp_customize->add_setting('LandingPageAboutPhoneNumber', array('default'=> "1-800-654-3210",
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutPhoneNumber',
					array('label'=> __('About Phone Number', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'settings'=> 'LandingPageAboutPhoneNumber'
					)));
	
			// About Get Appointment Block
	
			$wp_customize->add_setting('LandingPageAboutTitle', array('default'=> "We Are The Best Choice For Your Child",
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutTitle',
					array('label'=> __('About Title', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'settings'=> 'LandingPageAboutTitle'
					)));
	
			$wp_customize->add_setting('LandingPageAboutContent', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
	ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit.',
	'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutContent',
					array('label'=> __('About Para', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'type'=> 'textarea',
						'input_attrs'=> array('class'=> 'my-custom-class',
							'style'=> 'border: 1px solid #999',
							'placeholder'=> __('Enter message...', 'w3layouts'),
						),
					)));
	
			$wp_customize->add_setting('LandingPageAboutListTitle1', array('default'=> "Special Education",
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutListTitle1',
					array('label'=> __('About List Title 1', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'settings'=> 'LandingPageAboutListTitle1'
					)));
	
			$wp_customize->add_setting('LandingPageAboutListTitle2', array('default'=> "Access more then 100K online courses",
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutListTitle2',
					array('label'=> __('About List Title 2', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'settings'=> 'LandingPageAboutListTitle2'
					)));
	
			$wp_customize->add_setting('LandingPageAboutListTitle3', array('default'=> "Traditional Academies",
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutListTitle3',
					array('label'=> __('About List Title 3', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'settings'=> 'LandingPageAboutListTitle3'
					)));
	
			$wp_customize->add_setting('LandingPageAboutBtnURL', array('default'=> "#url",
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutBtnURL',
					array('label'=> __('About Btn URL', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'settings'=> 'LandingPageAboutBtnURL'
					)));
	
			$wp_customize->add_setting('LandingPageAboutBtnText', array('default'=> "Apply Now",
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutBtnText',
					array('label'=> __('About Btn Text', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'settings'=> 'LandingPageAboutBtnText'
					)));
	
	
			// LandingPage About Section top & bottom  textarea
	
			$wp_customize->add_setting('LandingPageAboutTopArea', array('default'=> '',
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutTopArea',
					array('label'=> __('About Top', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'type'=> 'textarea',
						'input_attrs'=> array('class'=> 'my-custom-class',
							'style'=> 'border: 1px solid #999',
							'placeholder'=> __('Enter message...', 'w3layouts'),
						),
					)));
	
			$wp_customize->add_setting('LandingPageAboutBottomArea', array('default'=> '',
					'transport'=> 'refresh',
				));
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,
					'LandingPageAboutBottomArea',
					array('label'=> __('About Bottom', 'w3layouts'),
						'section'=> 'LandingPageAboutSection',
						'type'=> 'textarea',
						'input_attrs'=> array('class'=> 'my-custom-class',
							'style'=> 'border: 1px solid #999',
							'placeholder'=> __('Enter message...', 'w3layouts'),
						),
					)));
	
			// LandingPage About Section top & bottom  textarea
	
			/** LandingPage About Section ends **/
	
	
			/** LandingPage Features section starts **/
	
			$wp_customize->add_setting('LandingPageFeaturesRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageFeaturesRequired',
				array('label'=> __('LandingPage Features Section Required', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeaturesRequired',
					'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('LandingPageFeaturesRequired', array('selector'=> 'div.LandingPageFeatures', // You can also select a css class
			));

		$wp_customize->add_setting('LandingPageFeaturesTitle1', array('default'=> 'Best Features',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeaturesTitle1',
				array('label'=> __('LandingPage Features Title 1', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeaturesTitle1'
				)));

		$wp_customize->add_setting('LandingPageFeaturesTitle2', array('default'=> 'Achieve Your Goals With Edu School',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeaturesTitle2',
				array('label'=> __('LandingPage Features Title 2', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeaturesTitle2'
				)));


		// Feature 1 grid starts
		$wp_customize->add_setting('LandingPageFeature1Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageFeature1Required',
				array('label'=> __('LandingPage Feature 1 Required', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature1Required'
				)));

		$wp_customize->add_setting('LandingPageFeature1Icon', array('default'=> 'fas fa-user-friends',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature1Icon',
				array('label'=> __('LandingPage Feature 1 Icon', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature1Icon'
				)));

		$wp_customize->add_setting('LandingPageFeature1Url', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature1Url',
				array('label'=> __('LandingPage Feature 1 URL', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature1Url'
				)));

		$wp_customize->add_setting('LandingPageFeature1Title', array('default'=> "Expert Teachers",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature1Title',
				array('label'=> __('LandingPage Feature 1 Title', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature1Title',
				)));

		$wp_customize->add_setting('LandingPageFeature1Content', array('default'=> 'Ras effic itur metusga via suscipit consect eturerse adi unde omnis.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature1Content',
				array('label'=> __('LandingPage Feature 1 Content', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// Feature 1 grid ends


		// Feature 2 grid starts
		$wp_customize->add_setting('LandingPageFeature2Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageFeature2Required',
				array('label'=> __('LandingPage Feature 2 Required', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature2Required'
				)));

		$wp_customize->add_setting('LandingPageFeature2Icon', array('default'=> 'fas fa-book-reader',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature2Icon',
				array('label'=> __('LandingPage Feature 2 Icon', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature2Icon'
				)));

		$wp_customize->add_setting('LandingPageFeature2Url', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature2Url',
				array('label'=> __('LandingPage Feature 2 URL', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature2Url'
				)));

		$wp_customize->add_setting('LandingPageFeature2Title', array('default'=> "Quality Education",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature2Title',
				array('label'=> __('LandingPage Feature 2 Title', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature2Title',
				)));

		$wp_customize->add_setting('LandingPageFeature2Content', array('default'=> 'Ras effic itur metusga via suscipit consect eturerse adi unde omnis.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature2Content',
				array('label'=> __('LandingPage Feature 2 Content', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// Feature 2 grid ends


		// Feature 3 grid starts
		$wp_customize->add_setting('LandingPageFeature3Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageFeature3Required',
				array('label'=> __('LandingPage Feature 3 Required', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature3Required'
				)));

		$wp_customize->add_setting('LandingPageFeature3Icon', array('default'=> 'fas fa-user-graduate',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature3Icon',
				array('label'=> __('LandingPage Feature 3 Icon', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature3Icon'
				)));

		$wp_customize->add_setting('LandingPageFeature3Url', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature3Url',
				array('label'=> __('LandingPage Feature 3 URL', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature3Url'
				)));

		$wp_customize->add_setting('LandingPageFeature3Title', array('default'=> "Life Time Support",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature3Title',
				array('label'=> __('LandingPage Feature 3 Title', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature3Title',
				)));

		$wp_customize->add_setting('LandingPageFeature3Content', array('default'=> 'Ras effic itur metusga via suscipit consect eturerse adi unde omnis.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature3Content',
				array('label'=> __('LandingPage Feature 3 Content', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));
		// Feature 3 grid ends


		// Feature 4 grid starts
		$wp_customize->add_setting('LandingPageFeature4Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageFeature4Required',
				array('label'=> __('LandingPage Feature 4 Required', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature4Required'
				)));

		$wp_customize->add_setting('LandingPageFeature4Icon', array('default'=> 'fas fa-university',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature4Icon',
				array('label'=> __('LandingPage Feature 4 Icon', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature4Icon'
				)));

		$wp_customize->add_setting('LandingPageFeature4Url', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature4Url',
				array('label'=> __('LandingPage Feature 4 URL', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature4Url'
				)));

		$wp_customize->add_setting('LandingPageFeature4Title', array('default'=> "Best Scholarships",
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature4Title',
				array('label'=> __('LandingPage Feature 4 Title', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'settings'=> 'LandingPageFeature4Title',
				)));

		$wp_customize->add_setting('LandingPageFeature4Content', array('default'=> 'Ras effic itur metusga via suscipit consect eturerse adi unde omnis.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeature4Content',
				array('label'=> __('LandingPage Feature 4 Content', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));
		// Feature 4 grid ends


		// LandingPage Features top & bottom area textarea

		$wp_customize->add_setting('LandingPageFeaturesTopArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeaturesTopArea',
				array('label'=> __('LandingPage Features Top', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('LandingPageFeaturesBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'LandingPageFeaturesBottomArea',
				array('label'=> __('LandingPage Features Bottom', 'w3layouts'),
					'section'=> 'LandingPageFeaturesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));
		// LandingPage Features top & bottom area textarea

		/** LandingPage Features section ends **/





        /** LandingPage Team starts **/

        $wp_customize->add_setting('LandingPageTeamRequired',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeamRequired',
						array('label'=> __('LandingPage Team Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeamRequired',
								'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('LandingPageTeamRequired', array('selector'=> 'div.LandingPageTeam', // You can also select a css class
				));

		$wp_customize->add_setting('LandingPageTeamTitle1', array('default'=> 'Our Team',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeamTitle1',
						array('label'=> __('Team Section Title 1', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeamTitle1'
						)));

		$wp_customize->add_setting('LandingPageTeamTitle2', array('default'=> 'Meet our Teachers',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeamTitle2',
						array('label'=> __('Team Section Title 2', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeamTitle2'
						)));

		// Team 1
		$wp_customize->add_setting('LandingPageTeam1Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam1Required',
						array('label'=> __('Team1 Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam1Required'
						)));

		$wp_customize->add_setting('LandingPageTeam1Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTeam1Image',
						array('label'=> __('Team1 image'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageTeamSection',
								'flex_width'=> false, // Optional. Default: false
								'flex_height'=> true, // Optional. Default: false
								'width'=> 444, // Optional. Default: 150
								'height'=> 563, // Optional. Default: 150
								'button_labels'=> array( // Optional.
										'select'=> __('Select Image'),
										'change'=> __('Change Image'),
										'remove'=> __('Remove'),
										'default'=> __('Default'),
										'placeholder'=> __('No image selected'),
										'frame_title'=> __('Select Image'),
										'frame_button'=> __('Choose Image'),
								))));

		$wp_customize->add_setting('LandingPageTeam1Title', array('default'=> 'Emma Watson',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam1Title',
						array('label'=> __('Team1 Name', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam1Title'
						)));

		$wp_customize->add_setting('LandingPageTeam1SocialFacebook',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam1SocialFacebook',
						array('label'=> __('Team1 Facebook Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam1SocialFacebook'
						)));

		$wp_customize->add_setting('LandingPageTeam1SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
						'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam1SocialFacebookURL',
						array('label'=> __('Team1 FaceBook URL', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam1SocialFacebookURL'
						)));

		$wp_customize->add_setting('LandingPageTeam1SocialTwitter',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam1SocialTwitter',
						array('label'=> __('Team1 Twitter Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam1SocialTwitter'
						)));

		$wp_customize->add_setting('LandingPageTeam1SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
						'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam1SocialTwitterURL',
						array('label'=> __('Team1 Twitter URL', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam1SocialTwitterURL'
						)));

		$wp_customize->add_setting('LandingPageTeam1SocialGoogle',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam1SocialGoogle',
						array('label'=> __('Team1 Google Plus Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam1SocialGoogle'
						)));

		$wp_customize->add_setting('LandingPageTeam1SocialGoogleURL', array('default'=> 'https://w3layouts.com/',
						'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam1SocialGoogleURL',
						array('label'=> __('Team1 Google Plus URL', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam1SocialGoogleURL'
						)));
		// Team 1


		// Team 2
		$wp_customize->add_setting('LandingPageTeam2Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam2Required',
						array('label'=> __('Team2 Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam2Required'
						)));

		$wp_customize->add_setting('LandingPageTeam2Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTeam2Image',
						array('label'=> __('Team2 image'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageTeamSection',
								'flex_width'=> false, // Optional. Default: false
								'flex_height'=> true, // Optional. Default: false
								'width'=> 444, // Optional. Default: 150
								'height'=> 563, // Optional. Default: 150
								'button_labels'=> array( // Optional.
										'select'=> __('Select Image'),
										'change'=> __('Change Image'),
										'remove'=> __('Remove'),
										'default'=> __('Default'),
										'placeholder'=> __('No image selected'),
										'frame_title'=> __('Select Image'),
										'frame_button'=> __('Choose Image'),
								))));

		$wp_customize->add_setting('LandingPageTeam2Title', array('default'=> 'Enrique Lal',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam2Title',
						array('label'=> __('Team2 Name', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam2Title'
						)));
						
		$wp_customize->add_setting('LandingPageTeam2SocialFacebook',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam2SocialFacebook',
						array('label'=> __('Team2 Facebook Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam2SocialFacebook'
						)));

		$wp_customize->add_setting('LandingPageTeam2SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
						'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam2SocialFacebookURL',
						array('label'=> __('Team2 FaceBook URL', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam2SocialFacebookURL'
						)));

		$wp_customize->add_setting('LandingPageTeam2SocialTwitter',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam2SocialTwitter',
						array('label'=> __('Team2 Twitter Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam2SocialTwitter'
						)));

		$wp_customize->add_setting('LandingPageTeam2SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
						'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam2SocialTwitterURL',
						array('label'=> __('Team2 Twitter URL', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam2SocialTwitterURL'
						)));

		$wp_customize->add_setting('LandingPageTeam2SocialGoogle',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam2SocialGoogle',
						array('label'=> __('Team2 Google Plus Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam2SocialGoogle'
						)));

		$wp_customize->add_setting('LandingPageTeam2SocialGoogleURL', array('default'=> 'https://w3layouts.com/',
						'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam2SocialGoogleURL',
						array('label'=> __('Team2 Google Plus URL', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam2SocialGoogleURL'
						)));
		// Team 2


		// Team 3
		$wp_customize->add_setting('LandingPageTeam3Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam3Required',
						array('label'=> __('Team3 Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam3Required'
						)));

		$wp_customize->add_setting('LandingPageTeam3Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTeam3Image',
						array('label'=> __('Team3 image'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageTeamSection',
								'flex_width'=> false, // Optional. Default: false
								'flex_height'=> true, // Optional. Default: false
								'width'=> 444, // Optional. Default: 150
								'height'=> 563, // Optional. Default: 150
								'button_labels'=> array( // Optional.
										'select'=> __('Select Image'),
										'change'=> __('Change Image'),
										'remove'=> __('Remove'),
										'default'=> __('Default'),
										'placeholder'=> __('No image selected'),
										'frame_title'=> __('Select Image'),
										'frame_button'=> __('Choose Image'),
								))));

		$wp_customize->add_setting('LandingPageTeam3Title', array('default'=> 'Smith Ker',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam3Title',
						array('label'=> __('Team3 Name', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam3Title'
						)));
						
		$wp_customize->add_setting('LandingPageTeam3SocialFacebook',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam3SocialFacebook',
						array('label'=> __('Team3 Facebook Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam3SocialFacebook'
						)));

		$wp_customize->add_setting('LandingPageTeam3SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
						'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam3SocialFacebookURL',
						array('label'=> __('Team3 FaceBook URL', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam3SocialFacebookURL'
						)));

		$wp_customize->add_setting('LandingPageTeam3SocialTwitter',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam3SocialTwitter',
						array('label'=> __('Team3 Twitter Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam3SocialTwitter'
						)));

		$wp_customize->add_setting('LandingPageTeam3SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
						'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam3SocialTwitterURL',
						array('label'=> __('Team3 Twitter URL', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam3SocialTwitterURL'
						)));

		$wp_customize->add_setting('LandingPageTeam3SocialGoogle',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam3SocialGoogle',
						array('label'=> __('Team3 Google Plus Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam3SocialGoogle'
						)));

		$wp_customize->add_setting('LandingPageTeam3SocialGoogleURL', array('default'=> 'https://w3layouts.com/',
						'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam3SocialGoogleURL',
						array('label'=> __('Team3 Google Plus URL', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam3SocialGoogleURL'
						)));
		// Team3


		// Team4
		$wp_customize->add_setting('LandingPageTeam4Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam4Required',
						array('label'=> __('Team4 Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam4Required'
						)));

		$wp_customize->add_setting('LandingPageTeam4Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTeam4Image',
						array('label'=> __('Team4 image'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageTeamSection',
								'flex_width'=> false, // Optional. Default: false
								'flex_height'=> true, // Optional. Default: false
								'width'=> 444, // Optional. Default: 150
								'height'=> 563, // Optional. Default: 150
								'button_labels'=> array( // Optional.
										'select'=> __('Select Image'),
										'change'=> __('Change Image'),
										'remove'=> __('Remove'),
										'default'=> __('Default'),
										'placeholder'=> __('No image selected'),
										'frame_title'=> __('Select Image'),
										'frame_button'=> __('Choose Image'),
								))));

		$wp_customize->add_setting('LandingPageTeam4Title', array('default'=> 'Forkler Lee',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam4Title',
						array('label'=> __('Team4 Name', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam4Title'
						)));
						
		$wp_customize->add_setting('LandingPageTeam4SocialFacebook',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam4SocialFacebook',
						array('label'=> __('Team4 Facebook Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam4SocialFacebook'
						)));

		$wp_customize->add_setting('LandingPageTeam4SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
						'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam4SocialFacebookURL',
						array('label'=> __('Team4 FaceBook URL', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam4SocialFacebookURL'
						)));

		$wp_customize->add_setting('LandingPageTeam4SocialTwitter',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam4SocialTwitter',
						array('label'=> __('Team4 Twitter Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam4SocialTwitter'
						)));

		$wp_customize->add_setting('LandingPageTeam4SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
						'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam4SocialTwitterURL',
						array('label'=> __('Team4 Twitter URL', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam4SocialTwitterURL'
						)));

		$wp_customize->add_setting('LandingPageTeam4SocialGoogle',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam4SocialGoogle',
						array('label'=> __('Team4 Google Plus Required', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam4SocialGoogle'
						)));

		$wp_customize->add_setting('LandingPageTeam4SocialGoogleURL', array('default'=> 'https://w3layouts.com/',
						'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeam4SocialGoogleURL',
						array('label'=> __('Team4 Google Plus URL', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'settings'=> 'LandingPageTeam4SocialGoogleURL'
						)));
		// Team4

		// LandingPage Team top & bottom  area textarea

		$wp_customize->add_setting('LandingPageTeamTopArea', array('default'=> '',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeamTopArea',
						array('label'=> __('Team Top', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'type'=> 'textarea',
								'input_attrs'=> array('class'=> 'my-custom-class',
										'style'=> 'border: 1px solid #999',
										'placeholder'=> __('Enter message...', 'w3layouts'),
								),
						)));

		$wp_customize->add_setting('LandingPageTeamBottomArea', array('default'=> '',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTeamBottomArea',
						array('label'=> __('Team Bottom', 'w3layouts'),
								'section'=> 'LandingPageTeamSection',
								'type'=> 'textarea',
								'input_attrs'=> array('class'=> 'my-custom-class',
										'style'=> 'border: 1px solid #999',
										'placeholder'=> __('Enter message...', 'w3layouts'),
								),
						)));
		// LandingPage Team top & bottom  area textarea

		/** LandingPage Team ends **/




        /** LandingPage stats section starts **/

        $wp_customize->add_setting('LandingPageStatsRequired',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageStatsRequired',
						array('label'=> __('LandingPage Stats Section Required', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStatsRequired',
								'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('LandingPageStatsRequired', array('selector'=> 'div.LandingPageStats', // You can also select a css class
				));

		$wp_customize->add_setting('LandingPageStatsMainTitle1', array('default'=> "Our Statistics",
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageStatsMainTitle1',
						array('label'=> __('Stats Main Title 1', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStatsMainTitle1'
						)));

		$wp_customize->add_setting('LandingPageStatsMainTitle2', array('default'=> "We are Proud to Share with You",
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageStatsMainTitle2',
						array('label'=> __('Stats Main Title 2', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStatsMainTitle2'
						)));

		// stats grid 1
		$wp_customize->add_setting('LandingPageStatsGrid1Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageStatsGrid1Required',
						array('label'=> __('LandingPage Stats1 Required', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStatsGrid1Required'
						)));

		$wp_customize->add_setting('LandingPageStats1Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageStats1Image',
						array('label'=> __('LandingPage Stats1 Icon'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageStatsSection',
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

		$wp_customize->add_setting('LandingPageStats1Number', array('default'=> "36076",
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageStats1Number',
						array('label'=> __('Stats1 Number', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStats1Number'
						)));

		$wp_customize->add_setting('LandingPageStats1Title', array('default'=> "Students Enrolled",
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageStats1Title',
						array('label'=> __('Stats1 Title', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStats1Title'
						)));
		// stats grid 1


		// stats grid 2
		$wp_customize->add_setting('LandingPageStatsGrid2Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageStatsGrid2Required',
						array('label'=> __('LandingPage Stats2 Required', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStatsGrid2Required'
						)));

		$wp_customize->add_setting('LandingPageStats2Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageStats2Image',
						array('label'=> __('LandingPage Stats2 Icon'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageStatsSection',
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

		$wp_customize->add_setting('LandingPageStats2Number', array('default'=> "786",
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageStats2Number',
						array('label'=> __('Stats2 Number', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStats2Number'
						)));

		$wp_customize->add_setting('LandingPageStats2Title', array('default'=> "Our Branches",
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageStats2Title',
						array('label'=> __('Stats2 Title', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStats2Title'
						)));

		// stats grid 2


		// stats grid 3
		$wp_customize->add_setting('LandingPageStatsGrid3Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageStatsGrid3Required',
						array('label'=> __('LandingPage Stats3 Required', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStatsGrid3Required'
						)));

		$wp_customize->add_setting('LandingPageStats3Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageStats3Image',
						array('label'=> __('LandingPage Stats3 Icon'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageStatsSection',
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

		$wp_customize->add_setting('LandingPageStats3Number', array('default'=> "3630",
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageStats3Number',
						array('label'=> __('Stats3 Number', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStats3Number'
						)));

		$wp_customize->add_setting('LandingPageStats3Title', array('default'=> "Total Courses",
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageStats3Title',
						array('label'=> __('Stats3 Title', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStats3Title'
						)));

		// stats grid 3


		// stats grid 4
		$wp_customize->add_setting('LandingPageStatsGrid4Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageStatsGrid4Required',
						array('label'=> __('LandingPage Stats4 Required', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStatsGrid4Required'
						)));

		$wp_customize->add_setting('LandingPageStats4Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageStats4Image',
						array('label'=> __('LandingPage Stats4 Icon'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageStatsSection',
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

		$wp_customize->add_setting('LandingPageStats4Number', array('default'=> "6300",
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageStats4Number',
						array('label'=> __('Stats4 Number', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStats4Number'
						)));

		$wp_customize->add_setting('LandingPageStats4Title', array('default'=> "Awards Won",
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageStats4Title',
						array('label'=> __('Stats4 Title', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'settings'=> 'LandingPageStats4Title'
						)));

		// stats grid 4


		// LandingPage stats Section top & bottom  textarea

		$wp_customize->add_setting('LandingPageStatsTopArea', array('default'=> '',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageStatsTopArea',
						array('label'=> __('Stats Top', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'type'=> 'textarea',
								'input_attrs'=> array('class'=> 'my-custom-class',
										'style'=> 'border: 1px solid #999',
										'placeholder'=> __('Enter message...', 'w3layouts'),
								),
						)));

		$wp_customize->add_setting('LandingPageStatsBottomArea', array('default'=> '',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageStatsBottomArea',
						array('label'=> __('Stats Bottom', 'w3layouts'),
								'section'=> 'LandingPageStatsSection',
								'type'=> 'textarea',
								'input_attrs'=> array('class'=> 'my-custom-class',
										'style'=> 'border: 1px solid #999',
										'placeholder'=> __('Enter message...', 'w3layouts'),
								),
						)));

		// LandingPage stats Section top & bottom  textarea

		/** LandingPage Stats Section ends **/





		/** LandingPage Testimonials starts **/

		$wp_customize->add_setting('LandingPageTestimonialsRequired',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTestimonialsRequired',
						array('label'=> __('LandingPage Testimonials Required', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'settings'=> 'LandingPageTestimonialsRequired',
								'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('LandingPageTestimonialsRequired', array('selector'=> 'div.LandingPageTestimonials', // You can also select a css class
				));

		$wp_customize->add_setting('LandingPageTestimonialsBgImage',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTestimonialsBgImage',
						array('label'=> __('Testimonials Bg Image'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageTestimonialsSection',
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
		$wp_customize->add_setting('LandingPageTestimonial1Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTestimonial1Required',
						array('label'=> __('Testimonial 1 Required', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'settings'=> 'LandingPageTestimonial1Required'
						)));

		$wp_customize->add_setting('LandingPageTestimonialsClient1Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTestimonialsClient1Image',
						array('label'=> __('Client 1 Image'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageTestimonialsSection',
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

		$wp_customize->add_setting('LandingPageTestimonialsMessage1', array('default'=> 'Duis aute irure dolor in reprehenderit in voluptate
velit esse cillum dolore eu. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTestimonialsMessage1',
						array('label'=> __('Client 1 Message', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'type'=> 'textarea',
								'input_attrs'=> array('class'=> 'my-custom-class',
										'style'=> 'border: 1px solid #999',
										'placeholder'=> __('Enter message...', 'w3layouts'),
								),
						)));

		$wp_customize->add_setting('LandingPageTestimonialsClient1Name', array('default'=> 'Mario Spe',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTestimonialsClient1Name',
						array('label'=> __('Client 1 Name', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'settings'=> 'LandingPageTestimonialsClient1Name'
						)));
		// client 1

		// client 2
		$wp_customize->add_setting('LandingPageTestimonial2Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTestimonial2Required',
						array('label'=> __('Testimonial 2 Required', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'settings'=> 'LandingPageTestimonial2Required'
						)));

		$wp_customize->add_setting('LandingPageTestimonialsClient2Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTestimonialsClient2Image',
						array('label'=> __('Client 2 Image'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageTestimonialsSection',
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

		$wp_customize->add_setting('LandingPageTestimonialsMessage2', array('default'=> 'Sed ut perspiciatis unde omnis iste natus error sit
voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.',
'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTestimonialsMessage2',
						array('label'=> __('Client 2 Message', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'type'=> 'textarea',
								'input_attrs'=> array('class'=> 'my-custom-class',
										'style'=> 'border: 1px solid #999',
										'placeholder'=> __('Enter message...', 'w3layouts'),
								),
						)));

		$wp_customize->add_setting('LandingPageTestimonialsClient2Name', array('default'=> 'Petey Cru',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTestimonialsClient2Name',
						array('label'=> __('Client 2 Name', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'settings'=> 'LandingPageTestimonialsClient2Name'
						)));

		// client 2

		// client 3
		$wp_customize->add_setting('LandingPageTestimonial3Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTestimonial3Required',
						array('label'=> __('Testimonial 3 Required', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'settings'=> 'LandingPageTestimonial3Required'
						)));

		$wp_customize->add_setting('LandingPageTestimonialsClient3Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTestimonialsClient3Image',
						array('label'=> __('Client 3 Image'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageTestimonialsSection',
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

		$wp_customize->add_setting('LandingPageTestimonialsMessage3', array('default'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing
elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTestimonialsMessage3',
						array('label'=> __('Client 3 Message', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'type'=> 'textarea',
								'input_attrs'=> array('class'=> 'my-custom-class',
										'style'=> 'border: 1px solid #999',
										'placeholder'=> __('Enter message...', 'w3layouts'),
								),
						)));

		$wp_customize->add_setting('LandingPageTestimonialsClient3Name', array('default'=> 'Anna Sth',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTestimonialsClient3Name',
						array('label'=> __('Client 3 Name', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'settings'=> 'LandingPageTestimonialsClient3Name'
						)));

		// client 3

		// client 4
		$wp_customize->add_setting('LandingPageTestimonial4Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTestimonial4Required',
						array('label'=> __('Testimonial 4 Required', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'settings'=> 'LandingPageTestimonial4Required'
						)));

		$wp_customize->add_setting('LandingPageTestimonialsClient4Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTestimonialsClient4Image',
						array('label'=> __('Client 4 Image'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageTestimonialsSection',
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

		$wp_customize->add_setting('LandingPageTestimonialsMessage4', array('default'=> 'Duis aute irure dolor in reprehenderit in voluptate
velit esse cillum dolore eu. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTestimonialsMessage4',
						array('label'=> __('Client 4 Message', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'type'=> 'textarea',
								'input_attrs'=> array('class'=> 'my-custom-class',
										'style'=> 'border: 1px solid #999',
										'placeholder'=> __('Enter message...', 'w3layouts'),
								),
						)));

		$wp_customize->add_setting('LandingPageTestimonialsClient4Name', array('default'=> 'Gail For',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTestimonialsClient4Name',
						array('label'=> __('Client 4 Name', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'settings'=> 'LandingPageTestimonialsClient4Name'
						)));
		// client 4

		// client 5
		$wp_customize->add_setting('LandingPageTestimonial5Required',
				array('default'=> 1,
						'transport'=> 'refresh',
						'sanitize_callback'=> 'skyrocket_switch_sanitization'
				));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTestimonial5Required',
						array('label'=> __('Testimonial 5 Required', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'settings'=> 'LandingPageTestimonial5Required'
						)));

		$wp_customize->add_setting('LandingPageTestimonialsClient5Image',
				array('default'=> '',
						'transport'=> 'refresh',
						'sanitize_callback'=> 'absint'
				));
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTestimonialsClient5Image',
						array('label'=> __('Client 5 Image'),
								'description'=> esc_html__(''),
								'section'=> 'LandingPageTestimonialsSection',
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

		$wp_customize->add_setting('LandingPageTestimonialsMessage5', array('default'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing
elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTestimonialsMessage5',
						array('label'=> __('Client 5 Message', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'type'=> 'textarea',
								'input_attrs'=> array('class'=> 'my-custom-class',
										'style'=> 'border: 1px solid #999',
										'placeholder'=> __('Enter message...', 'w3layouts'),
								),
						)));

		$wp_customize->add_setting('LandingPageTestimonialsClient5Name', array('default'=> 'Boye Fra',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTestimonialsClient5Name',
						array('label'=> __('Client 5 Name', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'settings'=> 'LandingPageTestimonialsClient5Name'
						)));
		// client 5

		// LandingPage Testimonials top & bottom  area textarea

		$wp_customize->add_setting('LandingPageTestimonialsTopArea', array('default'=> '',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTestimonialsTopArea',
						array('label'=> __('Testimonials Top', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'type'=> 'textarea',
								'input_attrs'=> array('class'=> 'my-custom-class',
										'style'=> 'border: 1px solid #999',
										'placeholder'=> __('Enter message...', 'w3layouts'),
								),
						)));

		$wp_customize->add_setting('LandingPageTestimonialsBottomArea', array('default'=> '',
						'transport'=> 'refresh',
				));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'LandingPageTestimonialsBottomArea',
						array('label'=> __('Testimonials Bottom', 'w3layouts'),
								'section'=> 'LandingPageTestimonialsSection',
								'type'=> 'textarea',
								'input_attrs'=> array('class'=> 'my-custom-class',
										'style'=> 'border: 1px solid #999',
										'placeholder'=> __('Enter message...', 'w3layouts'),
								),
						)));
		// LandingPage Testimonials top & bottom  area textarea

		/** LandingPage Testimonials ends **/



		/** LandingPage Blog section starts **/

		$wp_customize->add_setting('LandingPageBlogGridsRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageBlogGridsRequired',
			array('label'=> __('LandingPage Blog Grids Required', 'w3layouts'),
				'section'=> 'LandingPageBlogGridsSection',
				'settings'=> 'LandingPageBlogGridsRequired',
				'priority'=> 1)));
	$wp_customize->selective_refresh->add_partial('LandingPageBlogGridsRequired', array('selector'=> 'div.LandingPageBlog', // You can also select a css class
		));

	$wp_customize->add_setting('LandingPageBlogGridsTitle1', array('default'=> "Our News",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageBlogGridsTitle1',
			array('label'=> __('LandingPage Blog Grids Title 1', 'w3layouts'),
				'section'=> 'LandingPageBlogGridsSection',
				'settings'=> 'LandingPageBlogGridsTitle1',
			)));

	$wp_customize->add_setting('LandingPageBlogGridsTitle2', array('default'=> "Latest Blog Posts",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageBlogGridsTitle2',
			array('label'=> __('LandingPage Blog Grids Title 2', 'w3layouts'),
				'section'=> 'LandingPageBlogGridsSection',
				'settings'=> 'LandingPageBlogGridsTitle2',
			)));

	$wp_customize->add_setting('LandingPageBlogAuthorRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageBlogAuthorRequired',
			array('label'=> __('LandingPage Blog Author Required', 'w3layouts'),
				'section'=> 'LandingPageBlogGridsSection',
				'settings'=> 'LandingPageBlogAuthorRequired'
			)));

	$wp_customize->add_setting('LandingPageBlogDateRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageBlogDateRequired',
			array('label'=> __('LandingPage Blog Date Required', 'w3layouts'),
				'section'=> 'LandingPageBlogGridsSection',
				'settings'=> 'LandingPageBlogDateRequired'
			)));

	// LandingPage Blog section top & bottom  textarea

	$wp_customize->add_setting('LandingPageBlogTopArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageBlogTopArea',
			array('label'=> __('Blog Grids Top', 'w3layouts'),
				'section'=> 'LandingPageBlogGridsSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	$wp_customize->add_setting('LandingPageBlogBottomArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageBlogBottomArea',
			array('label'=> __('Blog Grids Bottom', 'w3layouts'),
				'section'=> 'LandingPageBlogGridsSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	// LandingPage Blog section top & bottom  textarea

	/** LandingPage Blog section ends **/




    /** Contact page full section starts **/

    $wp_customize->add_setting('LandingPageContactRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactRequired',
			array('label'=> __('Contact Section required', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LandingPageContactRequired',
				'priority'=> 1)));
	$wp_customize->selective_refresh->add_partial('LandingPageContactRequired', array('selector'=> 'div.LPContactSection', // You can also select a css class
		));

	$wp_customize->add_setting('LPContactTitle1', array('default'=> 'Get In Touch',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactTitle1',
			array('label'=> __('Contact section Titlle1', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactTitle1',
			)));

	$wp_customize->add_setting('LPContactTitle2', array('default'=> 'Contact Us',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactTitle2',
			array('label'=> __('Contact section Titlle2', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactTitle2',
			)));

	/** Contactpage Form Required **/

	$wp_customize->add_setting('LandingPageContactFormRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactFormRequired',
			array('label'=> __('Contactpage Form Required', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'settings'=> 'LandingPageContactFormRequired'
			)));
	$wp_customize->selective_refresh->add_partial('LandingPageContactFormRequired', array('selector'=> 'div.LandingPageContactForm', // You can also select a css class
		));

	$wp_customize->add_setting('LPContactToEmail', array('default'=> 'contact@email-me.com',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactToEmail',
			array('label'=> __('Contact email address', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'description'=> __('Who should receive email when contact form submitted Eg: contact@email-me.com'),
				'settings'=> 'LPContactToEmail'
			)));


	// $wp_customize->add_setting('LandingPageContactFormURL', array('default'=> 'https://app.hoverforms.com/SubmitForm/w3layouts',
	//     'transport'=> 'refresh', ));
	// $wp_customize->add_control(new WP_Customize_Control($wp_customize,
	//     'LandingPageContactFormURL',
	//     array('label'=> __('Form Action URL', 'w3layouts'),
	//       'section'=> 'LandingPageContactForm',
	//       'settings'=> 'LandingPageContactFormURL',
	//     )));

	$wp_customize->add_setting('LandingPageContactFormName', array('default'=> 'w3lName',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactFormName',
			array('label'=> __('Name field Name', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'settings'=> 'LandingPageContactFormName',
			)));

	$wp_customize->add_setting('LandingPageContactFormNameplaceholder', array('default'=> 'Your Name',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactFormNameplaceholder',
			array('label'=> __('Name field Placeholder', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'settings'=> 'LandingPageContactFormNameplaceholder',
			)));

	$wp_customize->add_setting('LandingPageContactFormEmail', array('default'=> 'w3lSender',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactFormEmail',
			array('label'=> __('Email field Name', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'settings'=> 'LandingPageContactFormEmail',
			)));

	$wp_customize->add_setting('LandingPageContactFormEmailplaceholder', array('default'=> 'Your Email',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactFormEmailplaceholder',
			array('label'=> __('Email field Placeholder', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'settings'=> 'LandingPageContactFormEmailplaceholder',
			)));

	$wp_customize->add_setting('LandingPageContactFormSubject', array('default'=> 'w3lSubject',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactFormSubject',
			array('label'=> __('Subject field Name', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'settings'=> 'LandingPageContactFormSubject',
			)));

	$wp_customize->add_setting('LandingPageContactFormSubjectplaceholder', array('default'=> 'Subject',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactFormSubjectplaceholder',
			array('label'=> __('Subject field Placeholder', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'settings'=> 'LandingPageContactFormSubjectplaceholder',
			)));

	$wp_customize->add_setting('LandingPageContactFormWebsite', array('default'=> 'w3lWebsite',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactFormWebsite',
			array('label'=> __('Website field Name', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'settings'=> 'LandingPageContactFormWebsite',
			)));

	$wp_customize->add_setting('LandingPageContactFormWebsiteplaceholder', array('default'=> 'Website',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactFormWebsiteplaceholder',
			array('label'=> __('Website field Placeholder', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'settings'=> 'LandingPageContactFormWebsiteplaceholder',
			)));

	$wp_customize->add_setting('LandingPageContactFormMessage', array('default'=> 'w3lMessage',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactFormMessage',
			array('label'=> __('Message field Name', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'settings'=> 'LandingPageContactFormMessage',
			)));

	$wp_customize->add_setting('LandingPageContactFormMessageplaceholder', array('default'=> 'Type your message here',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactFormMessageplaceholder',
			array('label'=> __('Message field Placeholder', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'settings'=> 'LandingPageContactFormMessageplaceholder',
			)));

	$wp_customize->add_setting('LandingPageContactFormBtn', array('default'=> 'Send Message',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactFormBtn',
			array('label'=> __('Button Text', 'w3layouts'),
				'section'=> 'LandingPageContactForm',
				'settings'=> 'LandingPageContactFormBtn',
			)));

	/** Contactpage Form Required **/

	/** Contactpage Details Required **/

	$wp_customize->add_setting('LPContactDetailsRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LPContactDetailsRequired',
			array('label'=> __('Contact Details Required', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactDetailsRequired'
			)));

	$wp_customize->add_setting('LandingPageContactAddressRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactAddressRequired',
			array('label'=> __('Contact Address required', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LandingPageContactAddressRequired'
			)));

	$wp_customize->add_setting('LPContactAddressIcon', array('default'=> 'fas fa-building',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactAddressIcon',
			array('label'=> __('Contact Address Icon', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactAddressIcon',
			)));

	$wp_customize->add_setting('LPContactAddressTitle', array('default'=> "Company Address",
			'transport'=> 'refresh',
		));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactAddressTitle',
			array('label'=> __('Contact Address Title', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactAddressTitle'
			)));

	$wp_customize->add_setting('LPContactAddress', array('default'=> 'Edu School, 10001, 5th Avenue, 12202 street, London.',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactAddress',
			array('label'=> __('Contact Address', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	$wp_customize->add_setting('LandingPageContactNumberRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));

	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactNumberRequired',
			array('label'=> __('Contact Number required', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LandingPageContactNumberRequired'
			)));

	$wp_customize->add_setting('LPContactPhoneIcon', array('default'=> 'fas fa-phone-alt',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactPhoneIcon',
			array('label'=> __('Contact Phone Number Icon', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactPhoneIcon'
			)));

	$wp_customize->add_setting('LPContactNumberTitle', array('default'=> 'Call Us',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactNumberTitle',
			array('label'=> __('Contact Phone Number Title', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactNumberTitle'
			)));

	$wp_customize->add_setting('LPContactNumber', array('default'=> '+1(21) 234 4567',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactNumber',
			array('label'=> __('Contact Phone Number', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactNumber'
			)));

	$wp_customize->add_setting('LPContactNumberUrl', array('default'=> 'tel:+1(21) 112 7368',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactNumberUrl',
			array('label'=> __('Contact Phone Number URL', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactNumberUrl'
			)));

	$wp_customize->add_setting('LandingPageContactOfficialRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactOfficialRequired',
			array('label'=> __('Official Mail required', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LandingPageContactOfficialRequired'
			)));

	$wp_customize->add_setting('LPContactMailIcon', array('default'=> 'fas fa-envelope-open-text',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactMailIcon',
			array('label'=> __('Contact Mail Icon', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactMailIcon'
			)));

	$wp_customize->add_setting('LPContactMailTitle', array('default'=> 'Email Us',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactMailTitle',
			array('label'=> __('Contact Mail Title', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactMailTitle'
			)));

	$wp_customize->add_setting('LPContactOfficialMailtxt', array('default'=> 'example@mail.com',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactOfficialMailtxt',
			array('label'=> __('Contact Mail ID', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactOfficialMailtxt'
			)));

	$wp_customize->add_setting('LPContactOfficialMailUrl', array('default'=> 'example@mail.com',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactOfficialMailUrl',
			array('label'=> __('Contact Mail ID URL', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactOfficialMailUrl'
			)));


	$wp_customize->add_setting('LandingPageContactSupportRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactSupportRequired',
			array('label'=> __('Support Mail required', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LandingPageContactSupportRequired'
			)));

	$wp_customize->add_setting('LPContactMailIcon', array('default'=> 'fas fa-envelope-open-text',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactMailIcon',
			array('label'=> __('Contact Mail Icon', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactMailIcon'
			)));

	$wp_customize->add_setting('LPContactSupportTitle', array('default'=> 'Customer Support',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactSupportTitle',
			array('label'=> __('Contact Support Title', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactSupportTitle'
			)));

	$wp_customize->add_setting('LPContactSupportMailtxt', array('default'=> 'info@support.com',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactSupportMailtxt',
			array('label'=> __('Suppport MailID', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactSupportMailtxt'
			)));

	$wp_customize->add_setting('LPContactSupportMailUrl', array('default'=> 'info@support.com',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LPContactSupportMailUrl',
			array('label'=> __('Suppport MailID URL', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'settings'=> 'LPContactSupportMailUrl'
			)));


	// Contact Page top & bottom  textarea

	$wp_customize->add_setting('LandingPageContactTopArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactTopArea',
			array('label'=> __('Contact Top', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	$wp_customize->add_setting('LandingPageContactBottomArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactBottomArea',
			array('label'=> __('Contact Bottom', 'w3layouts'),
				'section'=> 'LandingPageContactSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	// Contact Page top & bottom  textarea

	/** Contact page full section ends **/



	/** Contact page Map starts **/

	$wp_customize->add_setting('LandingPageContactMapRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactMapRequired',
			array('label'=> __('Contact Map required', 'w3layouts'),
				'section'=> 'LandingPageContactMap',
				'settings'=> 'LandingPageContactMapRequired'
			)));
	$wp_customize->selective_refresh->add_partial('LandingPageContactMapRequired', array('selector'=> 'div.LandingPageContactMap', // You can also select a css class
		));

	$wp_customize->add_setting('LandingPageContactMapURL', array('default'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl',
			'transport'=> 'refresh', ));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactMapURL',
			array('label'=> __('Map URL', 'w3layouts'),
				'section'=> 'LandingPageContactMap',
				'settings'=> 'LandingPageContactMapURL',
			)));

	// Contact Page Map top & bottom  textarea

	$wp_customize->add_setting('LandingPageContactMapTopArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactMapTopArea',
			array('label'=> __('ContactMap Top', 'w3layouts'),
				'section'=> 'LandingPageContactMap',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	$wp_customize->add_setting('LandingPageContactMapBottomArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageContactMapBottomArea',
			array('label'=> __('ContactMap Bottom', 'w3layouts'),
				'section'=> 'LandingPageContactMap',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	// Contact Page Map top & bottom  textarea

	/** Contact page Map ends **/






		/** LandingPage Join Number section starts **/

		$wp_customize->add_setting('LandingPageJoinNumberRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageJoinNumberRequired',
			array('label'=> __('LandingPage Join Number Section Required', 'w3layouts'),
				'section'=> 'LandingPageJoinNumberSection',
				'settings'=> 'LandingPageJoinNumberRequired',
				'priority'=> 1)));
	$wp_customize->selective_refresh->add_partial('LandingPageJoinNumberRequired', array('selector'=> 'div.LandingPageJoinNumber', // You can also select a css class
		));

	$wp_customize->add_setting('LandingPageJoinNumberTitle', array('default'=> "Call To Enroll Your Child",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageJoinNumberTitle',
			array('label'=> __('LandingPage Join Number Title', 'w3layouts'),
				'section'=> 'LandingPageJoinNumberSection',
				'settings'=> 'LandingPageJoinNumberTitle',
			)));

	$wp_customize->add_setting('LandingPageJoinNumberContent', array('default'=> 'Begin the change today!',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageJoinNumberContent',
			array('label'=> __('LandingPage Join Number Content', 'w3layouts'),
				'section'=> 'LandingPageJoinNumberSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	$wp_customize->add_setting('LandingPageJoinNumberIcon', array('default'=> 'fas fa-phone-volume',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageJoinNumberIcon',
			array('label'=> __('LandingPage Join Number Icon', 'w3layouts'),
				'section'=> 'LandingPageJoinNumberSection',
				'settings'=> 'LandingPageJoinNumberIcon'
			)));

	$wp_customize->add_setting('LandingPageJoinNumberURL', array('default'=> "tel:+1(23) 456 789 0000",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageJoinNumberURL',
			array('label'=> __('LandingPage Join Number URL', 'w3layouts'),
				'section'=> 'LandingPageJoinNumberSection',
				'settings'=> 'LandingPageJoinNumberURL',
			)));

	$wp_customize->add_setting('LandingPageJoinNumber', array('default'=> "+1(23) 456 789 0000",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageJoinNumber',
			array('label'=> __('LandingPage Join Number', 'w3layouts'),
				'section'=> 'LandingPageJoinNumberSection',
				'settings'=> 'LandingPageJoinNumber',
			)));

	$wp_customize->add_setting('LandingPageJoinNumberBtnUrl', array('default'=> '#url',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageJoinNumberBtnUrl',
			array('label'=> __('Button URL', 'w3layouts'),
				'section'=> 'LandingPageJoinNumberSection',
				'settings'=> 'LandingPageJoinNumberBtnUrl'
			)));

	$wp_customize->add_setting('LandingPageJoinNumberBtnText', array('default'=> 'Join for free',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageJoinNumberBtnText',
			array('label'=> __('Button Text', 'w3layouts'),
				'section'=> 'LandingPageJoinNumberSection',
				'settings'=> 'LandingPageJoinNumberBtnText'
			)));


	// LandingPage Join Number Section top & bottom  textarea

	$wp_customize->add_setting('LandingPageJoinNumberTopArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageJoinNumberTopArea',
			array('label'=> __('Booking Number Top', 'w3layouts'),
				'section'=> 'LandingPageJoinNumberSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	$wp_customize->add_setting('LandingPageJoinNumberBottomArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'LandingPageJoinNumberBottomArea',
			array('label'=> __('Booking Number Bottom', 'w3layouts'),
				'section'=> 'LandingPageJoinNumberSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	// LandingPage Join Number Section top & bottom  textarea

	/** LandingPage Join Number section ends **/


		


    }

}