<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package w3layouts
 */

?>




<div class="page-content">

  <div class="container py-5">
    <div class="row BlogHomeLayout">

      <?php	$BlogHomePostsLayout=get_theme_mod( "BlogHomePostsLayout");
  // echo 'Article Layout : '.$w3layoutsArticleLayout;
  ?>

      <?php	if($BlogHomePostsLayout=='sidebarleft'){ get_sidebar(); }?>
      <?php
  if($BlogHomePostsLayout!='sidebarnone'){?>

      <div class="col-lg-8 w3l-blog-block-5 pr-lg-4">
        <?php }
    if($BlogHomePostsLayout=='sidebarnone'){?>
        <div class="col-lg-12 w3l-blog-block-5">

          <?php }  ?>

          <div class="row">

          <div class="col-lg-8">
            <header class="page-header">
              <h1 class="page-title mb-4"><?php esc_html_e( 'Nothing Found', 'w3layouts' ); ?></h1>
            </header><!-- .page-header -->

            <?php
                              if ( is_home() && current_user_can( 'publish_posts' ) ) :

                                printf(
                                  '<p>' . wp_kses(
                                    /* translators: 1: link to WP admin new post page. */
                                    __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'w3layouts' ),
                                    array(
                                      'a' => array(
                                        'href' => array(),
                                      ),
                                    )
                                  ) . '</p>',
                                  esc_url( admin_url( 'post-new.php' ) )
                                );

                              elseif ( is_search() ) :
                                ?>

            <p class="mb-3">
              <?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'w3layouts' ); ?>
            </p>

            <?php
                              get_search_form();

                              else :
                              ?>

            <p class="mb-3">
              <?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'w3layouts' ); ?>
            </p>
            <?php
                            get_search_form();

                            endif;
                            ?>

          </div>

        </div>
        </div>

        <?php 
						// if($BLOGlayoutselected==1){ get_sidebar(); }
            ?>

        <?php	if($BlogHomePostsLayout=='sidebarright'){ get_sidebar(); }?>

      </div>

    </div>
  </div>






  <?php global $wp_customize;
    if ( isset( $wp_customize ) ) { ?>

  <!-- Js scripts -->
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- //move top -->

  <!-- /counter-->
  <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/counter.js"></script>
  <!-- //counter-->

  <!-- theme switch js (light and dark)-->
  <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/theme-change.js"></script>
  <!-- //theme switch js (light and dark)-->

  <!-- MENU-JS -->
  <script>
    jQuery(window).on("scroll", function () {
      var scroll = jQuery(window).scrollTop();

      if (scroll >= 80) {
        jQuery("#site-header").addClass("nav-fixed");
      } else {
        jQuery("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    jQuery(".navbar-toggler").on("click", function () {
      jQuery("header").toggleClass("active");
    });
    jQuery(document).on("ready", function () {
      if (jQuery(window).width() > 991) {
        jQuery("header").removeClass("active");
      }
      jQuery(window).on("resize", function () {
        if (jQuery(window).width() > 991) {
          jQuery("header").removeClass("active");
        }
      });
    });
  </script>
  <!-- //MENU-JS -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    jQuery(function () {
      jQuery('.navbar-toggler').click(function () {
        jQuery('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- //disable body scroll which navbar is in active -->

  <!-- bootstrap -->
  <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap -->
  <!-- //Js scripts -->

  <?php }

get_footer(); ?>