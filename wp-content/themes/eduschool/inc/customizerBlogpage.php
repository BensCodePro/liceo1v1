<?php
/**
 * w3layouts Theme  Customizer
 *
 * @package w3layouts
 */

$w3layouts_Blog_settings=new w3layouts_Blog_customizer_settings();

class w3layouts_Blog_customizer_settings {
  // Get our default values
  // private $defaults;

  public function __construct() {
    // add_action( 'customize_register', array( $this, 'w3layouts_Blog_cust_register' ) );
    add_action('customize_register', array($this, 'w3layouts_Blogpage_panels'));

  }

  public function w3layouts_Blogpage_panels($wp_customize) {
    /**
 		 * Add our Header & Navigation Panel
 		 */
    $wp_customize->add_panel('BlogPage_panel',
      array('title'=> __('Blog Customize', 'w3layouts'),
        'priority'=> 30,
        'description'=> esc_html__('Custommize Blog Look and feel.', 'w3layouts')));

    $wp_customize->add_section('BlogPageBannerSection',
      array('title'=> __('Section 1 BlogPage Banner', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));

    $wp_customize->add_section('BlogSinglePageBannerSection',
      array('title'=> __('Section 1 BlogSinglePage Banner', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));

    $wp_customize->add_section('BlogSingleMainTitleSection',
      array('title'=> __('Section 1 BlogSingle Title', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));

    $wp_customize->add_section('BlogHomePageSection',
      array('title'=> __('Section 2 BlogPage', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));

    $wp_customize->add_section('BlogBlogSinglePageSection',
      array('title'=> __('Section 2 BlogPage', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));

    $wp_customize->add_section('BlogArticle',
      array('title'=> __('Section 4 Article Page', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));
    $wp_customize->add_section('BlogComments',
      array('title'=> __('Section 5 Comments Section', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));
    // $wp_customize->add_section( 'BlogPageCounterSection',
    // 	array(
    // 		'title' => __( 'Section 4 Counter', 'w3layouts' ),
    // 		'description' => esc_html__( '', 'w3layouts' ),
    // 		'panel' => 'BlogPage_panel'
    // 	)
    // );
    // $wp_customize->add_section( 'BlogPageTeamSection',
    // 	array(
    // 		'title' => __( 'Section 5 Team', 'w3layouts' ),
    // 		'description' => esc_html__( '', 'w3layouts' ),
    // 		'panel' => 'BlogPage_panel'
    // 	)
    // );
    // $wp_customize->add_section( 'BlogPageTestimonialSection',
    // 	array(
    // 		'title' => __( 'Section 6 Testimonial', 'w3layouts' ),
    // 		'description' => esc_html__( '', 'w3layouts' ),
    // 		'panel' => 'BlogPage_panel'
    // 	)
    // );
    //
    // $wp_customize->add_section( 'BlogPageCertiSection',
    // 	array(
    // 		'title' => __( 'Section 7 Certification', 'w3layouts' ),
    // 		'description' => esc_html__( '', 'w3layouts' ),
    // 		'panel' => 'BlogPage_panel'
    // 	)
    // );


    /** BlogPage Banner section starts **/

    $wp_customize->add_setting('BlogPageBannerBgImage',
      array('default'=> '',
        'transport'=> 'refresh',
        'sanitize_callback'=> 'absint'
      ));
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'BlogPageBannerBgImage',
        array('label'=> __('BlogPage Banner Bg Image'),
          'description'=> esc_html__(''),
          'section'=> 'BlogPageBannerSection',
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
    $wp_customize->selective_refresh->add_partial('BlogPageBannerBgImage', array('selector'=> 'div.BlogPageBanner', // You can also select a css class
      ));

    $wp_customize->add_setting('BlogPageMainTitleRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogPageMainTitleRequired',
        array('label'=> __('BlogPage MainTitle Required', 'w3layouts'),
          'section'=> 'BlogPageBannerSection',
          'settings'=> 'BlogPageMainTitleRequired'
        )));

    $wp_customize->add_setting('BlogPageBannerMainTitle', array('default'=> 'Blog Posts',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'BlogPageBannerMainTitle',
        array('label'=> __('BlogPage Main Title', 'w3layouts'),
          'section'=> 'BlogPageBannerSection',
          'settings'=> 'BlogPageBannerMainTitle'
        )));
    /** BlogPage Banner section ends **/


    /** BlogSinglePage Banner section starts **/

    $wp_customize->add_setting('BlogSinglePageBannerBgImage',
      array('default'=> '',
        'transport'=> 'refresh',
        'sanitize_callback'=> 'absint'
      ));
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'BlogSinglePageBannerBgImage',
        array('label'=> __('BlogSinglePage Banner Bg Image'),
          'description'=> esc_html__(''),
          'section'=> 'BlogSinglePageBannerSection',
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
    $wp_customize->selective_refresh->add_partial('BlogSinglePageBannerBgImage', array('selector'=> 'div.BlogSinglePageBanner', // You can also select a css class
      ));

    $wp_customize->add_setting('BlogSinglePageMainTitleRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogSinglePageMainTitleRequired',
        array('label'=> __('BlogSinglePage MainTitle Required', 'w3layouts'),
          'section'=> 'BlogSinglePageBannerSection',
          'settings'=> 'BlogSinglePageMainTitleRequired'
        )));

    $wp_customize->add_setting('BlogSinglePageBannerMainTitle', array('default'=> 'Blog Single',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'BlogSinglePageBannerMainTitle',
        array('label'=> __('BlogSinglePage Main Title', 'w3layouts'),
          'section'=> 'BlogSinglePageBannerSection',
          'settings'=> 'BlogSinglePageBannerMainTitle'
        )));
    /** BlogSinglePage Banner section ends **/




    /** Blogpage Home Page Grid  should be here**/
   
    $wp_customize->add_control(new Skyrocket_Image_Radio_Button_Custom_Control($wp_customize, 'BlogHomePostsLayout',
        array('label'=> __('Article Layout settings', 'w3layouts'),
          'description'=> esc_html__('with or without sidebar, left or right', 'w3layouts'),
          'section'=> 'BlogHomePageSection',
          'choices'=> array('sidebarleft'=> array('image'=> trailingslashit(get_template_directory_uri()) . 'inc/customizer/images/sidebar-left.png',
              'name'=> __('LeftSidebar', 'w3layouts')),
            'sidebarnone'=> array('image'=> trailingslashit(get_template_directory_uri()) . 'inc/customizer/images/sidebar-none.png',
              'name'=> __('NoSidebar', 'w3layouts')),
            'sidebarright'=> array('image'=> trailingslashit(get_template_directory_uri()) . 'inc/customizer/images/sidebar-right.png',
              'name'=> __('RightSidebar', 'w3layouts'))))));
    $wp_customize->selective_refresh->add_partial('BlogHomePostsLayout', array('selector'=> 'div.BlogHomeLayout', // You can also select a css class
      ));

    $wp_customize->add_setting('BlogHomePostAuthRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogHomePostAuthRequired',
        array('label'=> __('Author Required', 'w3layouts'),
          'section'=> 'BlogHomePageSection',
          'settings'=> 'BlogHomePostAuthRequired'
        )));

    $wp_customize->add_setting('BlogHomePostDateRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogHomePostDateRequired',
        array('label'=> __('Post Date Required', 'w3layouts'),
          'section'=> 'BlogHomePageSection',
          'settings'=> 'BlogHomePostDateRequired'
        )));


    /** Blog Article single page  other here**/

  
    $wp_customize->add_control(new Skyrocket_Image_Radio_Button_Custom_Control($wp_customize, 'w3layoutsArticleLayout',
        array('label'=> __('Article Layout settings', 'w3layouts'),
          'description'=> esc_html__('with or without sidebar, left or right', 'w3layouts'),
          'section'=> 'BlogArticle',
          'choices'=> array('sidebarleft'=> array('image'=> trailingslashit(get_template_directory_uri()) . 'inc/customizer/images/sidebar-left.png',
              'name'=> __('LeftSidebar', 'w3layouts')),
            'sidebarnone'=> array('image'=> trailingslashit(get_template_directory_uri()) . 'inc/customizer/images/sidebar-none.png',
              'name'=> __('NoSidebar', 'w3layouts')),
            'sidebarright'=> array('image'=> trailingslashit(get_template_directory_uri()) . 'inc/customizer/images/sidebar-right.png',
              'name'=> __('RightSidebar', 'w3layouts'))))));
    $wp_customize->selective_refresh->add_partial('w3layoutsArticleLayout', array('selector'=> 'div.w3BlogLayout', // You can also select a css class
      ));





    $wp_customize->add_setting('BlogArticleAuthorCardRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogArticleAuthorCardRequired',
        array('label'=> __('Author Card Below Article', 'w3layouts'),
          'section'=> 'BlogArticle',
          'settings'=> 'BlogArticleAuthorCardRequired'
        )));
    $wp_customize->selective_refresh->add_partial('BlogArticleAuthorCardRequired', array('selector'=> 'div.w3ArticleAuth', // You can also select a css class
      ));



    /** Blogpage breadcrumbs section **/
    $wp_customize->add_setting('PostCommentSectionRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'PostCommentSectionRequired',
        array('label'=> __('Comments Required', 'w3layouts'),
          'section'=> 'BlogComments',
          'settings'=> 'PostCommentSectionRequired',
          'priority'=> 1)));
    $wp_customize->selective_refresh->add_partial('PostCommentSectionRequired', array('selector'=> 'div.w3PostComments', // You can also select a css class
      ));

    // $wp_customize->add_setting( 'sample_default_dropdownpages',
    //    array(
    //       'default' => '1548',
    //       'transport' => 'refresh',
    //       'sanitize_callback' => 'absint'
    //    )
    // );
    //
    // $wp_customize->add_control( 'sample_default_dropdownpages',
    //    array(
    //       'label' => __( 'Default Dropdown Pages Control' ),
    //       'description' => esc_html__( 'Sample description' ),
    //       'section' => 'BlogArticle',
    //       'priority' => 10, // Optional. Order priority to load the control. Default: 10
    //       'type' => 'dropdown-pages',
    //       'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    //    )
    // );

  }

}