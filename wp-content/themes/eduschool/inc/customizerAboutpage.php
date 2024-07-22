<?php
/**
 * w3layouts Theme About page Customizer
 *
 * @package w3layouts
 */

$w3layouts_About_settings=new w3layouts_About_customizer_settings();

class w3layouts_About_customizer_settings {
    // Get our default values
    // private $defaults;

    public function __construct() {
        // add_action( 'customize_register', array( $this, 'w3layouts_about_cust_register' ) );
        add_action('customize_register', array($this, 'w3layouts_AboutPage_panels'));

    }

    public function w3layouts_AboutPage_panels($wp_customize) {
        /**
 		 * Add our Header & Navigation Panel
 		 */
        $wp_customize->add_panel('AboutPage_panel',
            array('title'=> __('About Page Customize', 'w3layouts'),
                'priority'=> 30,
                'description'=> esc_html__('add and update AboutPage data.', 'w3layouts')));

        $wp_customize->add_section('AllPagesBreadcrumbs',
            array('title'=> __('Breadcrumbs Required', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageBannerSection',
            array('title'=> __('AboutPage Section 1 About Banner', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageAboutSection',
            array('title'=> __('AboutPage Section 2 About', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageStatsSection',
            array('title'=> __('AboutPage Section 3 Stats', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageTestimonialsSection',
            array('title'=> __('AboutPage Section 4 Testimonials', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageTeamSection',
            array('title'=> __('AboutPage Section 5 Team', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageCWPSection',
            array('title'=> __('AboutPage Section 6 Content With Photo', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageJoinNumberSection',
            array('title'=> __('AboutPage Section 7 Join Now', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));




        /** All pages breadcrumbs section starts **/
        $wp_customize->add_setting('BreadcrumbsRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BreadcrumbsRequired',
                array('label'=> __('Breadcrumbs Required', 'w3layouts'),
                    'section'=> 'AllPagesBreadcrumbs',
                    'settings'=> 'BreadcrumbsRequired',
                    'priority'=> 1)));
        $wp_customize->selective_refresh->add_partial('BreadcrumbsRequired', array('selector'=> 'ul.AllBreadcrumbs', // You can also select a css class
            ));
        /** All pages breadcrumbs section ends **/


        /** AboutPage Banner section starts **/

        $wp_customize->add_setting('AboutPageBannerBgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageBannerBgImage',
                array('label'=> __('AboutPage Banner Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageBannerSection',
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
        $wp_customize->selective_refresh->add_partial('AboutPageBannerBgImage', array('selector'=> 'div.AboutPageBanner', // You can also select a css class
            ));

        $wp_customize->add_setting('AboutPageMainTitleRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageMainTitleRequired',
                array('label'=> __('AboutPage MainTitle Required', 'w3layouts'),
                    'section'=> 'AboutPageBannerSection',
                    'settings'=> 'AboutPageMainTitleRequired'
                )));

        $wp_customize->add_setting('AboutBannerMainTitle', array('default'=> 'About Us',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutBannerMainTitle',
                array('label'=> __('AboutPage Main Title', 'w3layouts'),
                    'section'=> 'AboutPageBannerSection',
                    'settings'=> 'AboutBannerMainTitle'
                )));
        /** AboutPage Banner section ends **/





        /** AboutPage About Section starts **/

        $wp_customize->add_setting('AboutPageAboutRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageAboutRequired',
                array('label'=> __('AboutPage About Section Required', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutRequired',
                    'priority'=> 1)));
        $wp_customize->selective_refresh->add_partial('AboutPageAboutRequired', array('selector'=> 'div.AboutPageAbout', // You can also select a css class
            ));

        $wp_customize->add_setting('AboutPageAboutImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageAboutImage',
                array('label'=> __('About Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageAboutSection',
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
        $wp_customize->add_setting('AboutPageAboutGetAppointmentBlockRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageAboutGetAppointmentBlockRequired',
                array('label'=> __('About Get Appointment Required', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutGetAppointmentBlockRequired'
                )));

        $wp_customize->add_setting('AboutPageAboutGetAppointmentTitle', array('default'=> "Get a Appointment Today!",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutGetAppointmentTitle',
                array('label'=> __('About Get Appointment Title', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutGetAppointmentTitle'
                )));

        $wp_customize->add_setting('AboutPageAboutGetAppointmentPara', array('default'=> 'Nemo enim ipsam oluptatem quia oluptas<br> sit aspernatur aut odit aut fugit.',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutGetAppointmentPara',
                array('label'=> __('About Get Appointment Para', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageAboutPhoneURL', array('default'=> "tel:1-800-654-3210",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutPhoneURL',
                array('label'=> __('About Phone Number URL', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutPhoneURL'
                )));

        $wp_customize->add_setting('AboutPageAboutPhoneNumber', array('default'=> "1-800-654-3210",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutPhoneNumber',
                array('label'=> __('About Phone Number', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutPhoneNumber'
                )));

        // About Get Appointment Block

        $wp_customize->add_setting('AboutPageAboutTitle', array('default'=> "We Are The Best Choice For Your Child",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutTitle',
                array('label'=> __('About Title', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutTitle'
                )));

        $wp_customize->add_setting('AboutPageAboutContent', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutContent',
                array('label'=> __('About Para', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageAboutListTitle1', array('default'=> "Special Education",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutListTitle1',
                array('label'=> __('About List Title 1', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutListTitle1'
                )));

        $wp_customize->add_setting('AboutPageAboutListTitle2', array('default'=> "Access more then 100K online courses",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutListTitle2',
                array('label'=> __('About List Title 2', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutListTitle2'
                )));

        $wp_customize->add_setting('AboutPageAboutListTitle3', array('default'=> "Traditional Academies",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutListTitle3',
                array('label'=> __('About List Title 3', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutListTitle3'
                )));

        $wp_customize->add_setting('AboutPageAboutBtnURL', array('default'=> "#url",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutBtnURL',
                array('label'=> __('About Btn URL', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutBtnURL'
                )));

        $wp_customize->add_setting('AboutPageAboutBtnText', array('default'=> "Apply Now",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutBtnText',
                array('label'=> __('About Btn Text', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutBtnText'
                )));


        // AboutPage About Section top & bottom  textarea

        $wp_customize->add_setting('AboutPageAboutTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutTopArea',
                array('label'=> __('About Top', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageAboutBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutBottomArea',
                array('label'=> __('About Bottom', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // AboutPage About Section top & bottom  textarea

        /** AboutPage About Section ends **/




        /** AboutPage stats section starts **/

        $wp_customize->add_setting('AboutPageStatsRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageStatsRequired',
                array('label'=> __('AboutPage Stats Section Required', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStatsRequired',
                    'priority'=> 1)));
        $wp_customize->selective_refresh->add_partial('AboutPageStatsRequired', array('selector'=> 'div.AboutPageStats', // You can also select a css class
            ));

        $wp_customize->add_setting('AboutPageStatsMainTitle1', array('default'=> "Our Statistics",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageStatsMainTitle1',
                array('label'=> __('Stats Main Title 1', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStatsMainTitle1'
                )));

        $wp_customize->add_setting('AboutPageStatsMainTitle2', array('default'=> "We are Proud to Share with You",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageStatsMainTitle2',
                array('label'=> __('Stats Main Title 2', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStatsMainTitle2'
                )));

        // stats grid 1
        $wp_customize->add_setting('AboutPageStatsGrid1Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageStatsGrid1Required',
                array('label'=> __('AboutPage Stats1 Required', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStatsGrid1Required'
                )));

        $wp_customize->add_setting('AboutPageStats1Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageStats1Image',
                array('label'=> __('AboutPage Stats1 Icon'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageStatsSection',
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

        $wp_customize->add_setting('AboutPageStats1Number', array('default'=> "36076",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageStats1Number',
                array('label'=> __('Stats1 Number', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStats1Number'
                )));

        $wp_customize->add_setting('AboutPageStats1Title', array('default'=> "Students Enrolled",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageStats1Title',
                array('label'=> __('Stats1 Title', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStats1Title'
                )));
        // stats grid 1


        // stats grid 2
        $wp_customize->add_setting('AboutPageStatsGrid2Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageStatsGrid2Required',
                array('label'=> __('AboutPage Stats2 Required', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStatsGrid2Required'
                )));

        $wp_customize->add_setting('AboutPageStats2Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageStats2Image',
                array('label'=> __('AboutPage Stats2 Icon'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageStatsSection',
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

        $wp_customize->add_setting('AboutPageStats2Number', array('default'=> "786",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageStats2Number',
                array('label'=> __('Stats2 Number', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStats2Number'
                )));

        $wp_customize->add_setting('AboutPageStats2Title', array('default'=> "Our Branches",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageStats2Title',
                array('label'=> __('Stats2 Title', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStats2Title'
                )));

        // stats grid 2


        // stats grid 3
        $wp_customize->add_setting('AboutPageStatsGrid3Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageStatsGrid3Required',
                array('label'=> __('AboutPage Stats3 Required', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStatsGrid3Required'
                )));

        $wp_customize->add_setting('AboutPageStats3Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageStats3Image',
                array('label'=> __('AboutPage Stats3 Icon'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageStatsSection',
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

        $wp_customize->add_setting('AboutPageStats3Number', array('default'=> "3630",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageStats3Number',
                array('label'=> __('Stats3 Number', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStats3Number'
                )));

        $wp_customize->add_setting('AboutPageStats3Title', array('default'=> "Total Courses",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageStats3Title',
                array('label'=> __('Stats3 Title', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStats3Title'
                )));

        // stats grid 3


        // stats grid 4
        $wp_customize->add_setting('AboutPageStatsGrid4Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageStatsGrid4Required',
                array('label'=> __('AboutPage Stats4 Required', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStatsGrid4Required'
                )));

        $wp_customize->add_setting('AboutPageStats4Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageStats4Image',
                array('label'=> __('AboutPage Stats4 Icon'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageStatsSection',
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

        $wp_customize->add_setting('AboutPageStats4Number', array('default'=> "6300",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageStats4Number',
                array('label'=> __('Stats4 Number', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStats4Number'
                )));

        $wp_customize->add_setting('AboutPageStats4Title', array('default'=> "Awards Won",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageStats4Title',
                array('label'=> __('Stats4 Title', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'settings'=> 'AboutPageStats4Title'
                )));

        // stats grid 4


        // AboutPage stats Section top & bottom  textarea

        $wp_customize->add_setting('AboutPageStatsTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageStatsTopArea',
                array('label'=> __('Stats Top', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageStatsBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageStatsBottomArea',
                array('label'=> __('Stats Bottom', 'w3layouts'),
                    'section'=> 'AboutPageStatsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // AboutPage stats Section top & bottom  textarea

        /** AboutPage Stats Section ends **/





        /** AboutPage Testimonials starts **/

        $wp_customize->add_setting('AboutPageTestimonialsRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTestimonialsRequired',
                array('label'=> __('AboutPage Testimonials Required', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'settings'=> 'AboutPageTestimonialsRequired',
                    'priority'=> 1)));
        $wp_customize->selective_refresh->add_partial('AboutPageTestimonialsRequired', array('selector'=> 'div.AboutPageTestimonials', // You can also select a css class
            ));

        $wp_customize->add_setting('AboutPageTestimonialsBgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTestimonialsBgImage',
                array('label'=> __('Testimonials Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTestimonialsSection',
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
        $wp_customize->add_setting('AboutPageTestimonial1Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTestimonial1Required',
                array('label'=> __('Testimonial 1 Required', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'settings'=> 'AboutPageTestimonial1Required'
                )));

        $wp_customize->add_setting('AboutPageTestimonialsClient1Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTestimonialsClient1Image',
                array('label'=> __('Client 1 Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTestimonialsSection',
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

        $wp_customize->add_setting('AboutPageTestimonialsMessage1', array('default'=> 'Duis aute irure dolor in reprehenderit in voluptate
velit esse cillum dolore eu. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTestimonialsMessage1',
                array('label'=> __('Client 1 Message', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageTestimonialsClient1Name', array('default'=> 'Mario Spe',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTestimonialsClient1Name',
                array('label'=> __('Client 1 Name', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'settings'=> 'AboutPageTestimonialsClient1Name'
                )));
        // client 1

        // client 2
        $wp_customize->add_setting('AboutPageTestimonial2Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTestimonial2Required',
                array('label'=> __('Testimonial 2 Required', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'settings'=> 'AboutPageTestimonial2Required'
                )));

        $wp_customize->add_setting('AboutPageTestimonialsClient2Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTestimonialsClient2Image',
                array('label'=> __('Client 2 Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTestimonialsSection',
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

        $wp_customize->add_setting('AboutPageTestimonialsMessage2', array('default'=> 'Sed ut perspiciatis unde omnis iste natus error sit
voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTestimonialsMessage2',
                array('label'=> __('Client 2 Message', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageTestimonialsClient2Name', array('default'=> 'Petey Cru',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTestimonialsClient2Name',
                array('label'=> __('Client 2 Name', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'settings'=> 'AboutPageTestimonialsClient2Name'
                )));

        // client 2

        // client 3
        $wp_customize->add_setting('AboutPageTestimonial3Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTestimonial3Required',
                array('label'=> __('Testimonial 3 Required', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'settings'=> 'AboutPageTestimonial3Required'
                )));

        $wp_customize->add_setting('AboutPageTestimonialsClient3Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTestimonialsClient3Image',
                array('label'=> __('Client 3 Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTestimonialsSection',
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

        $wp_customize->add_setting('AboutPageTestimonialsMessage3', array('default'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing
elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTestimonialsMessage3',
                array('label'=> __('Client 3 Message', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageTestimonialsClient3Name', array('default'=> 'Anna Sth',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTestimonialsClient3Name',
                array('label'=> __('Client 3 Name', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'settings'=> 'AboutPageTestimonialsClient3Name'
                )));

        // client 3

        // client 4
        $wp_customize->add_setting('AboutPageTestimonial4Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTestimonial4Required',
                array('label'=> __('Testimonial 4 Required', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'settings'=> 'AboutPageTestimonial4Required'
                )));

        $wp_customize->add_setting('AboutPageTestimonialsClient4Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTestimonialsClient4Image',
                array('label'=> __('Client 4 Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTestimonialsSection',
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

        $wp_customize->add_setting('AboutPageTestimonialsMessage4', array('default'=> 'Duis aute irure dolor in reprehenderit in voluptate
velit esse cillum dolore eu. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTestimonialsMessage4',
                array('label'=> __('Client 4 Message', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageTestimonialsClient4Name', array('default'=> 'Gail For',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTestimonialsClient4Name',
                array('label'=> __('Client 4 Name', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'settings'=> 'AboutPageTestimonialsClient4Name'
                )));
        // client 4

        // client 5
        $wp_customize->add_setting('AboutPageTestimonial5Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTestimonial5Required',
                array('label'=> __('Testimonial 5 Required', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'settings'=> 'AboutPageTestimonial5Required'
                )));

        $wp_customize->add_setting('AboutPageTestimonialsClient5Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTestimonialsClient5Image',
                array('label'=> __('Client 5 Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTestimonialsSection',
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

        $wp_customize->add_setting('AboutPageTestimonialsMessage5', array('default'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing
elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTestimonialsMessage5',
                array('label'=> __('Client 5 Message', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageTestimonialsClient5Name', array('default'=> 'Boye Fra',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTestimonialsClient5Name',
                array('label'=> __('Client 5 Name', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'settings'=> 'AboutPageTestimonialsClient5Name'
                )));
        // client 5

        // AboutPage Testimonials top & bottom  area textarea

        $wp_customize->add_setting('AboutPageTestimonialsTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTestimonialsTopArea',
                array('label'=> __('Testimonials Top', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageTestimonialsBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTestimonialsBottomArea',
                array('label'=> __('Testimonials Bottom', 'w3layouts'),
                    'section'=> 'AboutPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));
        // AboutPage Testimonials top & bottom  area textarea

        /** AboutPage Testimonials ends **/





        /** AboutPage Team starts **/

        $wp_customize->add_setting('AboutPageTeamRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeamRequired',
                array('label'=> __('AboutPage Team Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeamRequired',
                    'priority'=> 1)));
        $wp_customize->selective_refresh->add_partial('AboutPageTeamRequired', array('selector'=> 'div.AboutPageTeam', // You can also select a css class
            ));

        $wp_customize->add_setting('AboutPageTeamTitle1', array('default'=> 'Our Team',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeamTitle1',
                array('label'=> __('Team Section Title 1', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeamTitle1'
                )));

        $wp_customize->add_setting('AboutPageTeamTitle2', array('default'=> 'Meet our Teachers',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeamTitle2',
                array('label'=> __('Team Section Title 2', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeamTitle2'
                )));

        // Team 1
        $wp_customize->add_setting('AboutPageTeam1Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam1Required',
                array('label'=> __('Team1 Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1Required'
                )));

        $wp_customize->add_setting('AboutPageTeam1Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTeam1Image',
                array('label'=> __('Team1 image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTeamSection',
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

        $wp_customize->add_setting('AboutPageTeam1Title', array('default'=> 'Emma Watson',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam1Title',
                array('label'=> __('Team1 Name', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1Title'
                )));

        $wp_customize->add_setting('AboutPageTeam1SocialFacebook',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam1SocialFacebook',
                array('label'=> __('Team1 Facebook Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1SocialFacebook'
                )));

        $wp_customize->add_setting('AboutPageTeam1SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam1SocialFacebookURL',
                array('label'=> __('Team1 FaceBook URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1SocialFacebookURL'
                )));

        $wp_customize->add_setting('AboutPageTeam1SocialTwitter',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam1SocialTwitter',
                array('label'=> __('Team1 Twitter Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1SocialTwitter'
                )));

        $wp_customize->add_setting('AboutPageTeam1SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam1SocialTwitterURL',
                array('label'=> __('Team1 Twitter URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1SocialTwitterURL'
                )));

        $wp_customize->add_setting('AboutPageTeam1SocialGoogle',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam1SocialGoogle',
                array('label'=> __('Team1 Google Plus Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1SocialGoogle'
                )));

        $wp_customize->add_setting('AboutPageTeam1SocialGoogleURL', array('default'=> 'https://w3layouts.com/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam1SocialGoogleURL',
                array('label'=> __('Team1 Google Plus URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1SocialGoogleURL'
                )));
        // Team 1


        // Team 2
        $wp_customize->add_setting('AboutPageTeam2Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam2Required',
                array('label'=> __('Team2 Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2Required'
                )));

        $wp_customize->add_setting('AboutPageTeam2Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTeam2Image',
                array('label'=> __('Team2 image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTeamSection',
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

        $wp_customize->add_setting('AboutPageTeam2Title', array('default'=> 'Enrique Lal',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam2Title',
                array('label'=> __('Team2 Name', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2Title'
                )));
                
        $wp_customize->add_setting('AboutPageTeam2SocialFacebook',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam2SocialFacebook',
                array('label'=> __('Team2 Facebook Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2SocialFacebook'
                )));

        $wp_customize->add_setting('AboutPageTeam2SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam2SocialFacebookURL',
                array('label'=> __('Team2 FaceBook URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2SocialFacebookURL'
                )));

        $wp_customize->add_setting('AboutPageTeam2SocialTwitter',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam2SocialTwitter',
                array('label'=> __('Team2 Twitter Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2SocialTwitter'
                )));

        $wp_customize->add_setting('AboutPageTeam2SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam2SocialTwitterURL',
                array('label'=> __('Team2 Twitter URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2SocialTwitterURL'
                )));

        $wp_customize->add_setting('AboutPageTeam2SocialGoogle',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam2SocialGoogle',
                array('label'=> __('Team2 Google Plus Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2SocialGoogle'
                )));

        $wp_customize->add_setting('AboutPageTeam2SocialGoogleURL', array('default'=> 'https://w3layouts.com/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam2SocialGoogleURL',
                array('label'=> __('Team2 Google Plus URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2SocialGoogleURL'
                )));
        // Team 2


        // Team 3
        $wp_customize->add_setting('AboutPageTeam3Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam3Required',
                array('label'=> __('Team3 Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3Required'
                )));

        $wp_customize->add_setting('AboutPageTeam3Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTeam3Image',
                array('label'=> __('Team3 image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTeamSection',
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

        $wp_customize->add_setting('AboutPageTeam3Title', array('default'=> 'Smith Ker',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam3Title',
                array('label'=> __('Team3 Name', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3Title'
                )));
                
        $wp_customize->add_setting('AboutPageTeam3SocialFacebook',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam3SocialFacebook',
                array('label'=> __('Team3 Facebook Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3SocialFacebook'
                )));

        $wp_customize->add_setting('AboutPageTeam3SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam3SocialFacebookURL',
                array('label'=> __('Team3 FaceBook URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3SocialFacebookURL'
                )));

        $wp_customize->add_setting('AboutPageTeam3SocialTwitter',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam3SocialTwitter',
                array('label'=> __('Team3 Twitter Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3SocialTwitter'
                )));

        $wp_customize->add_setting('AboutPageTeam3SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam3SocialTwitterURL',
                array('label'=> __('Team3 Twitter URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3SocialTwitterURL'
                )));

        $wp_customize->add_setting('AboutPageTeam3SocialGoogle',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam3SocialGoogle',
                array('label'=> __('Team3 Google Plus Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3SocialGoogle'
                )));

        $wp_customize->add_setting('AboutPageTeam3SocialGoogleURL', array('default'=> 'https://w3layouts.com/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam3SocialGoogleURL',
                array('label'=> __('Team3 Google Plus URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3SocialGoogleURL'
                )));
        // Team3


        // Team4
        $wp_customize->add_setting('AboutPageTeam4Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam4Required',
                array('label'=> __('Team4 Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4Required'
                )));

        $wp_customize->add_setting('AboutPageTeam4Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTeam4Image',
                array('label'=> __('Team4 image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTeamSection',
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

        $wp_customize->add_setting('AboutPageTeam4Title', array('default'=> 'Forkler Lee',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam4Title',
                array('label'=> __('Team4 Name', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4Title'
                )));
                
        $wp_customize->add_setting('AboutPageTeam4SocialFacebook',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam4SocialFacebook',
                array('label'=> __('Team4 Facebook Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4SocialFacebook'
                )));

        $wp_customize->add_setting('AboutPageTeam4SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam4SocialFacebookURL',
                array('label'=> __('Team4 FaceBook URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4SocialFacebookURL'
                )));

        $wp_customize->add_setting('AboutPageTeam4SocialTwitter',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam4SocialTwitter',
                array('label'=> __('Team4 Twitter Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4SocialTwitter'
                )));

        $wp_customize->add_setting('AboutPageTeam4SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam4SocialTwitterURL',
                array('label'=> __('Team4 Twitter URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4SocialTwitterURL'
                )));

        $wp_customize->add_setting('AboutPageTeam4SocialGoogle',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam4SocialGoogle',
                array('label'=> __('Team4 Google Plus Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4SocialGoogle'
                )));

        $wp_customize->add_setting('AboutPageTeam4SocialGoogleURL', array('default'=> 'https://w3layouts.com/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam4SocialGoogleURL',
                array('label'=> __('Team4 Google Plus URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4SocialGoogleURL'
                )));
        // Team4

        // AboutPage Team top & bottom  area textarea

        $wp_customize->add_setting('AboutPageTeamTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeamTopArea',
                array('label'=> __('Team Top', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageTeamBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeamBottomArea',
                array('label'=> __('Team Bottom', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));
        // AboutPage Team top & bottom  area textarea

        /** AboutPage Team ends **/




        /** AboutPage CWP starts **/

        $wp_customize->add_setting('AboutPageCWPRequired',
        array('default'=> 1,
            'transport'=> 'refresh',
            'sanitize_callback'=> 'skyrocket_switch_sanitization'
        ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageCWPRequired',
            array('label'=> __('AboutPage Content With Photo Required', 'w3layouts'),
                'section'=> 'AboutPageCWPSection',
                'settings'=> 'AboutPageCWPRequired',
                'priority'=> 1)));
    $wp_customize->selective_refresh->add_partial('AboutPageCWPRequired', array('selector'=> 'div.AboutPageCWP', // You can also select a css class
        ));

    $wp_customize->add_setting('AboutPageCWPImage',
        array('default'=> '',
            'transport'=> 'refresh',
            'sanitize_callback'=> 'absint'
        ));
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageCWPImage',
            array('label'=> __('AboutPage CWP image'),
                'description'=> esc_html__(''),
                'section'=> 'AboutPageCWPSection',
                'flex_width'=> false, // Optional. Default: false
                'flex_height'=> true, // Optional. Default: false
                'width'=> 640, // Optional. Default: 150
                'height'=> 700, // Optional. Default: 150
                'button_labels'=> array( // Optional.
                    'select'=> __('Select Image'),
                    'change'=> __('Change Image'),
                    'remove'=> __('Remove'),
                    'default'=> __('Default'),
                    'placeholder'=> __('No image selected'),
                    'frame_title'=> __('Select Image'),
                    'frame_button'=> __('Choose Image'),
                ))));

    $wp_customize->add_setting('AboutPageCWPTitle1', array('default'=> 'Our Environment',
            'transport'=> 'refresh',
        ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
            'AboutPageCWPTitle1',
            array('label'=> __('AboutPage CWP Title1', 'w3layouts'),
                'section'=> 'AboutPageCWPSection',
                'settings'=> 'AboutPageCWPTitle1'
            )));

    $wp_customize->add_setting('AboutPageCWPTitle2', array('default'=> 'Active Learning, Expert Teachers & Safe Environment',
            'transport'=> 'refresh',
        ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
            'AboutPageCWPTitle2',
            array('label'=> __('AboutPage CWP Title2', 'w3layouts'),
                'section'=> 'AboutPageCWPSection',
                'settings'=> 'AboutPageCWPTitle2'
            )));

    $wp_customize->add_setting('AboutPageCWPContent', array('default'=> 'Consectetur adipiscing elit. Aliquam sit amet
    efficitur tortor.Uspendisse efficitur orci urna. In et augue ornare, tempor massa in, luctus
    sapien. In et augue ornare, tempor massa.',
'transport'=> 'refresh',
        ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
            'AboutPageCWPContent',
            array('label'=> __('AboutPage CWP Content', 'w3layouts'),
                'section'=> 'AboutPageCWPSection',
                'type'=> 'textarea',
                'input_attrs'=> array('class'=> 'my-custom-class',
                    'style'=> 'border: 1px solid #999',
                    'placeholder'=> __('Enter message...', 'w3layouts'),
                ),
            )));

    // AboutPage CWP Btns
    $wp_customize->add_setting('AboutPageCWPBtn1URL', array('default'=> '#url',
            'transport'=> 'refresh',
        ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
            'AboutPageCWPBtn1URL',
            array('label'=> __('AboutPage CWP Btn1 URL', 'w3layouts'),
                'section'=> 'AboutPageCWPSection',
                'settings'=> 'AboutPageCWPBtn1URL'
            )));

    $wp_customize->add_setting('AboutPageCWPBtn1Text', array('default'=> 'Contact Us',
            'transport'=> 'refresh',
        ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
            'AboutPageCWPBtn1Text',
            array('label'=> __('AboutPage CWP Btn1 Text', 'w3layouts'),
                'section'=> 'AboutPageCWPSection',
                'settings'=> 'AboutPageCWPBtn1Text'
            )));

    $wp_customize->add_setting('AboutPageCWPBtn2URL', array('default'=> '#url',
            'transport'=> 'refresh',
        ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
            'AboutPageCWPBtn2URL',
            array('label'=> __('AboutPage CWP Btn2 URL', 'w3layouts'),
                'section'=> 'AboutPageCWPSection',
                'settings'=> 'AboutPageCWPBtn2URL'
            )));

            $wp_customize->add_setting('AboutPageCWPBtn2Text', array('default'=> 'Learn More',
            'transport'=> 'refresh',
        ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
            'AboutPageCWPBtn2Text',
            array('label'=> __('AboutPage CWP Btn2 Text', 'w3layouts'),
                'section'=> 'AboutPageCWPSection',
                'settings'=> 'AboutPageCWPBtn2Text'
            )));

            $wp_customize->add_setting('AboutPageCWPBtn2Icon', array('default'=> 'fas fa-arrow-right',
            'transport'=> 'refresh',
        ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
            'AboutPageCWPBtn2Icon',
            array('label'=> __('AboutPage CWP Btn2 Icon', 'w3layouts'),
                'section'=> 'AboutPageCWPSection',
                'settings'=> 'AboutPageCWPBtn2Icon'
            )));

    // AboutPage CWP top & bottom  area textarea

    $wp_customize->add_setting('AboutPageCWPTopArea', array('default'=> '',
            'transport'=> 'refresh',
        ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
            'AboutPageCWPTopArea',
            array('label'=> __('CWP Top', 'w3layouts'),
                'section'=> 'AboutPageCWPSection',
                'type'=> 'textarea',
                'input_attrs'=> array('class'=> 'my-custom-class',
                    'style'=> 'border: 1px solid #999',
                    'placeholder'=> __('Enter message...', 'w3layouts'),
                ),
            )));

    $wp_customize->add_setting('AboutPageCWPBottomArea', array('default'=> '',
            'transport'=> 'refresh',
        ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
            'AboutPageCWPBottomArea',
            array('label'=> __('CWP Bottom', 'w3layouts'),
                'section'=> 'AboutPageCWPSection',
                'type'=> 'textarea',
                'input_attrs'=> array('class'=> 'my-custom-class',
                    'style'=> 'border: 1px solid #999',
                    'placeholder'=> __('Enter message...', 'w3layouts'),
                ),
            )));
    // AboutPage CWP top & bottom  area textarea

    /** AboutPage CWP ends **/







		/** AboutPage Join Number section starts **/

		$wp_customize->add_setting('AboutPageJoinNumberRequired',
		array('default'=> 1,
			'transport'=> 'refresh',
			'sanitize_callback'=> 'skyrocket_switch_sanitization'
		));
	$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageJoinNumberRequired',
			array('label'=> __('AboutPage Join Number Section Required', 'w3layouts'),
				'section'=> 'AboutPageJoinNumberSection',
				'settings'=> 'AboutPageJoinNumberRequired',
				'priority'=> 1)));
	$wp_customize->selective_refresh->add_partial('AboutPageJoinNumberRequired', array('selector'=> 'div.AboutPageJoinNumber', // You can also select a css class
		));

	$wp_customize->add_setting('AboutPageJoinNumberTitle', array('default'=> "Call To Enroll Your Child",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'AboutPageJoinNumberTitle',
			array('label'=> __('AboutPage Join Number Title', 'w3layouts'),
				'section'=> 'AboutPageJoinNumberSection',
				'settings'=> 'AboutPageJoinNumberTitle',
			)));

	$wp_customize->add_setting('AboutPageJoinNumberContent', array('default'=> 'Begin the change today!',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'AboutPageJoinNumberContent',
			array('label'=> __('AboutPage Join Number Content', 'w3layouts'),
				'section'=> 'AboutPageJoinNumberSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	$wp_customize->add_setting('AboutPageJoinNumberIcon', array('default'=> 'fas fa-phone-volume',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'AboutPageJoinNumberIcon',
			array('label'=> __('AboutPage Join Number Icon', 'w3layouts'),
				'section'=> 'AboutPageJoinNumberSection',
				'settings'=> 'AboutPageJoinNumberIcon'
			)));

	$wp_customize->add_setting('AboutPageJoinNumberURL', array('default'=> "tel:+1(23) 456 789 0000",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'AboutPageJoinNumberURL',
			array('label'=> __('AboutPage Join Number URL', 'w3layouts'),
				'section'=> 'AboutPageJoinNumberSection',
				'settings'=> 'AboutPageJoinNumberURL',
			)));

	$wp_customize->add_setting('AboutPageJoinNumber', array('default'=> "+1(23) 456 789 0000",
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'AboutPageJoinNumber',
			array('label'=> __('AboutPage Join Number', 'w3layouts'),
				'section'=> 'AboutPageJoinNumberSection',
				'settings'=> 'AboutPageJoinNumber',
			)));

	$wp_customize->add_setting('AboutPageJoinNumberBtnUrl', array('default'=> '#url',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'AboutPageJoinNumberBtnUrl',
			array('label'=> __('Button URL', 'w3layouts'),
				'section'=> 'AboutPageJoinNumberSection',
				'settings'=> 'AboutPageJoinNumberBtnUrl'
			)));

	$wp_customize->add_setting('AboutPageJoinNumberBtnText', array('default'=> 'Join for free',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'AboutPageJoinNumberBtnText',
			array('label'=> __('Button Text', 'w3layouts'),
				'section'=> 'AboutPageJoinNumberSection',
				'settings'=> 'AboutPageJoinNumberBtnText'
			)));


	// AboutPage Join Number Section top & bottom  textarea

	$wp_customize->add_setting('AboutPageJoinNumberTopArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'AboutPageJoinNumberTopArea',
			array('label'=> __('Booking Number Top', 'w3layouts'),
				'section'=> 'AboutPageJoinNumberSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	$wp_customize->add_setting('AboutPageJoinNumberBottomArea', array('default'=> '',
			'transport'=> 'refresh',
		));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
			'AboutPageJoinNumberBottomArea',
			array('label'=> __('Booking Number Bottom', 'w3layouts'),
				'section'=> 'AboutPageJoinNumberSection',
				'type'=> 'textarea',
				'input_attrs'=> array('class'=> 'my-custom-class',
					'style'=> 'border: 1px solid #999',
					'placeholder'=> __('Enter message...', 'w3layouts'),
				),
			)));

	// AboutPage Join Number Section top & bottom  textarea

	/** AboutPage Join Number section ends **/




    }

}