<?php
/**
 * w3layouts Theme ContactUS page Customizer
 *
 * @package w3layouts
 */

$w3layouts_Contact_settings=new w3layouts_Contact_customizer_settings();

class w3layouts_Contact_customizer_settings {
  // Get our default values
  // private $defaults;

  public function __construct() {
    // add_action( 'customize_register', array( $this, 'w3layouts_about_cust_register' ) );
    add_action('customize_register', array($this, 'w3layouts_Contactpage_panels'));



  }

  public function w3layouts_Contactpage_panels($wp_customize) {
    /**
     * Add our Header & Navigation Panel
     */
    $wp_customize->add_panel('ContactPage_panel',
      array('title'=> __('Contact Page Customize', 'w3layouts'),
        'priority'=> 30,
        'description'=> esc_html__('add and update Contact Page data.', 'w3layouts')));

    $wp_customize->add_section('ContactPageBannerSection',
      array('title'=> __('Section 1 Contact Banner', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'ContactPage_panel'
      ));

    $wp_customize->add_section('ContactPageSection',
      array('title'=> __('Contact Page Section', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'ContactPage_panel'
      ));

    $wp_customize->add_section('ContactPageForm',
      array('title'=> __('Contact Page Form', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'ContactPage_panel'
      ));

    $wp_customize->add_section('ContactPageMap',
      array('title'=> __('Contact Page Map', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'ContactPage_panel'
      ));


    /** ContactPage Banner section starts **/

    $wp_customize->add_setting('ContactPageBannerBgImage',
      array('default'=> '',
        'transport'=> 'refresh',
        'sanitize_callback'=> 'absint'
      ));
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ContactPageBannerBgImage',
        array('label'=> __('ContactPage Banner Bg Image'),
          'description'=> esc_html__(''),
          'section'=> 'ContactPageBannerSection',
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
    $wp_customize->selective_refresh->add_partial('ContactPageBannerBgImage', array('selector'=> 'div.ContactPageBanner', // You can also select a css class
      ));

    $wp_customize->add_setting('ContactPageMainTitleRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageMainTitleRequired',
        array('label'=> __('ContactPage MainTitle Required', 'w3layouts'),
          'section'=> 'ContactPageBannerSection',
          'settings'=> 'ContactPageMainTitleRequired'
        )));

    $wp_customize->add_setting('ContactBannerMainTitle', array('default'=> 'Contact Us',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactBannerMainTitle',
        array('label'=> __('ContactPage Main Title', 'w3layouts'),
          'section'=> 'ContactPageBannerSection',
          'settings'=> 'ContactBannerMainTitle'
        )));
    /** ContactPage Banner section ends **/




    /** Contact page full section starts **/

    $wp_customize->add_setting('ContactPageRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageRequired',
        array('label'=> __('Contact Section required', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactPageRequired',
          'priority'=> 1)));
    $wp_customize->selective_refresh->add_partial('ContactPageRequired', array('selector'=> 'div.ContactSection', // You can also select a css class
      ));

    $wp_customize->add_setting('ContactTitle1', array('default'=> 'Get In Touch',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactTitle1',
        array('label'=> __('Contact section Titlle1', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactTitle1',
        )));

    $wp_customize->add_setting('ContactTitle2', array('default'=> 'Contact Us',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactTitle2',
        array('label'=> __('Contact section Titlle2', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactTitle2',
        )));

    /** Contactpage Form Required **/

    $wp_customize->add_setting('ContactPageFormRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageFormRequired',
        array('label'=> __('Contactpage Form Required', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormRequired'
        )));
    $wp_customize->selective_refresh->add_partial('ContactPageFormRequired', array('selector'=> 'div.ContactPageForm', // You can also select a css class
      ));

    $wp_customize->add_setting('ContactToEmail', array('default'=> 'contact@email-me.com',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactToEmail',
        array('label'=> __('Contact email address', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'description'=> __('Who should receive email when contact form submitted Eg: contact@email-me.com'),
          'settings'=> 'ContactToEmail'
        )));


    // $wp_customize->add_setting('ContactPageFormURL', array('default'=> 'https://app.hoverforms.com/SubmitForm/w3layouts',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'ContactPageFormURL',
    //     array('label'=> __('Form Action URL', 'w3layouts'),
    //       'section'=> 'ContactPageForm',
    //       'settings'=> 'ContactPageFormURL',
    //     )));

    $wp_customize->add_setting('ContactPageFormName', array('default'=> 'w3lName',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormName',
        array('label'=> __('Name field Name', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormName',
        )));

    $wp_customize->add_setting('ContactPageFormNameplaceholder', array('default'=> 'Your Name',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormNameplaceholder',
        array('label'=> __('Name field Placeholder', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormNameplaceholder',
        )));

    $wp_customize->add_setting('ContactPageFormEmail', array('default'=> 'w3lSender',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormEmail',
        array('label'=> __('Email field Name', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormEmail',
        )));

    $wp_customize->add_setting('ContactPageFormEmailplaceholder', array('default'=> 'Your Email',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormEmailplaceholder',
        array('label'=> __('Email field Placeholder', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormEmailplaceholder',
        )));

    $wp_customize->add_setting('ContactPageFormSubject', array('default'=> 'w3lSubject',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormSubject',
        array('label'=> __('Subject field Name', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormSubject',
        )));

    $wp_customize->add_setting('ContactPageFormSubjectplaceholder', array('default'=> 'Subject',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormSubjectplaceholder',
        array('label'=> __('Subject field Placeholder', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormSubjectplaceholder',
        )));

    $wp_customize->add_setting('ContactPageFormWebsite', array('default'=> 'w3lWebsite',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormWebsite',
        array('label'=> __('Website field Name', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormWebsite',
        )));

    $wp_customize->add_setting('ContactPageFormWebsiteplaceholder', array('default'=> 'Website',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormWebsiteplaceholder',
        array('label'=> __('Website field Placeholder', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormWebsiteplaceholder',
        )));

    $wp_customize->add_setting('ContactPageFormMessage', array('default'=> 'w3lMessage',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormMessage',
        array('label'=> __('Message field Name', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormMessage',
        )));

    $wp_customize->add_setting('ContactPageFormMessageplaceholder', array('default'=> 'Type your message here',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormMessageplaceholder',
        array('label'=> __('Message field Placeholder', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormMessageplaceholder',
        )));

    $wp_customize->add_setting('ContactPageFormBtn', array('default'=> 'Send Message',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormBtn',
        array('label'=> __('Button Text', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormBtn',
        )));

    /** Contactpage Form Required **/

    /** Contactpage Details Required **/

    $wp_customize->add_setting('ContactDetailsRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactDetailsRequired',
        array('label'=> __('Contact Details Required', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactDetailsRequired'
        )));

    $wp_customize->add_setting('ContactPageAddressRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageAddressRequired',
        array('label'=> __('Contact Address required', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactPageAddressRequired'
        )));

    $wp_customize->add_setting('ContactAddressIcon', array('default'=> 'fas fa-building',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactAddressIcon',
        array('label'=> __('Contact Address Icon', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactAddressIcon',
        )));

    $wp_customize->add_setting('ContactAddressTitle', array('default'=> "Company Address",
        'transport'=> 'refresh',
      ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactAddressTitle',
        array('label'=> __('Contact Address Title', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactAddressTitle'
        )));

    $wp_customize->add_setting('ContactAddress', array('default'=> 'Edu School, 10001, 5th Avenue, 12202 street, London.',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactAddress',
        array('label'=> __('Contact Address', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));

    $wp_customize->add_setting('ContactPageNumberRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));

    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageNumberRequired',
        array('label'=> __('Contact Number required', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactPageNumberRequired'
        )));

    $wp_customize->add_setting('ContactPhoneIcon', array('default'=> 'fas fa-phone-alt',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPhoneIcon',
        array('label'=> __('Contact Phone Number Icon', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactPhoneIcon'
        )));

    $wp_customize->add_setting('ContactNumberTitle', array('default'=> 'Call Us',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactNumberTitle',
        array('label'=> __('Contact Phone Number Title', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactNumberTitle'
        )));

    $wp_customize->add_setting('ContactNumber', array('default'=> '+1(21) 234 4567',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactNumber',
        array('label'=> __('Contact Phone Number', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactNumber'
        )));

    $wp_customize->add_setting('ContactNumberUrl', array('default'=> 'tel:+1(21) 112 7368',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactNumberUrl',
        array('label'=> __('Contact Phone Number URL', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactNumberUrl'
        )));

    $wp_customize->add_setting('ContactPageOfficialRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageOfficialRequired',
        array('label'=> __('Official Mail required', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactPageOfficialRequired'
        )));

    $wp_customize->add_setting('ContactMailIcon', array('default'=> 'fas fa-envelope-open-text',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactMailIcon',
        array('label'=> __('Contact Mail Icon', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactMailIcon'
        )));

    $wp_customize->add_setting('ContactMailTitle', array('default'=> 'Email Us',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactMailTitle',
        array('label'=> __('Contact Mail Title', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactMailTitle'
        )));

    $wp_customize->add_setting('ContactOfficialMailtxt', array('default'=> 'example@mail.com',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactOfficialMailtxt',
        array('label'=> __('Contact Mail ID', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactOfficialMailtxt'
        )));

    $wp_customize->add_setting('ContactOfficialMailUrl', array('default'=> 'example@mail.com',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactOfficialMailUrl',
        array('label'=> __('Contact Mail ID URL', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactOfficialMailUrl'
        )));


    $wp_customize->add_setting('ContactPageSupportRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageSupportRequired',
        array('label'=> __('Support Mail required', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactPageSupportRequired'
        )));

    $wp_customize->add_setting('ContactMailIcon', array('default'=> 'fas fa-envelope-open-text',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactMailIcon',
        array('label'=> __('Contact Mail Icon', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactMailIcon'
        )));

    $wp_customize->add_setting('ContactSupportTitle', array('default'=> 'Customer Support',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactSupportTitle',
        array('label'=> __('Contact Support Title', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactSupportTitle'
        )));

    $wp_customize->add_setting('ContactSupportMailtxt', array('default'=> 'info@support.com',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactSupportMailtxt',
        array('label'=> __('Suppport MailID', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactSupportMailtxt'
        )));

    $wp_customize->add_setting('ContactSupportMailUrl', array('default'=> 'info@support.com',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactSupportMailUrl',
        array('label'=> __('Suppport MailID URL', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactSupportMailUrl'
        )));


    // Contact Page top & bottom  textarea

    $wp_customize->add_setting('ContactPageTopArea', array('default'=> '',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageTopArea',
        array('label'=> __('Contact Top', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));

    $wp_customize->add_setting('ContactPageBottomArea', array('default'=> '',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageBottomArea',
        array('label'=> __('Contact Bottom', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));

    // Contact Page top & bottom  textarea

    /** Contact page full section ends **/



    /** Contact page Map starts **/

    $wp_customize->add_setting('ContactPageMapRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageMapRequired',
        array('label'=> __('Contact Map required', 'w3layouts'),
          'section'=> 'ContactPageMap',
          'settings'=> 'ContactPageMapRequired'
        )));
    $wp_customize->selective_refresh->add_partial('ContactPageMapRequired', array('selector'=> 'div.ContactPageMap', // You can also select a css class
      ));

    $wp_customize->add_setting('ContactPageMapURL', array('default'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageMapURL',
        array('label'=> __('Map URL', 'w3layouts'),
          'section'=> 'ContactPageMap',
          'settings'=> 'ContactPageMapURL',
        )));

    // Contact Page Map top & bottom  textarea

    $wp_customize->add_setting('ContactPageMapTopArea', array('default'=> '',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageMapTopArea',
        array('label'=> __('ContactMap Top', 'w3layouts'),
          'section'=> 'ContactPageMap',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));

    $wp_customize->add_setting('ContactPageMapBottomArea', array('default'=> '',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageMapBottomArea',
        array('label'=> __('ContactMap Bottom', 'w3layouts'),
          'section'=> 'ContactPageMap',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));

    // Contact Page Map top & bottom  textarea

    /** Contact page Map ends **/

  }

}