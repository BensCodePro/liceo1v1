<?php
/**
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>

<!-- Homepage Banner section -->
<section>
    <?php echo get_theme_mod( "HomePageBannerTopArea","" );?>
</section>

<?php $HomePageBannerRequir = get_theme_mod( "HomePageBannerRequired","1")?>
<?php if( $HomePageBannerRequir==1 ){?>
<section id="home" class="w3l-banner py-5">
    <style>
        .w3l-banner {
            background: url(<?php if(get_theme_mod('HomePageBannerBgImage') !='') {
                echo wp_get_attachment_url(get_theme_mod('HomePageBannerBgImage'));

            }

            if(wp_get_attachment_url(get_theme_mod('HomePageBannerBgImage'))=='') {
                echo get_template_directory_uri()."/assets/images/banner.jpg";
            }

            ?>);
        }
    </style>
    <div class="banner-content">
        <div class="container py-4 HomePageBanner">
            <div class="row align-items-center pt-sm-5 pt-4">
                <div class="col-md-6">
                    <h3 class="mb-lg-4 mb-3">
                        <?php echo get_theme_mod( "HomePageBannerTitle1" );if(get_theme_mod( "HomePageBannerTitle1" )==''){echo 'Your Kids Deserve The';}?><span
                            class="d-block"><?php echo get_theme_mod( "HomePageBannerTitle2" );if(get_theme_mod( "HomePageBannerTitle2" )==''){echo 'Best Education';}?></span>
                    </h3>
                    <p class="banner-sub"><?php echo get_theme_mod( "HomePageBannerContent","Active Learning, Expert Teachers & Safe Environment" );?>
                    </p>
                    <div class="d-flex align-items-center buttons-banner">
                        <a href="<?php echo get_theme_mod( "HomePageBannerBtnURL","#url" ); ?>"
                            class="btn btn-style mt-lg-5 mt-4"><?php echo get_theme_mod( "HomePageBannerBtnText" );if(get_theme_mod( "HomePageBannerBtnText" )==''){echo 'Admission Now';}?></a>
                    </div>
                </div>
                <div class="col-md-6 right-banner-2 text-end position-relative mt-md-0 mt-5">
                    <div class="sub-banner-image mx-auto">
                        <img src="<?php if(get_theme_mod('HomePageBannerImage')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageBannerImage') );} if(wp_get_attachment_url(get_theme_mod('HomePageBannerImage'))=='') { echo  get_template_directory_uri()."/assets/images/banner.png";  }?>"
                            class="img-fluid position-relative" alt=" ">
                    </div>
                    <div class="banner-style-1 position-absolute">
                        <div class="banner-style-2 position-relative">
                            <h4><?php echo get_theme_mod( "HomePageBannerImageTitle" );if(get_theme_mod( "HomePageBannerImageTitle" )==''){echo 'Back to School';}?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<section>
    <?php echo get_theme_mod( "HomePageBannerBottomArea","" );?>
</section>
<!-- //Homepage Banner section -->


<!-- HomePage Features -->

<section>
    <?php echo get_theme_mod( "HomePageFeaturesTopArea","" );?>
</section>

<?php $HomePageFeaturesRequir = get_theme_mod( "HomePageFeaturesRequired","1")?>
<?php if( $HomePageFeaturesRequir==1 ){?>
<section class="services-w3l-block py-5" id="features">
    <div class="container py-md-5 py-4 HomePageFeatures">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <p class="text-uppercase">
                <?php echo get_theme_mod( "HomePageFeaturesTitle1" );if(get_theme_mod( "HomePageFeaturesTitle1" )==''){echo 'Best Features';}?></p>
            <h3 class="title-style">
                <?php echo get_theme_mod( "HomePageFeaturesTitle2" );if(get_theme_mod( "HomePageFeaturesTitle2" )==''){echo 'Achieve Your Goals With Edu School';}?>
            </h3>
        </div>

        <div class="row justify-content-center">

            <?php $HomePageFeature1Requir = get_theme_mod( "HomePageFeature1Required","1")?>
            <?php if( $HomePageFeature1Requir==1 ){?>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                <div class="icon-box icon-box-clr-1">
                    <div class="icon"><i
                            class="<?php echo get_theme_mod( "HomePageFeature1Icon" );if(get_theme_mod( "HomePageFeature1Icon" )==''){echo 'fas fa-user-friends';}?>"></i>
                    </div>
                    <h4 class="title"><a
                            href="<?php echo get_theme_mod( "HomePageFeature1Url","#url" ); ?>"><?php echo get_theme_mod( "HomePageFeature1Title" );if(get_theme_mod( "HomePageFeature1Title" )==''){echo 'Expert Teachers';}?></a>
                    </h4>
                    <p><?php echo get_theme_mod( "HomePageFeature1Content","Ras effic itur metusga via suscipit consect eturerse adi unde omnis." );?>
                    </p>
                </div>
            </div>
            <?php } ?>

            <?php $HomePageFeature2Requir = get_theme_mod( "HomePageFeature2Required","1")?>
            <?php if( $HomePageFeature2Requir==1 ){?>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-md-0 mt-4">
                <div class="icon-box icon-box-clr-2">
                    <div class="icon"><i
                            class="<?php echo get_theme_mod( "HomePageFeature2Icon" );if(get_theme_mod( "HomePageFeature2Icon" )==''){echo 'fas fa-book-reader';}?>"></i>
                    </div>
                    <h4 class="title"><a
                            href="<?php echo get_theme_mod( "HomePageFeature2Url","#url" ); ?>"><?php echo get_theme_mod( "HomePageFeature2Title" );if(get_theme_mod( "HomePageFeature2Title" )==''){echo 'Quality Education';}?></a>
                    </h4>
                    <p><?php echo get_theme_mod( "HomePageFeature2Content","Ras effic itur metusga via suscipit consect eturerse adi unde omnis." );?>
                    </p>
                </div>
            </div>
            <?php } ?>

            <?php $HomePageFeature3Requir = get_theme_mod( "HomePageFeature3Required","1")?>
            <?php if( $HomePageFeature3Requir==1 ){?>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                <div class="icon-box icon-box-clr-3">
                    <div class="icon"><i
                            class="<?php echo get_theme_mod( "HomePageFeature3Icon" );if(get_theme_mod( "HomePageFeature3Icon" )==''){echo 'fas fa-user-graduate';}?>"></i>
                    </div>
                    <h4 class="title"><a
                            href="<?php echo get_theme_mod( "HomePageFeature3Url","#url" ); ?>"><?php echo get_theme_mod( "HomePageFeature3Title" );if(get_theme_mod( "HomePageFeature3Title" )==''){echo 'Life Time Support';}?></a>
                    </h4>
                    <p><?php echo get_theme_mod( "HomePageFeature3Content","Ras effic itur metusga via suscipit consect eturerse adi unde omnis." );?>
                    </p>
                </div>
            </div>
            <?php } ?>

            <?php $HomePageFeature4Requir = get_theme_mod( "HomePageFeature4Required","1")?>
            <?php if( $HomePageFeature4Requir==1 ){?>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                <div class="icon-box icon-box-clr-4">
                    <div class="icon"><i
                            class="<?php echo get_theme_mod( "HomePageFeature4Icon" );if(get_theme_mod( "HomePageFeature4Icon" )==''){echo 'fas fa-university';}?>"></i>
                    </div>
                    <h4 class="title"><a
                            href="<?php echo get_theme_mod( "HomePageFeature4Url","#url" ); ?>"><?php echo get_theme_mod( "HomePageFeature4Title" );if(get_theme_mod( "HomePageFeature4Title" )==''){echo 'Best Scholarships';}?></a>
                    </h4>
                    <p><?php echo get_theme_mod( "HomePageFeature4Content","Ras effic itur metusga via suscipit consect eturerse adi unde omnis." );?>
                    </p>
                </div>
            </div>
            <?php } ?>

        </div>

    </div>
</section>
<?php } ?>

<section>
    <?php echo get_theme_mod( "HomePageFeaturesBottomArea","" );?>
</section>

<!-- //HomePage Features -->



<!-- HomePage about section -->

<section>
    <?php echo get_theme_mod( "HomePageAboutTopArea","" );?>
</section>

<?php $HomePageAboutRequir = get_theme_mod( "HomePageAboutRequired","1")?>
<?php if( $HomePageAboutRequir==1 ){?>
<section class="w3l-servicesblock pt-lg-5 pt-4 pb-5 mb-lg-5" id="about">
    <div class="container pb-md-5 pb-4 HomePageAbout">
        <div class="row pb-xl-5 align-items-center">
            <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                <div class="position-relative">
                    <img src="<?php if(get_theme_mod('HomePageAboutImage')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageAboutImage') );} if(wp_get_attachment_url(get_theme_mod('HomePageAboutImage'))=='') { echo  get_template_directory_uri()."/assets/images/img1.jpg";  }?>"
                        alt="" class="img-fluid radius-image">
                </div>

                <?php $HomePageAboutGetAppointmentBlockRequir = get_theme_mod( "HomePageAboutGetAppointmentBlockRequired","1")?>
                <?php if( $HomePageAboutGetAppointmentBlockRequir==1 ){?>
                <div class="imginfo__box">
                    <h6 class="imginfo__title">
                        <?php echo get_theme_mod( "HomePageAboutGetAppointmentTitle" );if(get_theme_mod( "HomePageAboutGetAppointmentTitle" )==''){echo 'Get a Appointment Today!';}?>
                    </h6>
                    <p>
                        <?php echo get_theme_mod( "HomePageAboutGetAppointmentPara","Nemo enim ipsam oluptatem quia oluptas<br> sit aspernatur aut odit aut fugit." );?>
                    </p>
                    <a href="<?php echo get_theme_mod( "HomePageAboutPhoneURL","tel:1-800-654-3210" ); ?>"><i class="fas fa-phone-alt"></i>
                        <?php echo get_theme_mod( "HomePageAboutPhoneNumber" );if(get_theme_mod( "HomePageAboutPhoneNumber" )==''){echo '1-800-654-3210';}?></a>
                </div>
                <?php } ?>

            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                <h3 class="title-style">
                    <?php echo get_theme_mod( "HomePageAboutTitle1" );if(get_theme_mod( "HomePageAboutTitle1" )==''){echo 'Somos la mejor opción para su hijo';}?>
                </h3>
                <p class="mt-4"><?php echo get_theme_mod( "HomePageAboutContent","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit." );?></p>
                <ul class="mt-4 list-style-lis pt-lg-1">
                    <li><i
                            class="fas fa-check-circle"></i><?php echo get_theme_mod( "HomePageAboutListTitle1" );if(get_theme_mod( "HomePageAboutListTitle1" )==''){echo 'Special Education';}?>
                    </li>
                    <li><i
                            class="fas fa-check-circle"></i><?php echo get_theme_mod( "HomePageAboutListTitle2" );if(get_theme_mod( "HomePageAboutListTitle2" )==''){echo 'Access more then 100K online courses';}?>
                    </li>
                    <li><i
                            class="fas fa-check-circle"></i><?php echo get_theme_mod( "HomePageAboutListTitle3" );if(get_theme_mod( "HomePageAboutListTitle3" )==''){echo 'Traditional Academies';}?>
                    </li>
                </ul>
                <a href="<?php echo get_theme_mod( "HomePageAboutBtnURL","#url" ); ?>"
                    class="btn btn-style mt-5"><?php echo get_theme_mod( "HomePageAboutBtnText" );if(get_theme_mod( "HomePageAboutBtnText" )==''){echo 'Apply Now';}?></a>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<section>
    <?php echo get_theme_mod( "HomePageAboutBottomArea","" );?>
</section>

<!-- HomePage about section -->



<!-- HomePage Why Choose Us -->

<section>
    <?php echo get_theme_mod( "HomePageWCUTopArea","" );?>
</section>

<?php $HomePageWCUStatus = get_theme_mod( "HomePageWCURequired","1")?>
<?php if( $HomePageWCUStatus==1 ){?>
<section class="w3l-service-1 py-5">

    <div class="container py-md-5 py-4 HomePageWCU">

        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <p class="text-uppercase">
                <?php echo get_theme_mod( "HomePageWCUTitle1" );if(get_theme_mod( "HomePageWCUTitle1" )==''){echo 'Por qué elegirnos';}?></p>
            <h3 class="title-style">
                <?php echo get_theme_mod( "HomePageWCUTitle2" );if(get_theme_mod( "HomePageWCUTitle2" )==''){echo 'Herramientas para maestras y estudiantes';}?>
            </h3>
        </div>

        <div class="row content23-col-2 text-center">
            <div class="col-md-6">
                <div class="content23-grid content23-grid1">
                    <style>
                        .w3l-service-1 .content23-grid1 {
                            background: url(<?php if(get_theme_mod('HomePageWCUImage1') !='') {
                                echo wp_get_attachment_url(get_theme_mod('HomePageWCUImage1'));

                            }

                            if(wp_get_attachment_url(get_theme_mod('HomePageWCUImage1'))=='') {
                                echo get_template_directory_uri()."/assets/images/bg1.jpg";
                            }

                            ?>);
                        }
                    </style>
                    <h4><a
                            href="<?php echo get_theme_mod( "HomePageWCUImage1TitleURL","#url" ); ?>"><?php echo get_theme_mod( "HomePageWCUImage1Title" );if(get_theme_mod( "HomePageWCUImage1Title" )==''){echo 'Profesores expertos';}?></a>
                    </h4>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
                <div class="content23-grid content23-grid2">
                    <style>
                        .w3l-service-1 .content23-grid2 {
                            background: url(<?php if(get_theme_mod('HomePageWCUImage2') !='') {
                                echo wp_get_attachment_url(get_theme_mod('HomePageWCUImage2'));

                            }

                            if(wp_get_attachment_url(get_theme_mod('HomePageWCUImage2'))=='') {
                                echo get_template_directory_uri()."/assets/images/bg2.jpg";
                            }

                            ?>);
                        }
                    </style>
                    <h4><a
                            href="<?php echo get_theme_mod( "HomePageWCUImage2TitleURL","#url" ); ?>"><?php echo get_theme_mod( "HomePageWCUImage2Title" );if(get_theme_mod( "HomePageWCUImage2Title" )==''){echo 'Ambiente seguro';}?></a>
                    </h4>
                </div>
            </div>
        </div>

    </div>

</section>
<?php } ?>

<section>
    <?php echo get_theme_mod( "HomePageWCUBottomArea","" );?>
</section>
<!-- //Homepage Why Choose Us section -->



<!-- HomePage Stats section -->

<section>
    <?php echo get_theme_mod( "HomePageStatsTopArea","" );?>
</section>

<?php $HomePageStatsRequir = get_theme_mod( "HomePageStatsRequired","1")?>
<?php if( $HomePageStatsRequir==1 ){?>
<section class="w3-stats pt-4 pb-5" id="stats">
    <div class="container pb-md-5 pb-4 HomePageStats">

        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <p class="text-uppercase">
                <?php echo get_theme_mod( "HomePageStatsMainTitle1" );if(get_theme_mod( "HomePageStatsMainTitle1" )==''){echo 'NUESTRAS ESTADÍSTICAS';}?></p>
            <h3 class="title-style">
                <?php echo get_theme_mod( "HomePageStatsMainTitle2" );if(get_theme_mod( "HomePageStatsMainTitle2" )==''){echo 'Estamos orgullosos de compartir con usted';}?>
            </h3>
        </div>

        <div class="row text-center pt-4 justify-content-center">

            <?php $HomePageStatsGrid1Requir = get_theme_mod( "HomePageStatsGrid1Required","1")?>
            <?php if( $HomePageStatsGrid1Requir==1 ){?>
            <div class="col-md-3 col-6">
                <div class="counter">
                    <img src="<?php if(get_theme_mod('HomePageStats1Image')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageStats1Image') );} if(wp_get_attachment_url(get_theme_mod('HomePageStats1Image'))=='') { echo  get_template_directory_uri()."/assets/images/icon-1.png";  }?>"
                        alt="" class="img-fluid">
                    <div class="timer count-title count-number mt-sm-1"
                        data-to="<?php echo get_theme_mod( "HomePageStats1Number" );if(get_theme_mod( "HomePageStats1Number" )==''){echo '36076';}?>"
                        data-speed="1500"></div>
                    <p class="count-text">
                        <?php echo get_theme_mod( "HomePageStats1Title" );if(get_theme_mod( "HomePageStats1Title" )==''){echo 'Studientes';}?>
                    </p>
                </div>
            </div>
            <?php } ?>

            <?php $HomePageStatsGrid2Requir = get_theme_mod( "HomePageStatsGrid2Required","1")?>
            <?php if( $HomePageStatsGrid2Requir==1 ){?>
            <div class="col-md-3 col-6">
                <div class="counter">
                    <img src="<?php if(get_theme_mod('HomePageStats2Image')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageStats2Image') );} if(wp_get_attachment_url(get_theme_mod('HomePageStats2Image'))=='') { echo  get_template_directory_uri()."/assets/images/icon-2.png";  }?>"
                        alt="" class="img-fluid">
                    <div class="timer count-title count-number mt-3"
                        data-to="<?php echo get_theme_mod( "HomePageStats2Number" );if(get_theme_mod( "HomePageStats2Number" )==''){echo '786';}?>"
                        data-speed="1500"></div>
                    <p class="count-text">
                        <?php echo get_theme_mod( "HomePageStats2Title" );if(get_theme_mod( "HomePageStats2Title" )==''){echo 'Salas';}?></p>
                </div>
            </div>
            <?php } ?>

            <?php $HomePageStatsGrid3Requir = get_theme_mod( "HomePageStatsGrid3Required","1")?>
            <?php if( $HomePageStatsGrid3Requir==1 ){?>
            <div class="col-md-3 col-6 mt-md-0 mt-5">
                <div class="counter">
                    <img src="<?php if(get_theme_mod('HomePageStats3Image')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageStats3Image') );} if(wp_get_attachment_url(get_theme_mod('HomePageStats3Image'))=='') { echo  get_template_directory_uri()."/assets/images/icon-3.png";  }?>"
                        alt="" class="img-fluid">
                    <div class="timer count-title count-number mt-3"
                        data-to="<?php echo get_theme_mod( "HomePageStats3Number" );if(get_theme_mod( "HomePageStats3Number" )==''){echo '3630';}?>"
                        data-speed="1500"></div>
                    <p class="count-text">
                        <?php echo get_theme_mod( "HomePageStats3Title" );if(get_theme_mod( "HomePageStats3Title" )==''){echo 'Curso';}?></p>
                </div>
            </div>
            <?php } ?>

            <?php $HomePageStatsGrid4Requir = get_theme_mod( "HomePageStatsGrid4Required","1")?>
            <?php if( $HomePageStatsGrid4Requir==1 ){?>
            <div class="col-md-3 col-6 mt-md-0 mt-5">
                <div class="counter">
                    <img src="<?php if(get_theme_mod('HomePageStats4Image')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageStats4Image') );} if(wp_get_attachment_url(get_theme_mod('HomePageStats4Image'))=='') { echo  get_template_directory_uri()."/assets/images/icon-4.png";  }?>"
                        alt="" class="img-fluid">
                    <div class="timer count-title count-number mt-3"
                        data-to="<?php echo get_theme_mod( "HomePageStats4Number" );if(get_theme_mod( "HomePageStats4Number" )==''){echo '6300';}?>"
                        data-speed="1500"></div>
                    <p class="count-text">
                        <?php echo get_theme_mod( "HomePageStats4Title" );if(get_theme_mod( "HomePageStats4Title" )==''){echo 'Certificados';}?></p>
                </div>
            </div>
            <?php } ?>

        </div>

    </div>
</section>
<?php } ?>

<section>
    <?php echo get_theme_mod( "HomePageStatsBottomArea","" );?>
</section>

<!-- /HomePage Stats section -->


<!-- HomePage Testimonials -->

<section>
    <?php echo get_theme_mod( "HomePageTestimonialsTopArea","" );?>
</section>

<?php $HomePageTestimonialsStatus = get_theme_mod( "HomePageTestimonialsRequired","1")?>
<?php if( $HomePageTestimonialsStatus==1 ){?>
<section class="w3l-index4 py-5" id="testimonials">
    <style>
        .w3l-index4 {
            background: url(<?php if(get_theme_mod('HomePageTestimonialsBgImage') !='') {
                echo wp_get_attachment_url(get_theme_mod('HomePageTestimonialsBgImage'));

            }

            if(wp_get_attachment_url(get_theme_mod('HomePageTestimonialsBgImage'))=='') {
                echo get_template_directory_uri()."/assets/images/bg3.jpg";
            }

            ?>);
        }
    </style>
    <div class="container py-md-5 py-4 HomePageTestimonials">
        <div class="content-slider text-center">
            <div class="clients-slider">
                <div class="mask">

                    <ul>

                        <?php $HomePageTestimonial1Status = get_theme_mod( "HomePageTestimonial1Required","1")?>
                        <?php if( $HomePageTestimonial1Status==1 ){?>
                        <li class="anim1">
                            <img src="<?php if(get_theme_mod('HomePageTestimonialsClient1Image')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageTestimonialsClient1Image') );} if(wp_get_attachment_url(get_theme_mod('HomePageTestimonialsClient1Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi1.jpg";  }?>"
                                class="img-fluid rounded-circle" alt="client image" />
                            <blockquote class="quote">
                                <q><?php echo get_theme_mod( "HomePageTestimonialsMessage1" ); if(get_theme_mod( "HomePageTestimonialsMessage1" )==''){echo 'Somos dignos de nuetro Liceo
                                   para siempre     ';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "HomePageTestimonialsClient1Name" );if(get_theme_mod( "HomePageTestimonialsClient1Name" )==''){echo 'Mario Spe';}?>
                            </div>
                        </li>
                        <?php }?>

                        <?php $HomePageTestimonial2Status = get_theme_mod( "HomePageTestimonial2Required","1")?>
                        <?php if( $HomePageTestimonial2Status==1 ){?>
                        <li class="anim2">
                            <img src="<?php if(get_theme_mod('HomePageTestimonialsClient2Image')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageTestimonialsClient2Image') );} if(wp_get_attachment_url(get_theme_mod('HomePageTestimonialsClient2Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi2.jpg";  }?>"
                                class="img-fluid rounded-circle" alt="client image" />
                            <blockquote class="quote"><q><?php echo get_theme_mod( "HomePageTestimonialsMessage2" ); if(get_theme_mod( "HomePageTestimonialsMessage2" )==''){echo 'Somos dgnos de nuestro Liceo
                                    para siempre';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "HomePageTestimonialsClient2Name" );if(get_theme_mod( "HomePageTestimonialsClient2Name" )==''){echo 'Petey Cru';}?>
                            </div>
                        </li>
                        <?php }?>

                        <?php $HomePageTestimonial3Status = get_theme_mod( "HomePageTestimonial3Required","1")?>
                        <?php if( $HomePageTestimonial3Status==1 ){?>
                        <li class="anim3">
                            <img src="<?php if(get_theme_mod('HomePageTestimonialsClient3Image')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageTestimonialsClient3Image') );} if(wp_get_attachment_url(get_theme_mod('HomePageTestimonialsClient3Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi3.jpg";  }?>"
                                class="img-fluid rounded-circle " alt="client image" />
                            <blockquote class="quote"><q><?php echo get_theme_mod( "HomePageTestimonialsMessage3" ); if(get_theme_mod( "HomePageTestimonialsMessage3" )==''){echo 'Somos dignos de nuestro Liceo
                                    para siempre
            ';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "HomePageTestimonialsClient3Name" );if(get_theme_mod( "HomePageTestimonialsClient3Name" )==''){echo 'Anna Sth';}?>
                            </div>
                        </li>
                        <?php }?>

                        <?php $HomePageTestimonial4Status = get_theme_mod( "HomePageTestimonial4Required","1")?>
                        <?php if( $HomePageTestimonial4Status==1 ){?>
                        <li class="anim4">
                            <img src="<?php if(get_theme_mod('HomePageTestimonialsClient4Image')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageTestimonialsClient4Image') );} if(wp_get_attachment_url(get_theme_mod('HomePageTestimonialsClient4Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi1.jpg";  }?>"
                                class="img-fluid rounded-circle" alt="client image" />
                            <blockquote class="quote">
                                <q><?php echo get_theme_mod( "HomePageTestimonialsMessage4" ); if(get_theme_mod( "HomePageTestimonialsMessage4" )==''){echo 'Somos dignos de nuestro Liceo
                                    para siempre.';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "HomePageTestimonialsClient4Name" );if(get_theme_mod( "HomePageTestimonialsClient4Name" )==''){echo 'Gail For';}?>
                            </div>
                        </li>
                        <?php }?>

                        <?php $HomePageTestimonial5Status = get_theme_mod( "HomePageTestimonial5Required","1")?>
                        <?php if( $HomePageTestimonial5Status==1 ){?>
                        <li class="anim5">
                            <img src="<?php if(get_theme_mod('HomePageTestimonialsClient5Image')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageTestimonialsClient5Image') );} if(wp_get_attachment_url(get_theme_mod('HomePageTestimonialsClient5Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi2.jpg";  }?>"
                                class="img-fluid rounded-circle" alt="client image" />
                            <blockquote class="quote"><q><?php echo get_theme_mod( "HomePageTestimonialsMessage5" ); if(get_theme_mod( "HomePageTestimonialsMessage5" )==''){echo 'Somos dignos de nuestro Liceo
                                    para siempre';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "HomePageTestimonialsClient5Name" );if(get_theme_mod( "HomePageTestimonialsClient5Name" )==''){echo 'Boye Fra';}?>
                            </div>
                        </li>
                        <?php }?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }?>

<section>
    <?php echo get_theme_mod( "HomePageTestimonialsBottomArea","" );?>
</section>

<!-- //HomePage Testimonials -->


<!-- Homepage Blog grids -->

<section>
    <?php echo get_theme_mod( "HomePageBlogTopArea","" );?>
</section>

<?php $HomePageBlogGridsRequir = get_theme_mod( "HomePageBlogGridsRequired","1")?>
<?php if( $HomePageBlogGridsRequir==1 ){?>

<div class="w3l-blog-block-5 py-5" id="blog">
    <div class="container py-md-5 py-4 HomePageBlog">

        <div class="title-main text-center mx-auto mb-4" style="max-width:500px;">
            <p class="text-uppercase">
                <?php echo get_theme_mod( "HomePageBlogGridsTitle1" );if(get_theme_mod( "HomePageBlogGridsTitle1" )==''){echo 'Nuestras noticias';}?></p>
            <h3 class="title-style">
                <?php echo get_theme_mod( "HomePageBlogGridsTitle2" );if(get_theme_mod( "HomePageBlogGridsTitle2" )==''){echo 'Últimas publicaciones de blog';}?>
            </h3>
        </div>

        <?php global $wp_customize;
                    if ( isset( $wp_customize ) ) {
                        ?>
        <!-- <img src="<?php if(get_theme_mod('HomePageBlogGridsImage')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageBlogGridsImage') );} if  (wp_get_attachment_url(get_theme_mod('HomePageBlogGridsImage'))=='') { echo  get_template_directory_uri()."/assets/images/BlogSection.jpg";  }?>"> -->
        <?php }?>

        <div class="row justify-content-center">

            <?php
                // the query
                $the_query = new WP_Query( array(
                    'posts_per_page' => 3,
                ));
                ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="col-lg-4 col-md-6 mt-4">
                <div class="blog-card-single">
                    <div class="grids5-info">

                        <a href="<?php the_permalink() ?>">
                            <?php w3layouts_post_thumbnail(); ?>
                        </a>

                        <div class="blog-info">

                            <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>

                            <!-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                officia deserunt.</p> -->

                            <div class="d-flex align-items-center justify-content-between mt-4">

                                <?php $HomePageBlogAuthorRequir = get_theme_mod( "HomePageBlogAuthorRequired","1")?>
                                <?php if( $HomePageBlogAuthorRequir==1 ){?>
                                <div class="blogpost-author d-flex align-items-center">
                                    <a class="d-flex align-items-center" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID'));?>"
                                        title="23k followers">
                                        <img class="img-fluid" src="<?php print get_avatar_url( get_the_author_meta( 'ID' ), ['size' => '40'] ); ?>"
                                            alt="<?php the_author_meta('display_name'); ?>" style="max-width:40px"> <span
                                            class="small ms-2"><?php echo w3layouts_posted();?></span>
                                    </a>
                                </div>
                                <?php } ?>

                                <?php $HomePageBlogDateRequir = get_theme_mod( "HomePageBlogDateRequired","1")?>
                                <?php if( $HomePageBlogDateRequir==1 ){?>
                                <p class="date-text"><i class="far fa-calendar-alt me-1"></i><?php echo get_the_date( 'F j, Y' ); ?></p>
                                <?php } ?>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <?php else : ?>
            <p><?php __('No Posts Available'); ?></p>
            <?php endif; ?>


        </div>
    </div>
</div>
<?php } ?>

<section>
    <?php echo get_theme_mod( "HomePageBlogBottomArea","" );?>
</section>

<!-- //Homepage Blog grids -->



<!-- HomePage Join Number -->

<section>
    <?php echo get_theme_mod( "HomePageJoinNumberTopArea","" );?>
</section>

<?php $HomePageJoinNumberRequir = get_theme_mod( "HomePageJoinNumberRequired","1")?>
<?php if( $HomePageJoinNumberRequir==1 ){?>
<section class="w3l-call-to-action-6">
    <div class="container py-md-5 py-sm-4 py-5 HomePageJoinNumber">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="left-content-call">
                <h3 class="title-big">
                    <?php echo get_theme_mod( "HomePageJoinNumberTitle" );if(get_theme_mod( "HomePageJoinNumberTitle" )==''){echo "¡Llame para inscribir a su hija!";}?>
                </h3>
                <p class="text-white mt-1">
                    <?php echo get_theme_mod( "HomePageJoinNumberContent" );if(get_theme_mod( "HomePageJoinNumberContent" )==''){echo '¡Comienza el cambio hoy!';}?>
                </p>
            </div>
            <div class="right-content-call mt-lg-0 mt-4">
                <ul class="buttons">
                    <li class="phone-sec me-lg-4"><i
                            class="<?php echo get_theme_mod( "HomePageJoinNumberIcon" ); if(get_theme_mod( "HomePageJoinNumberIcon" )==''){echo 'fas fa-phone-volume';}?>"></i>
                        <a class="call-style-w3"
                            href="<?php echo get_theme_mod( "HomePageJoinNumberURL","tel:+569" ); ?>"><?php echo get_theme_mod( "HomePageJoinNumber" );if(get_theme_mod( "HomePageJoinNumber" )==''){echo "+1(23) 456 789 0000";}?></a>
                    </li>
                    <li><a href="<?php echo get_theme_mod( "HomePageJoinNumberBtnUrl","#url" ); ?>"
                            class="btn btn-style btn-style-2 mt-lg-0 mt-3"><?php echo get_theme_mod( "HomePageJoinNumberBtnText" );if(get_theme_mod( "HomePageJoinNumberBtnText" )==''){echo "Únete gratis";}?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php }?>

<section>
    <?php echo get_theme_mod( "HomePageJoinNumberBottomArea","" );?>
</section>

<!-- //HomePage Join Number -->





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