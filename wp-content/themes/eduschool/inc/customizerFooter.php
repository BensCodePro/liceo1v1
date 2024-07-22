<?php
/**
 * w3layouts Theme Footer Customizer
 *
 * @package w3layouts
 */

$w3layouts_Footer_settings=new w3layouts_Footer_customizer_settings();

class w3layouts_Footer_customizer_settings {
  // Get our default values
  // private $defaults;

  public function __construct() {
    // add_action( 'customize_register', array( $this, 'w3layouts_about_cust_register' ) );
    add_action('customize_register', array($this, 'w3layouts_Footer_panels'));



  }

  public function w3layouts_Footer_panels($wp_customize) {
    $wp_customize->add_panel('Footer_panel',
      array('title'=> __('Footer Customize', 'w3layouts'),
        'priority'=> 30,
        'description'=> esc_html__('add and update Footer data.', 'w3layouts')));

    $wp_customize->add_section('Footer',
      array('title'=> __('Footer Settings', 'w3layouts'),
        'description'=> esc_html__('This is to set or update Footer information', 'w3layouts'),
        'panel'=> 'Footer_panel'
      ));

    $wp_customize->add_section('FooterMenuTitles',
      array('title'=> __('Footer Menu Titles', 'w3layouts'),
        'description'=> esc_html__('Menu Links Footer ', 'w3layouts'),
        'panel'=> 'Footer_panel'
      ));

    $wp_customize->add_section('FooterSubscribe',
      array('title'=> __('Footer Subscribe Section', 'w3layouts'),
        'description'=> esc_html__('CopyRight section in footer', 'w3layouts'),
        'panel'=> 'Footer_panel'
      ));

    $wp_customize->add_section('FooterCopyRight',
      array('title'=> __('Footer CopyRight Section', 'w3layouts'),
        'description'=> esc_html__('CopyRight section in footer', 'w3layouts'),
        'panel'=> 'Footer_panel'
      ));





    /** Footer Required section **/

    $wp_customize->add_setting('FooterRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterRequired',
        array('label'=> __('Footer Required', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterRequired',
          'priority'=> 1)));
    $wp_customize->selective_refresh->add_partial('FooterRequired', array('selector'=> 'div.EduschoolFooter', // You can also select a css class
      ));

    /** footer Contact */
    $wp_customize->add_setting('FooterContactRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterContactRequired',
        array('label'=> __('Footer Contact Info Required', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactRequired'
        )));

    $wp_customize->add_setting('FooterContactTitle', array('default'=> 'Contact Info',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterContactTitle',
        array('label'=> __('Footer Contact Title', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactTitle'
        )));

    // Footer Contact Address starts
    $wp_customize->add_setting('FooterContactAddressRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterContactAddressRequired',
        array('label'=> __('Footer Contact Address Required', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactAddressRequired'
        )));

    $wp_customize->add_setting('FooterContactAddress', array('default'=> 'Address : Edu School, 10001, 5th Avenue, #06 lane street, NY - 62617.',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterContactAddress',
        array('label'=> __('Footer Contact Address', 'w3layouts'),
          'section'=> 'Footer',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));

    // Footer Contact Address ends

    // Footer Contact Phone Number starts

    $wp_customize->add_setting('FooterContactNumberRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterContactNumberRequired',
        array('label'=> __('Footer Phone Number Required', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactNumberRequired'
        )));

    $wp_customize->add_setting('FooterContactPhoneTitle', array('default'=> 'Phone Number :',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterContactPhoneTitle',
        array('label'=> __('Phone Number Title', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactPhoneTitle'
        )));

    $wp_customize->add_setting('FooterContactPhone', array('default'=> '+1(21) 234 4567',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterContactPhone',
        array('label'=> __('Phone Number', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactPhone'
        )));

    $wp_customize->add_setting('FooterContactPhoneURL', array('default'=> 'tel:+1(21) 234 4567',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterContactPhoneURL',
        array('label'=> __('Phone Number URL ', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactPhoneURL'
        )));

    // Footer Contact Phone Number ends

    // Footer Contact Email starts

    $wp_customize->add_setting('FooterOfficialEmailRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterOfficialEmailRequired',
        array('label'=> __('Footer Official Email Required', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterOfficialEmailRequired'
        )));

    $wp_customize->add_setting('FooterOfficialEmailTitle', array('default'=> 'Email :',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterOfficialEmailTitle',
        array('label'=> __('Footer Official Email Title', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterOfficialEmailTitle'
        )));

    $wp_customize->add_setting('FooterOfficialEmail', array('default'=> 'info@example.com',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterOfficialEmail',
        array('label'=> __('Official Email', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterOfficialEmail'
        )));

    $wp_customize->add_setting('FooterOfficialEmailURL', array('default'=> 'mailto:info@example.com',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterOfficialEmailURL',
        array('label'=> __('Official Email URL ', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterOfficialEmailURL'
        )));

    // Footer Contact Email ends





    $wp_customize->add_setting('FooterMenu1TitleRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterMenu1TitleRequired',
        array('label'=> __('Footer Menu1 Title Required', 'w3layouts'),
          'section'=> 'FooterMenuTitles',
          'settings'=> 'FooterMenu1TitleRequired'
        )));
    $wp_customize->selective_refresh->add_partial('FooterMenu1TitleRequired', array('selector'=> 'h6.FooterMenu1Title', // You can also select a css class
      ));

    $wp_customize->add_setting('FooterMenu1Title', array('default'=> 'Quick Links',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterMenu1Title',
        array('label'=> __('Footer Menu1 Title', 'w3layouts'),
          'section'=> 'FooterMenuTitles',
          'settings'=> 'FooterMenu1Title'
        )));


    $wp_customize->add_setting('FooterMenu2TitleRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterMenu2TitleRequired',
        array('label'=> __('Footer Menu2 Title Required', 'w3layouts'),
          'section'=> 'FooterMenuTitles',
          'settings'=> 'FooterMenu2TitleRequired'
        )));
    $wp_customize->selective_refresh->add_partial('FooterMenu2TitleRequired', array('selector'=> 'h6.FooterMenu2Title', // You can also select a css class
      ));

    $wp_customize->add_setting('FooterMenu2Title', array('default'=> 'Explore',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterMenu2Title',
        array('label'=> __('Footer Menu2 Title', 'w3layouts'),
          'section'=> 'FooterMenuTitles',
          'settings'=> 'FooterMenu2Title'
        )));



    // Footer subscribe starts
    $wp_customize->add_setting('FooterSubscribeRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterSubscribeRequired',
        array('label'=> __('Footer Subscrie Required', 'w3layouts'),
          'section'=> 'FooterSubscribe',
          'settings'=> 'FooterSubscribeRequired',
          'priority'=> 1)));
    $wp_customize->selective_refresh->add_partial('FooterSubscribeRequired', array('selector'=> 'div.FooterSubscribe', // You can also select a css class
      ));

    $wp_customize->add_setting('FooterSubscribeTitle', array('default'=> 'Subscribe',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterSubscribeTitle',
        array('label'=> __('Footer Subscrie Title', 'w3layouts'),
          'section'=> 'FooterSubscribe',
          'settings'=> 'FooterSubscribeTitle'
        )));

    $wp_customize->add_setting('FooterSubscribePara', array('default'=> 'Subscribe to our mailing list and get updates to your email inbox.',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterSubscribePara',
        array('label'=> __('Footer Subscrie Para', 'w3layouts'),
          'section'=> 'FooterSubscribe',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));
        
    $wp_customize->add_setting('MailingURL', array('default'=> '',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'MailingURL',
        array('label'=> __('Mailing list URL', 'w3layouts'),
          'section'=> 'FooterNewsletterSection',
          'description'=> __('mailing list Form action url of mailchimp or other similar services Eg: https://fleximc.us20.list-manage.com/subscribe/post?u=XXXXXXX&id=XXXXXXX'),
          'settings'=> 'MailingURL'
        )));

    $wp_customize->add_setting('FooterNewsletterFormEmailInput', array('default'=> "email",
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterNewsletterFormEmailInput',
        array('label'=> __('Newsletter Email Name', 'w3layouts'),
          'section'=> 'FooterNewsletterSection',
          'settings'=> 'FooterNewsletterFormEmailInput',
        )));

    $wp_customize->add_setting('FooterNewsletterFormEmailPlaceHolder', array('default'=> "Email Address",
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterNewsletterFormEmailPlaceHolder',
        array('label'=> __('Newsletter Email Placeholder', 'w3layouts'),
          'section'=> 'FooterNewsletterSection',
          'settings'=> 'FooterNewsletterFormEmailPlaceHolder',
        )));

    $wp_customize->add_setting('FooterNewsletterFormBtn', array('default'=> "fa fa-paper-plane",
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterNewsletterFormBtn',
        array('label'=> __('Newsletter Button Icon', 'w3layouts'),
          'section'=> 'FooterNewsletterSection',
          'settings'=> 'FooterNewsletterFormBtn',
        )));

    // Footer subscribe ends

    /** Copyright Section footer**/
    $wp_customize->add_setting('FooterCopyrightRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterCopyrightRequired',
        array('label'=> __('Copyright Section Required', 'w3layouts'),
          'section'=> 'FooterCopyRight',
          'settings'=> 'FooterCopyrightRequired',
          'priority'=> 1)));
    $wp_customize->selective_refresh->add_partial('FooterCopyrightRequired', array('selector'=> 'p.CopyRights', // You can also select a css class
      ));

    $wp_customize->add_setting('FooterCopyrightSiteName', array('default'=> 'Edu School.',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterCopyrightSiteName',
        array('label'=> __('Site Name', 'w3layouts'),
          'section'=> 'FooterCopyRight',
          'settings'=> 'FooterCopyrightSiteName'
        )));
    $wp_customize->add_setting('FooterCopyrightAllRights', array('default'=> 'All Rights Reserved |',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterCopyrightAllRights',
        array('label'=> __(' Text All rights Reserved', 'w3layouts'),
          'section'=> 'FooterCopyRight',
          'settings'=> 'FooterCopyrightAllRights'
        )));


    /** Designed by Section footer**/
    $wp_customize->add_setting('FooterDesignedByRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterDesignedByRequired',
        array('label'=> __('DesignedBy Required', 'w3layouts'),
          'section'=> 'FooterCopyRight',
          'settings'=> 'FooterDesignedByRequired'
        )));

    $wp_customize->add_setting('FooterCopyrightThemeBy', array('default'=> 'WordPress Theme by',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterCopyrightThemeBy',
        array('label'=> __(' Copyright Theme By', 'w3layouts'),
          'section'=> 'FooterCopyRight',
          'settings'=> 'FooterCopyrightThemeBy'
        )));

    $wp_customize->add_setting('FooterCopyrightName', array('default'=> 'W3Layouts',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterCopyrightName',
        array('label'=> __(' Copyright name', 'w3layouts'),
          'section'=> 'FooterCopyRight',
          'settings'=> 'FooterCopyrightName'
        )));
    $wp_customize->add_setting('FooterCopyrightURL', array('default'=> 'https://w3layouts.com/',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterCopyrightURL',
        array('label'=> __(' Copyright URL', 'w3layouts'),
          'section'=> 'FooterCopyRight',
          'settings'=> 'FooterCopyrightURL'
        )));

    /** Designed by Section footer**/
    // $wp_customize->add_setting('FooterDesignedByRequired',
    //   array('default'=> 1,
    //     'transport'=> 'refresh',
    //     'sanitize_callback'=> 'skyrocket_switch_sanitization'
    //   ));
    // $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterDesignedByRequired',
    //     array('label'=> __('Designed by Section Required', 'w3layouts'),
    //       'section'=> 'FooterCopyRight',
    //       'settings'=> 'FooterDesignedByRequired'

    //     )));


  }

}