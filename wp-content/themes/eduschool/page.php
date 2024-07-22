<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package w3layouts
 */

get_header();
?>




    <!-- inner banner -->
    <section class="inner-banner py-5">
        <style>
            .inner-banner {
                background-image: url(<?php if(get_theme_mod('AboutPageBannerBgImage') !='') {
                    echo wp_get_attachment_url(get_theme_mod('AboutPageBannerBgImage'));
                }

                if(wp_get_attachment_url(get_theme_mod('AboutPageBannerBgImage'))=='') {
                    echo get_template_directory_uri()."/assets/images/banner3.jpg";
                }

                ?>);
            }
        </style>
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container AboutPageBanner">

                <?php the_title( '<h4 class="inner-text-title font-weight-bold pt-5">', '</h4>' ); ?>

                <?php $BreadcrumbsStatus = get_theme_mod( "BreadcrumbsRequired","1")?>
                <?php if( $BreadcrumbsStatus==1 ){?>
                <ul class="breadcrumbs-custom-path AllBreadcrumbs">
                    <?php get_breadcrumb(); ?>
                </ul>
                <?php }?>
            </div>
        </div>
    </section>
    <!-- //inner banner -->
  

<div class="py-lg-3">
    <div class="container py-5">
        <main id="primary" class="site-main">

            <?php
            while ( have_posts() ) :
              the_post();

              get_template_part( 'template-parts/content', 'page' );

              // If comments are open or we have at least one comment, load up the comment template.
              // if ( comments_open() || get_comments_number() ) :
              // 	comments_template();
              // endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
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