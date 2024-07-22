<?php
/**
 * w3layouts Theme 404 page Customizer
 *
 * @package w3layouts
 */

$w3layouts_404_settings=new w3layouts_404_customizer_settings();

class w3layouts_404_customizer_settings {
    // Get our default values
    // private $defaults;

    public function __construct() {
        // add_action( 'customize_register', array( $this, 'w3layouts_404_cust_register' ) );
        add_action('customize_register', array($this, 'w3layouts_ErrorPage_panels'));



    }

    public function w3layouts_ErrorPage_panels($wp_customize) {
        /**
 		 * Add our Header & Navigation Panel
 		 */
        $wp_customize->add_panel('ErrorPage_panel',
            array('title'=> __('404 Page Customize', 'w3layouts'),
                'priority'=> 30,
                'description'=> esc_html__('add and update ErrorPage data.', 'w3layouts')));

        $wp_customize->add_section('ErrorPageBlock',
            array('title'=> __('404 Content Required', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'ErrorPage_panel'
            ));

            


        /** ErrorPage Section starts **/

        $wp_customize->add_setting('ErrorPageImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ErrorPageImage',
                array('label'=> __('Error Page 404 Bg image'),
                'description'=> esc_html__(''),
                'section'=> 'ErrorPageBlock',
                'flex_width'=> false, // Optional. Default: false
                'flex_height'=> true, // Optional. Default: false
                'width'=> 1680, // Optional. Default: 150
                'height'=> 1000, // Optional. Default: 150
                'button_labels'=> array( // Optional.
                'select'=> __('Select Image'),
                'change'=> __('Change Image'),
                'remove'=> __('Remove'),
                'default'=> __('Default'),
                'placeholder'=> __('No image selected'),
                'frame_title'=> __('Select Image'),
                'frame_button'=> __('Choose Image'),
        ))));

        $wp_customize->add_setting('ErrorPageTitle', array('default'=> "Oops!",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ErrorPageTitle',
                array('label'=> __('Error Page Title', 'w3layouts'),
                    'section'=> 'ErrorPageBlock',
                    'settings'=> 'ErrorPageTitle'
                )));
        $wp_customize->add_setting('ErrorPage404', array('default'=> "404",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ErrorPage404',
                array('label'=> __('Error Page 404', 'w3layouts'),
                    'section'=> 'ErrorPageBlock',
                    'settings'=> 'ErrorPage404'
                )));
        $wp_customize->add_setting('ErrorPageContent', array('default'=> "This page you are looking for might have been removed had its name changed or temporarly unavailable.",
            'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
            'ErrorPageContent',
            array('label'=> __('Error Page Content', 'w3layouts'),
                'section'=> 'ErrorPageBlock',
                'type'=> 'textarea',
                'input_attrs'=> array('class'=> 'my-custom-class',
                    'style'=> 'border: 1px solid #999',
                    'placeholder'=> __('Enter message...', 'w3layouts'),
                ),
            )));

        $wp_customize->add_setting('ErrorPageSearchFormRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ErrorPageSearchFormRequired',
                array('label'=> __('Search Form Required', 'w3layouts'),
                    'section'=> 'ErrorPageBlock',
                    'settings'=> 'ErrorPageSearchFormRequired'
                )));

        $wp_customize->add_setting('ErrorPageBackBtnRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ErrorPageBackBtnRequired',
                array('label'=> __('Back to Home Required', 'w3layouts'),
                    'section'=> 'ErrorPageBlock',
                    'settings'=> 'ErrorPageBackBtnRequired'
                )));
        $wp_customize->selective_refresh->add_partial('ErrorPageBackBtnRequired', array('selector'=> 'div.ErrorpageBlock', // You can also select a css class
            ));

        $wp_customize->add_setting('ErrorPageBackBtnTxt', array('default'=> "Back to Home",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ErrorPageBackBtnTxt',
                array('label'=> __('Back to Home Btn Txt', 'w3layouts'),
                    'section'=> 'ErrorPageBlock',
                    'settings'=> 'ErrorPageBackBtnTxt'
                )));

                
        // ErrorPage Section top & bottom  textarea

        $wp_customize->add_setting('ErrorPageTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ErrorPageTopArea',
                array('label'=> __('Error Page Block Top', 'w3layouts'),
                    'section'=> 'ErrorPageBlock',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('ErrorPageBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ErrorPageBottomArea',
                array('label'=> __('Error Page Block Bottom', 'w3layouts'),
                    'section'=> 'ErrorPageBlock',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // ErrorPage Section top & bottom  textarea

        /** ErrorPage Section ends **/


    }

}