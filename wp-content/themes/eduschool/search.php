<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
            <?php $SearchPageMainTitleStatus = get_theme_mod( "SearchPageMainTitleRequired","1")?>
            <?php if( $SearchPageMainTitleStatus==1 ){?>
            <h4 class="inner-text-title font-weight-bold pt-5">
                <?php echo get_theme_mod( "SearchBannerMainTitle" );if(get_theme_mod( "SearchBannerMainTitle" )==''){echo 'Search Results';}?></h4>
            <?php }?>

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



<main id="primary" class="site-main">

    <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
    <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </header>
    <?php
			endif;
?>



    <section class="w3l-blogpost-content py-5">
        <div class="container pb-md-5 pb-4">
            <div class="row BlogHomeLayout">


                <header class="page-header">
                    <h1 class="title-small text-center mb-4">
                        <?php
      /* translators: %s: search query. */
      printf( esc_html__( 'Search Results for: %s', 'fleximc' ), '<span>' . get_search_query() . '</span>' );
      ?>
                    </h1>
                </header>

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


                            <?php
/* Start the Loop */
while ( have_posts() ) :
  the_post();

  /*
   * Include the Post-Type-specific template for the content.
   * If you want to override this in a child theme, then include a file
   * called content-___.php (where ___ is the Post Type name) and that will be used instead.
   */
  get_template_part( 'template-parts/content', get_post_type() );

endwhile;

// the_posts_navigation();

else :

get_template_part( 'template-parts/content', 'none' );

endif;
?>



                        </div>
                        <!-- pagination -->
                        <div class="pagination-wrapper mt-4">
                            <nav aria-label="Page navigation example">
                                <ul class="page-pagination d-flex">
                                    <?php w3layouts_pagination(); ?>
                                </ul>
                            </nav>
                        </div>

                        <!-- //pagination -->
                    </div>

                    <?php 
          // if($BLOGlayoutselected==1){ get_sidebar(); }
?>

                    <?php	if($BlogHomePostsLayout=='sidebarright'){ get_sidebar(); }?>

                </div>
            </div>


        </div>
    </section>
</main>





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