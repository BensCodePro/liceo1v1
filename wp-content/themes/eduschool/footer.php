<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package w3layouts
 */

?>


<!-- footer -->
<?php $FooterStatus = get_theme_mod( "FooterRequired","1")?>
<?php if( $FooterStatus==1 ){?>
<footer class="w3l-footer-29-main">
    <div class="footer-29 pt-5 pb-4">
        <div class="container pt-md-4 EduschoolFooter">
            <div class="row footer-top-29">

                <?php $FooterContactStatus = get_theme_mod( "FooterContactRequired","1")?>
                <?php if( $FooterContactStatus==1 ){?>
                <div class="col-lg-4 col-md-6 footer-list-29">
                    <h6 class="footer-title-29">
                        <?php echo get_theme_mod( "FooterContactTitle" );if(get_theme_mod( "FooterContactTitle" )==''){echo 'Contact Info';}?> </h6>

                    <?php $FooterContactAddressStatus = get_theme_mod( "FooterContactAddressRequired","1")?>
                    <?php if( $FooterContactAddressStatus==1 ){?>
                    <p class="mb-2 pe-xl-5">
                        <?php echo get_theme_mod( "FooterContactAddress","Address : Edu School, 10001, 5th Avenue, #06 lane street, NY - 62617." );?>
                    </p>
                    <?php }?>

                    <?php $FooterContactNumberStatus = get_theme_mod( "FooterContactNumberRequired","1")?>
                    <?php if( $FooterContactNumberStatus==1 ){?>
                    <p class="mb-2">
                        <?php echo get_theme_mod( "FooterContactPhoneTitle" );if(get_theme_mod( "FooterContactPhoneTitle" )==''){echo 'Phone Number :';}?>
                        <a
                            href="<?php echo get_theme_mod( "FooterContactPhoneURL","tel:+1(21) 234 4567" ); ?>"><?php echo get_theme_mod( "FooterContactPhone" );if(get_theme_mod( "FooterContactPhone" )==''){echo '+1(21) 234 4567';}?></a>
                    </p>
                    <?php }?>

                    <?php $FooterOfficialEmailStatus = get_theme_mod( "FooterOfficialEmailRequired","1")?>
                    <?php if( $FooterOfficialEmailStatus==1 ){?>
                    <p class="mb-2">
                        <?php echo get_theme_mod( "FooterOfficialEmailTitle" );if(get_theme_mod( "FooterOfficialEmailTitle" )==''){echo 'Email :';}?>
                        <a
                            href="<?php echo get_theme_mod( "FooterOfficialEmailURL","mailto:info@example.com" ); ?>"><?php echo get_theme_mod( "FooterOfficialEmail" );if(get_theme_mod( "FooterOfficialEmail" )==''){echo 'info@example.com';}?></a>
                    </p>
                    <?php }?>
                </div>
                <?php }?>
                
                    <div class="col-lg-2 col-md-3 col-6 footer-list-29 mt-md-0 mt-4">

                 <?php $FooterMenu1TitleStatus = get_theme_mod( "FooterMenu1TitleRequired","1")?>

                 <?php if( $FooterMenu1TitleStatus==1 ){?>

                 <h6 class="footer-title-29 FooterMenu1Title">

               <?php echo get_theme_mod( "FooterMenu1Title" ); if(get_theme_mod( "FooterMenu1Title" )==''){echo 'Quick Links'  ;}?></h6>

                 <?php }?>



                        <?php 

               if(is_active_sidebar('footer-menu-list-1')){ 

                     dynamic_sidebar('footer-menu-list-1'); 

               } 

                  ?>
              <!-- Add your links here -->

            <ul>


               <li><a href="http://localhost/liceo1/2024/07/18/noticias/"></a>Eventos</li>
               <li><a href="http://localhost/liceo1/2021/11/11/noticias-dos/">Talleres</a></li>
               <li><a href="http://localhost/liceo1/2021/11/11/how-technology-can-make-reading-better/">Comunidad</a></li>

         </ul>

        </div>

                <div class="col-lg-2 col-md-3 col-6 ps-lg-5 ps-lg-4 footer-list-29 mt-md-0 mt-4">

                    <?php $FooterMenu2TitleStatus = get_theme_mod( "FooterMenu2TitleRequired","1")?>
                    <?php if( $FooterMenu2TitleStatus==1 ){?>
                    <h6 class="footer-title-29 FooterMenu2Title">
                        <?php echo get_theme_mod( "FooterMenu2Title" ); if(get_theme_mod( "FooterMenu2Title" )==''){echo 'Nosotros';}?></h6>
                    <?php }?>

                    <?php
                        if(is_active_sidebar('footer-menu-list-2')){
                        dynamic_sidebar('footer-menu-list-2');
                        }
                    ?>

                     <!-- Add your links here -->

            <ul>
              <li><a href="http://localhost/liceo1/blog/">Eventos</a></li>
              <li><a href="http://localhost/liceo1/2021/11/11/noticias-dos/">Talleres</a></li>
              <li><a href="http://localhost/liceo1/2021/11/11/how-technology-can-make-reading-better/">Comunidad</a></li>

            </ul>

                </div>

                <?php $FooterSubscribeStatus = get_theme_mod( "FooterSubscribeRequired","1")?>
                <?php if( $FooterSubscribeStatus==1 ){?>
                <div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 mt-lg-0 mt-4 ps-lg-5 FooterSubscribe">
                    <h6 class="footer-title-29"><?php echo get_theme_mod( "FooterSubscribeTitle" ); if(get_theme_mod( "FooterSubscribeTitle" )==''){echo 'Subscribe';}?></h6>
                    <form action="<?php echo get_theme_mod( 'MailingURL', '');?>" class="subscribe d-flex" method="post">
                        <input type="email" name="<?php echo get_theme_mod( 'FooterNewsletterFormEmailInput', 'email');?>" placeholder="<?php echo get_theme_mod( 'FooterNewsletterFormEmailPlaceHolder', 'Email Address');?>" required="">
                        <button class="button-style"><span class="<?php echo get_theme_mod( "FooterNewsletterFormBtn" );if(get_theme_mod( "FooterNewsletterFormBtn" )==''){echo 'fa fa-paper-plane';}?>" aria-hidden="true"></span></button>
                    </form>
                    <p class="mt-3"><?php echo get_theme_mod( "FooterSubscribePara","Subscribe to our mailing list and get updates to your email inbox." );?></p>
                </div>
                <?php }?>

            </div>

            <!-- copyright -->
            <?php $FooterCRStatus = get_theme_mod( "FooterCopyrightRequired","1")?>
            <?php if( $FooterCRStatus==1 ){?>
            <p class="copy-footer-29 text-center pt-lg-2 mt-5 pb-2 CopyRights">&copy; <?php echo date('Y'); ?>
                <?php echo get_theme_mod( "FooterCopyrightSiteName", "Edu School." );?>
                <?php echo get_theme_mod( "FooterCopyrightAllRights", "All Rights Reserved |" );?>

                <?php $FooterDBStatus = get_theme_mod( "FooterDesignedByRequired","1")?>
                <?php if( $FooterDBStatus==1 ){?>
                <?php echo get_theme_mod( "FooterCopyrightThemeBy", "WordPress Theme by" );?>
                <a href="<?php echo get_theme_mod( "FooterCopyrightURL", "https://w3layouts.com/" );?>">
                    <?php echo get_theme_mod( "FooterCopyrightName", "W3Layouts." );?>
                </a>
                <?php }?>
            </p>
            <?php }?>
            <!-- //copyright -->

        </div>
    </div>
</footer>
<?php }?>
<!-- //footer -->




<?php global $wp_customize;
  if ( !isset( $wp_customize ) ) { ?>

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

<!-- common jquery plugin -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery-3.3.1.min.js"></script>
<!-- //common jquery plugin -->

<!-- /counter-->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/counter.js"></script>
<!-- //counter-->

<!-- theme switch js (light and dark)-->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/theme-change.js"></script>
<!-- //theme switch js (light and dark)-->

<!-- MENU-JS -->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //disable body scroll which navbar is in active -->

<!-- bootstrap -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<!-- //bootstrap -->
<!-- //Js scripts -->

<?php }?>

<?php wp_footer(); ?>

</body>

</html>