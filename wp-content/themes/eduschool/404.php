<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package w3layouts
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="author" content="W3Layouts.com" />

	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
	<!-- google fonts -->

	<link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/style-liberty.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body id="top-gap-fixed-header" <?php body_class(); ?>>


<section>
    <?php echo get_theme_mod( "ErrorPageTopArea","" );?>
</section>

<main id="primary" class="site-main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <!-- 404 page -->

    <div class="w3l-error-page">
        <style>
            .w3l-error-page {

                background-image: url(<?php if(get_theme_mod('ErrorPageImage') !='') {
                    echo wp_get_attachment_url(get_theme_mod('ErrorPageImage'));
                }

                if(wp_get_attachment_url(get_theme_mod('ErrorPageImage'))=='') {
                    echo get_template_directory_uri()."/assets/images/error.jpg";
                }

                ?>);         
            }
        </style>
        <div class="container ErrorpageBlock">
            <div class="w3l-error-block text-center">
                <div class="content mx-auto position-relative" style="max-width:600px">
                    <h2><?php echo get_theme_mod( "ErrorPageTitle" );if(get_theme_mod( "ErrorPageTitle" )==''){echo "Oops!";}?></h2>
                    <h1><?php echo get_theme_mod( "ErrorPage404" );if(get_theme_mod( "ErrorPage404" )==''){echo "404";}?></h1>
                    <p class="text-white"><?php echo get_theme_mod( "ErrorPageContent","This page you are looking for might have been removed
                        had its name changed or temporarly unavailable." );?></p>
                    
                    <?php $ErrorPageSearchFormRequir = get_theme_mod( "ErrorPageSearchFormRequired","1")?>
                    <?php if( $ErrorPageSearchFormRequir==1 ){?>
                    <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" class="search-error position-relative mt-4 mx-auto"
                        style="max-width:450px">
                        <input type="search" class="search-input" name="s" placeholder="Search here.." required="">
                        <button class="btn error-btn"><span class="fa fa-search"></span></button>
                    </form>
                    <?php } ?>

                    <?php $ErrorPageBackBtnRequir = get_theme_mod( "ErrorPageBackBtnRequired","1")?>
                    <?php if( $ErrorPageBackBtnRequir==1 ){?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-style mt-5">
                        <?php echo get_theme_mod( "ErrorPageBackBtnTxt" );if(get_theme_mod( "ErrorPageBackBtnTxt" )==''){echo 'Back to Home';}?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- //404 page -->

    </article>
</main><!-- #main -->

<section>
    <?php echo get_theme_mod( "ErrorPageBottomArea","" );?>
</section>






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