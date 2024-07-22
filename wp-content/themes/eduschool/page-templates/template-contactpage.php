<?php
/**
 * Template Name: Contact Page
 */
?>
<?php get_header(); ?>


<!-- inner banner -->
<section class="inner-banner py-5">
    <style>
        .inner-banner {
            background-image: url(<?php if(get_theme_mod('ContactPageBannerBgImage') !='') {
                echo wp_get_attachment_url(get_theme_mod('ContactPageBannerBgImage'));
            }

            if(wp_get_attachment_url(get_theme_mod('ContactPageBannerBgImage'))=='') {
                echo get_template_directory_uri()."/assets/images/banner3.jpg";
            }

            ?>);
        }
    </style>
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container ContactPageBanner">
            <?php $ContactPageMainTitleStatus = get_theme_mod( "ContactPageMainTitleRequired","1")?>
            <?php if( $ContactPageMainTitleStatus==1 ){?>
            <h4 class="inner-text-title font-weight-bold pt-5">
                <?php echo get_theme_mod( "ContactBannerMainTitle" );if(get_theme_mod( "ContactBannerMainTitle" )==''){echo 'Contactanos';}?></h4>
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




<!-- Contact section -->

<section>
    <?php echo get_theme_mod( "ContactPageTopArea","" );?>
</section>

<?php $ContactStatus = get_theme_mod( "ContactPageRequired","1")?>
<?php if( $ContactStatus==1 ){?>

<section class="w3l-contact py-5" id="contact">
    <div class="container py-md-5 py-4 ContactSection">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <p class="text-uppercase"><?php echo get_theme_mod( "ContactTitle1" );if(get_theme_mod( "ContactTitle1" )==''){echo 'Ponerse en contacto';}?></p>
            <h3 class="title-style"><?php echo get_theme_mod( "ContactTitle2" );if(get_theme_mod( "ContactTitle2" )==''){echo 'Contactanos';}?></h3>
        </div>
        <div class="row contact-block">

            <!-- contact-form -->
            <?php $ContactFormStatus = get_theme_mod( "ContactPageFormRequired","1")?>
            <?php if( $ContactFormStatus==1 ){?>

            <div class="col-md-7 contact-left ContactPageForm">
                <?php 
                //Logic of contact form will start here
                
                
                
                ?>
                

                <form action="<?php echo get_theme_mod( "ContactPageFormURL", "" );?>" method="post" class="signin-form">
                    <div class="input-grids">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="<?php echo get_theme_mod( "ContactPageFormName", "w3lName" );?>" id="w3lName"
                                    placeholder="<?php echo get_theme_mod( "ContactPageFormNameplaceholder", "Tu nombre" );?>" class="contact-input"
                                    required="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="<?php echo get_theme_mod( "ContactPageFormEmail", "w3lSender" );?>" id="w3lSender"
                                    placeholder="<?php echo get_theme_mod( "ContactPageFormEmailplaceholder", "Tu Correo" );?>" class="contact-input"
                                    required="" />
                            </div>
                        </div>

                        <input type="text" name="<?php echo get_theme_mod( "ContactPageFormSubject", "w3lSubject" );?>" id="w3lSubect"
                            placeholder="<?php echo get_theme_mod( "ContactPageFormSubjectplaceholder", "Temas" );?>" class="contact-input"
                            required="" />

                        <input type="text" name="<?php echo get_theme_mod( "ContactPageFormWebsite", "w3lWebsite" );?>" id="w3lWebsite"
                            placeholder="<?php echo get_theme_mod( "ContactPageFormWebsiteplaceholder", "Sitio Url" );?>" class="contact-input"
                            required="" />
                    </div>
                    <div class="form-input">
                        <textarea name="<?php echo get_theme_mod( "ContactPageFormMessage", "w3lMessage" );?>" id="w3lMessage"
                            placeholder="<?php echo get_theme_mod( "ContactPageFormMessageplaceholder", "Escribe tu mensaje aquí" );?>"
                            required=""></textarea>
                    </div>
                    <div class="text-start">
                        <button class="btn btn-style btn-style-3"><?php echo get_theme_mod( "ContactPageFormBtn", "Enviar mensaje" );?></button>
                    </div>
                </form>
            </div>
            <?php }?>

            <?php $ContactDetailsStatus = get_theme_mod( "ContactDetailsRequired","1")?>
            <?php if( $ContactDetailsStatus==1 ){?>
            <div class="col-md-5 ps-lg-5 mt-md-0 mt-5">
                <div class="contact-right">

                    <div class="cont-details">

                    <?php $ContactPageAddressStatus = get_theme_mod( "ContactPageAddressRequired","1")?>
                    <?php if( $ContactPageAddressStatus==1 ){?>
                        <div class="d-flex contact-grid">
                            <div class="cont-left text-center me-3">
                                <i class="<?php echo get_theme_mod( "ContactAddressIcon" );if(get_theme_mod( "ContactAddressIcon" )==''){echo 'fas fa-building';}?>"></i>
                            </div>
                            <div class="cont-right">
                                <h6><?php echo get_theme_mod( "ContactAddressTitle" );if(get_theme_mod( "ContactAddressTitle" )==''){echo 'Ubicación del Liceo';}?></h6>
                                <p><?php echo get_theme_mod( "ContactAddress","Liceo1, Region Metropolitana, Santiago Chile." );?></p>
                            </div>
                        </div>
                    <?php }?>

                    <?php $ContactNumberStatus = get_theme_mod( "ContactPageNumberRequired","1")?>
                    <?php if( $ContactNumberStatus==1 ){?>
                        <div class="d-flex contact-grid mt-4 pt-lg-2">
                            <div class="cont-left text-center me-3">
                                <i class="<?php echo get_theme_mod( "ContactPhoneIcon" );if(get_theme_mod( "ContactPhoneIcon" )==''){echo 'fas fa-phone-alt';}?>"></i>
                            </div>
                            <div class="cont-right">
                                <h6><?php echo get_theme_mod( "ContactNumberTitle" );if(get_theme_mod( "ContactNumberTitle" )==''){echo 'Llamanos';}?></h6>
                                <p><a href="<?php echo get_theme_mod( "ContactNumberUrl","tel:+569" ); ?>"><?php echo get_theme_mod( "ContactNumber" );if(get_theme_mod( "ContactNumber" )==''){echo '+569';}?></a></p>
                            </div>
                        </div>
                    <?php }?>

                    <?php $ContactOfficialStatus = get_theme_mod( "ContactPageOfficialRequired","1")?>
                    <?php if( $ContactOfficialStatus==1 ){?>
                        <div class="d-flex contact-grid mt-4 pt-lg-2">
                            <div class="cont-left text-center me-3">
                                <i class="<?php echo get_theme_mod( "ContactMailIcon" );if(get_theme_mod( "ContactMailIcon" )==''){echo 'fas fa-envelope-open-text';}?>"></i>
                            </div>
                            <div class="cont-right">
                                <h6><?php echo get_theme_mod( "ContactMailTitle" );if(get_theme_mod( "ContactMailTitle" )==''){echo 'Correo';}?></h6>
                                <p><a href="mailto:<?php echo get_theme_mod( "ContactOfficialMailUrl","example@mail.com" ); ?>" class="mail"><?php echo get_theme_mod( "ContactOfficialMailtxt" );if(get_theme_mod( "ContactOfficialMailtxt" )==''){echo 'example@mail.com';}?></a></p>
                            </div>
                        </div>
                    <?php }?>

                    <?php $ContactSupportStatus = get_theme_mod( "ContactPageSupportRequired","1")?>
                    <?php if( $ContactSupportStatus==1 ){?>
                        <div class="d-flex contact-grid mt-4 pt-lg-2">
                            <div class="cont-left text-center me-3">
                                <i class="<?php echo get_theme_mod( "ContactSupportIcon" );if(get_theme_mod( "ContactSupportIcon" )==''){echo 'fas fa-headphones-alt';}?>"></i>
                            </div>
                            <div class="cont-right">
                                <h6><?php echo get_theme_mod( "ContactSupportTitle" );if(get_theme_mod( "ContactSupportTitle" )==''){echo 'Correo de la inspectoría';}?></h6>
                                <p><a href="mailto:<?php echo get_theme_mod( "ContactSupportMailUrl","info@support.cl" ); ?>" class="mail"><?php echo get_theme_mod( "ContactSupportMailtxt" );if(get_theme_mod( "ContactSupportMailtxt" )==''){echo 'info@support.cl';}?></a></p>
                            </div>
                        </div>
                    <?php }?>

                    </div>

                </div>
            </div>
            <?php }?>

        </div>
    </div>
</section>
<?php }?>

<section>
    <?php echo get_theme_mod( "ContactPageBottomArea","" );?>
</section>

<!-- /contact-section -->


<!-- Contact Map section -->

<section>
    <?php echo get_theme_mod( "ContactPageMapBottomArea","" );?>
</section>

<?php $ContactMapStatus = get_theme_mod( "ContactPageMapRequired","1")?>
<?php if( $ContactMapStatus==1 ){?>
<div class="map ContactPageMap text-center">
    <iframe
        src="<?php echo get_theme_mod( "ContactPageMapURL", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" );?>"
        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
</div>
<?php }?>

<section>
    <?php echo get_theme_mod( "ContactPageMapBottomArea","" );?>
</section>
<!-- //Contact Map section -->




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