<?php
/**
 * Template Name: About Page
 */
?>
<?php get_header(); ?>


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
            <?php $AboutPageMainTitleStatus = get_theme_mod( "AboutPageMainTitleRequired","1")?>
            <?php if( $AboutPageMainTitleStatus==1 ){?>
            <h4 class="inner-text-title font-weight-bold pt-5">
                <?php echo get_theme_mod( "AboutBannerMainTitle" );if(get_theme_mod( "AboutBannerMainTitle" )==''){echo 'About Us';}?></h4>
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



<!-- AboutPage about section -->

<section>
    <?php echo get_theme_mod( "AboutPageAboutTopArea","" );?>
</section>

<?php $AboutPageAboutRequir = get_theme_mod( "AboutPageAboutRequired","1")?>
<?php if( $AboutPageAboutRequir==1 ){?>
<section class="w3l-servicesblock pt-lg-5 pt-4 pb-5 mb-lg-5" id="about">
    <div class="container pb-md-5 pb-4 AboutPageAbout">
        <div class="row pb-xl-5 align-items-center">
            <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                <div class="position-relative">
                    <img src="<?php if(get_theme_mod('AboutPageAboutImage')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageAboutImage') );} if(wp_get_attachment_url(get_theme_mod('AboutPageAboutImage'))=='') { echo  get_template_directory_uri()."/assets/images/img1.jpg";  }?>"
                        alt="" class="img-fluid radius-image">
                </div>

                <?php $AboutPageAboutGetAppointmentBlockRequir = get_theme_mod( "AboutPageAboutGetAppointmentBlockRequired","1")?>
                <?php if( $AboutPageAboutGetAppointmentBlockRequir==1 ){?>
                <div class="imginfo__box">
                    <h6 class="imginfo__title">
                        <?php echo get_theme_mod( "AboutPageAboutGetAppointmentTitle" );if(get_theme_mod( "AboutPageAboutGetAppointmentTitle" )==''){echo 'Get a Appointment Today!';}?>
                    </h6>
                    <p>
                        <?php echo get_theme_mod( "AboutPageAboutGetAppointmentPara","Nemo enim ipsam oluptatem quia oluptas<br> sit aspernatur aut odit aut fugit." );?>
                    </p>
                    <a href="<?php echo get_theme_mod( "AboutPageAboutPhoneURL","tel:1-800-654-3210" ); ?>"><i class="fas fa-phone-alt"></i>
                        <?php echo get_theme_mod( "AboutPageAboutPhoneNumber" );if(get_theme_mod( "AboutPageAboutPhoneNumber" )==''){echo '1-800-654-3210';}?></a>
                </div>
                <?php } ?>

            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                <h3 class="title-style">
                    <?php echo get_theme_mod( "AboutPageAboutTitle1" );if(get_theme_mod( "AboutPageAboutTitle1" )==''){echo 'Somos la mejor opción para su hija';}?>
                </h3>
                <p class="mt-4"><?php echo get_theme_mod( "AboutPageAboutContent","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit." );?></p>
                <ul class="mt-4 list-style-lis pt-lg-1">
                    <li><i
                            class="fas fa-check-circle"></i><?php echo get_theme_mod( "AboutPageAboutListTitle1" );if(get_theme_mod( "AboutPageAboutListTitle1" )==''){echo 'Special Education';}?>
                    </li>
                    <li><i
                            class="fas fa-check-circle"></i><?php echo get_theme_mod( "AboutPageAboutListTitle2" );if(get_theme_mod( "AboutPageAboutListTitle2" )==''){echo 'Access more then 100K online courses';}?>
                    </li>
                    <li><i
                            class="fas fa-check-circle"></i><?php echo get_theme_mod( "AboutPageAboutListTitle3" );if(get_theme_mod( "AboutPageAboutListTitle3" )==''){echo 'Traditional Academies';}?>
                    </li>
                </ul>
                <a href="<?php echo get_theme_mod( "AboutPageAboutBtnURL","#url" ); ?>"
                    class="btn btn-style mt-5"><?php echo get_theme_mod( "AboutPageAboutBtnText" );if(get_theme_mod( "AboutPageAboutBtnText" )==''){echo 'Apply Now';}?></a>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<section>
    <?php echo get_theme_mod( "AboutPageAboutBottomArea","" );?>
</section>

<!-- AboutPage about section -->



<!-- AboutPage Stats section -->

<section>
    <?php echo get_theme_mod( "AboutPageStatsTopArea","" );?>
</section>

<?php $AboutPageStatsRequir = get_theme_mod( "AboutPageStatsRequired","1")?>
<?php if( $AboutPageStatsRequir==1 ){?>
<section class="w3-stats pt-4 pb-5" id="stats">
    <div class="container pb-md-5 pb-4 AboutPageStats">

        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <p class="text-uppercase">
                <?php echo get_theme_mod( "AboutPageStatsMainTitle1" );if(get_theme_mod( "AboutPageStatsMainTitle1" )==''){echo 'NUESTRAS ESTADÍSTICAS';}?></p>
            <h3 class="title-style">
                <?php echo get_theme_mod( "AboutPageStatsMainTitle2" );if(get_theme_mod( "AboutPageStatsMainTitle2" )==''){echo 'Estamos orgullosos de compartir con usted ';}?>
            </h3>
        </div>

        <div class="row text-center pt-4 justify-content-center">

            <?php $AboutPageStatsGrid1Requir = get_theme_mod( "AboutPageStatsGrid1Required","1")?>
            <?php if( $AboutPageStatsGrid1Requir==1 ){?>
            <div class="col-md-3 col-6">
                <div class="counter">
                    <img src="<?php if(get_theme_mod('AboutPageStats1Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageStats1Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageStats1Image'))=='') { echo  get_template_directory_uri()."/assets/images/icon-1.png";  }?>"
                        alt="" class="img-fluid">
                    <div class="timer count-title count-number mt-sm-1"
                        data-to="<?php echo get_theme_mod( "AboutPageStats1Number" );if(get_theme_mod( "AboutPageStats1Number" )==''){echo '36076';}?>"
                        data-speed="1500"></div>
                    <p class="count-text">
                        <?php echo get_theme_mod( "AboutPageStats1Title" );if(get_theme_mod( "AboutPageStats1Title" )==''){echo 'Studientes';}?>
                    </p>
                </div>
            </div>
            <?php } ?>

            <?php $AboutPageStatsGrid2Requir = get_theme_mod( "AboutPageStatsGrid2Required","1")?>
            <?php if( $AboutPageStatsGrid2Requir==1 ){?>
            <div class="col-md-3 col-6">
                <div class="counter">
                    <img src="<?php if(get_theme_mod('AboutPageStats2Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageStats2Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageStats2Image'))=='') { echo  get_template_directory_uri()."/assets/images/icon-2.png";  }?>"
                        alt="" class="img-fluid">
                    <div class="timer count-title count-number mt-3"
                        data-to="<?php echo get_theme_mod( "AboutPageStats2Number" );if(get_theme_mod( "AboutPageStats2Number" )==''){echo '786';}?>"
                        data-speed="1500"></div>
                    <p class="count-text">
                        <?php echo get_theme_mod( "AboutPageStats2Title" );if(get_theme_mod( "AboutPageStats2Title" )==''){echo 'Salas';}?></p>
                </div>
            </div>
            <?php } ?>

            <?php $AboutPageStatsGrid3Requir = get_theme_mod( "AboutPageStatsGrid3Required","1")?>
            <?php if( $AboutPageStatsGrid3Requir==1 ){?>
            <div class="col-md-3 col-6 mt-md-0 mt-5">
                <div class="counter">
                    <img src="<?php if(get_theme_mod('AboutPageStats3Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageStats3Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageStats3Image'))=='') { echo  get_template_directory_uri()."/assets/images/icon-3.png";  }?>"
                        alt="" class="img-fluid">
                    <div class="timer count-title count-number mt-3"
                        data-to="<?php echo get_theme_mod( "AboutPageStats3Number" );if(get_theme_mod( "AboutPageStats3Number" )==''){echo '3630';}?>"
                        data-speed="1500"></div>
                    <p class="count-text">
                        <?php echo get_theme_mod( "AboutPageStats3Title" );if(get_theme_mod( "AboutPageStats3Title" )==''){echo 'Cursos';}?></p>
                </div>
            </div>
            <?php } ?>

            <?php $AboutPageStatsGrid4Requir = get_theme_mod( "AboutPageStatsGrid4Required","1")?>
            <?php if( $AboutPageStatsGrid4Requir==1 ){?>
            <div class="col-md-3 col-6 mt-md-0 mt-5">
                <div class="counter">
                    <img src="<?php if(get_theme_mod('AboutPageStats4Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageStats4Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageStats4Image'))=='') { echo  get_template_directory_uri()."/assets/images/icon-4.png";  }?>"
                        alt="" class="img-fluid">
                    <div class="timer count-title count-number mt-3"
                        data-to="<?php echo get_theme_mod( "AboutPageStats4Number" );if(get_theme_mod( "AboutPageStats4Number" )==''){echo '6300';}?>"
                        data-speed="1500"></div>
                    <p class="count-text">
                        <?php echo get_theme_mod( "AboutPageStats4Title" );if(get_theme_mod( "AboutPageStats4Title" )==''){echo 'Certificados';}?></p>
                </div>
            </div>
            <?php } ?>

        </div>

    </div>
</section>
<?php } ?>

<section>
    <?php echo get_theme_mod( "AboutPageStatsBottomArea","" );?>
</section>

<!-- /AboutPage Stats section -->


<!-- AboutPage Testimonials -->

<section>
    <?php echo get_theme_mod( "AboutPageTestimonialsTopArea","" );?>
</section>

<?php $AboutPageTestimonialsStatus = get_theme_mod( "AboutPageTestimonialsRequired","1")?>
<?php if( $AboutPageTestimonialsStatus==1 ){?>
<section class="w3l-index4 py-5" id="testimonials">
    <style>
        .w3l-index4 {
            background: url(<?php if(get_theme_mod('AboutPageTestimonialsBgImage') !='') {
                echo wp_get_attachment_url(get_theme_mod('AboutPageTestimonialsBgImage'));

            }

            if(wp_get_attachment_url(get_theme_mod('AboutPageTestimonialsBgImage'))=='') {
                echo get_template_directory_uri()."/assets/images/bg3.jpg";
            }

            ?>);
        }
    </style>
    <div class="container py-md-5 py-4 AboutPageTestimonials">
        <div class="content-slider text-center">
            <div class="clients-slider">
                <div class="mask">

                    <ul>

                        <?php $AboutPageTestimonial1Status = get_theme_mod( "AboutPageTestimonial1Required","1")?>
                        <?php if( $AboutPageTestimonial1Status==1 ){?>
                        <li class="anim1">
                            <img src="<?php if(get_theme_mod('AboutPageTestimonialsClient1Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTestimonialsClient1Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTestimonialsClient1Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi1.jpg";  }?>"
                                class="img-fluid rounded-circle" alt="client image" />
                            <blockquote class="quote">
                                <q><?php echo get_theme_mod( "AboutPageTestimonialsMessage1" ); if(get_theme_mod( "AboutPageTestimonialsMessage1" )==''){echo 'Somos dignos de nuestro Liceo para 
                                        para siempre';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "AboutPageTestimonialsClient1Name" );if(get_theme_mod( "AboutPageTestimonialsClient1Name" )==''){echo 'Mario Spe';}?>
                            </div>
                        </li>
                        <?php }?>

                        <?php $AboutPageTestimonial2Status = get_theme_mod( "AboutPageTestimonial2Required","1")?>
                        <?php if( $AboutPageTestimonial2Status==1 ){?>
                        <li class="anim2">
                            <img src="<?php if(get_theme_mod('AboutPageTestimonialsClient2Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTestimonialsClient2Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTestimonialsClient2Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi2.jpg";  }?>"
                                class="img-fluid rounded-circle" alt="client image" />
                            <blockquote class="quote"><q><?php echo get_theme_mod( "AboutPageTestimonialsMessage2" ); if(get_theme_mod( "AboutPageTestimonialsMessage2" )==''){echo 'Somos dignos de nuestro Liceo para 
                                    para siempre
                                ';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "AboutPageTestimonialsClient2Name" );if(get_theme_mod( "AboutPageTestimonialsClient2Name" )==''){echo 'Petey Cru';}?>
                            </div>
                        </li>
                        <?php }?>

                        <?php $AboutPageTestimonial3Status = get_theme_mod( "AboutPageTestimonial3Required","1")?>
                        <?php if( $AboutPageTestimonial3Status==1 ){?>
                        <li class="anim3">
                            <img src="<?php if(get_theme_mod('AboutPageTestimonialsClient3Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTestimonialsClient3Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTestimonialsClient3Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi3.jpg";  }?>"
                                class="img-fluid rounded-circle " alt="client image" />
                            <blockquote class="quote"><q><?php echo get_theme_mod( "AboutPageTestimonialsMessage3" ); if(get_theme_mod( "AboutPageTestimonialsMessage3" )==''){echo 'Somos dignos de nuestro Liceo para siempre 
                                    
                                ';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "AboutPageTestimonialsClient3Name" );if(get_theme_mod( "AboutPageTestimonialsClient3Name" )==''){echo 'Anna Sth';}?>
                            </div>
                        </li>
                        <?php }?>

                        <?php $AboutPageTestimonial4Status = get_theme_mod( "AboutPageTestimonial4Required","1")?>
                        <?php if( $AboutPageTestimonial4Status==1 ){?>
                        <li class="anim4">
                            <img src="<?php if(get_theme_mod('AboutPageTestimonialsClient4Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTestimonialsClient4Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTestimonialsClient4Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi1.jpg";  }?>"
                                class="img-fluid rounded-circle" alt="client image" />
                            <blockquote class="quote">
                                <q><?php echo get_theme_mod( "AboutPageTestimonialsMessage4" ); if(get_theme_mod( "AboutPageTestimonialsMessage4" )==''){echo 'Somos dignos de nuestro Liceo para siempre 
                                siempre ';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "AboutPageTestimonialsClient4Name" );if(get_theme_mod( "AboutPageTestimonialsClient4Name" )==''){echo 'Gail For';}?>
                            </div>
                        </li>
                        <?php }?>

                        <?php $AboutPageTestimonial5Status = get_theme_mod( "AboutPageTestimonial5Required","1")?>
                        <?php if( $AboutPageTestimonial5Status==1 ){?>
                        <li class="anim5">
                            <img src="<?php if(get_theme_mod('AboutPageTestimonialsClient5Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTestimonialsClient5Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTestimonialsClient5Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi2.jpg";  }?>"
                                class="img-fluid rounded-circle" alt="client image" />
                            <blockquote class="quote"><q><?php echo get_theme_mod( "AboutPageTestimonialsMessage5" ); if(get_theme_mod( "AboutPageTestimonialsMessage5" )==''){echo 'Somos dignos de nuestro Liceo para
                                   ';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "AboutPageTestimonialsClient5Name" );if(get_theme_mod( "AboutPageTestimonialsClient5Name" )==''){echo 'Boye Fra';}?>
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
    <?php echo get_theme_mod( "AboutPageTestimonialsBottomArea","" );?>
</section>

<!-- //AboutPage Testimonials -->




<!-- AboutPage team -->

<section>
    <?php echo get_theme_mod( "AboutPageTeamTopArea","" );?>
</section>

<?php $AboutPageTeamStatus = get_theme_mod( "AboutPageTeamRequired","1")?>
<?php if( $AboutPageTeamStatus==1 ){?>
    <section class="w3l-team-13 py-5" id="team">
        <div class="container py-md-5 py-4 AboutPageTeam">

            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase"><?php echo get_theme_mod( "AboutPageTeamTitle1" );if(get_theme_mod( "AboutPageTeamTitle1" )==''){echo 'Nuestro Equipo';}?></p>
                <h3 class="title-style"><?php echo get_theme_mod( "AboutPageTeamTitle2" );if(get_theme_mod( "AboutPageTeamTitle2" )==''){echo '';}?></h3>
            </div>

            <div class="row text-center left-side justify-content-center">

            <?php $AboutPageTeam1Status = get_theme_mod( "AboutPageTeam1Required","1")?>
            <?php if( $AboutPageTeam1Status==1 ){?>
                <div class="col-lg-3 col-6">
                    <div class="image-one">
                        <a href="#team">
                            <img src="<?php if(get_theme_mod('AboutPageTeam1Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTeam1Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTeam1Image'))=='') { echo  get_template_directory_uri()."/assets/images/team1.png";}?>" class="arrow-png img-responsive" />
                            <h4><?php echo get_theme_mod( "AboutPageTeam1Title" );if(get_theme_mod( "AboutPageTeam1Title" )==''){echo 'Nombre Uno';}?></h4>
                            <div class="buttons-teams2 mt-2">

                            <?php $AboutPageTeam1SFStatus = get_theme_mod( "AboutPageTeam1SocialFacebook","1")?>
                            <?php if( $AboutPageTeam1SFStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "AboutPageTeam1SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>"><i class="fab fa-facebook-square"></i></a>
                            <?php }?>

                            <?php $AboutPageTeam1STStatus = get_theme_mod( "AboutPageTeam1SocialTwitter","1")?>
                            <?php if( $AboutPageTeam1STStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "AboutPageTeam1SocialTwitterURL","https://twitter.com/W3layouts" ); ?>"><i class="fab fa-twitter-square"></i></a>
                            <?php }?>

                            <?php $AboutPageTeam1SGStatus = get_theme_mod( "AboutPageTeam1SocialGoogle","1")?>
                            <?php if( $AboutPageTeam1SGStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "AboutPageTeam1SocialGoogleURL","https://w3layouts.com/" ); ?>"><i class="fab fa-google-plus-square"></i></a>
                            <?php }?>
                                
                            </div>
                        </a>
                    </div>
                </div>
            <?php }?>

            <?php $AboutPageTeam2Status = get_theme_mod( "AboutPageTeam2Required","1")?>
            <?php if( $AboutPageTeam2Status==1 ){?>
                <div class="col-lg-3 col-6">
                    <div class="image-one">
                        <a href="#team">
                            <img src="<?php if(get_theme_mod('AboutPageTeam2Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTeam2Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTeam2Image'))=='') { echo  get_template_directory_uri()."/assets/images/team2.png";}?>" class="arrow-png img-responsive">
                            <h4><?php echo get_theme_mod( "AboutPageTeam2Title" );if(get_theme_mod( "AboutPageTeam2Title" )==''){echo 'Nombre dos';}?></h4>
                            <div class="buttons-teams2 mt-2">

                            <?php $AboutPageTeam2SFStatus = get_theme_mod( "AboutPageTeam2SocialFacebook","1")?>
                            <?php if( $AboutPageTeam2SFStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "AboutPageTeam2SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>"><i class="fab fa-facebook-square"></i></a>
                            <?php }?>

                            <?php $AboutPageTeam2STStatus = get_theme_mod( "AboutPageTeam2SocialTwitter","1")?>
                            <?php if( $AboutPageTeam2STStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "AboutPageTeam2SocialTwitterURL","https://twitter.com/W3layouts" ); ?>"><i class="fab fa-twitter-square"></i></a>
                            <?php }?>
                                                                
                            <?php $AboutPageTeam2SGStatus = get_theme_mod( "AboutPageTeam2SocialGoogle","1")?>
                            <?php if( $AboutPageTeam2SGStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "AboutPageTeam2SocialGoogleURL","https://w3layouts.com/" ); ?>"><i class="fab fa-google-plus-square"></i></a>
                            <?php }?>
                                
                            </div>
                        </a>
                    </div>
                </div>
            <?php }?>

            <?php $AboutPageTeam3Status = get_theme_mod( "AboutPageTeam3Required","1")?>
            <?php if( $AboutPageTeam3Status==1 ){?>
                <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                    <div class="image-one">
                        <a href="#team">
                            <img src="<?php if(get_theme_mod('AboutPageTeam3Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTeam3Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTeam3Image'))=='') { echo  get_template_directory_uri()."/assets/images/team3.png";  }?>" class="arrow-png img-responsive">
                            <h4><?php echo get_theme_mod( "AboutPageTeam3Title" );if(get_theme_mod( "AboutPageTeam3Title" )==''){echo 'Nombre tres';}?></h4>

                            <div class="buttons-teams2 mt-2">
                            <?php $AboutPageTeam3SFStatus = get_theme_mod( "AboutPageTeam3SocialFacebook","1")?>
                            <?php if( $AboutPageTeam3SFStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "AboutPageTeam3SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>"><i class="fab fa-facebook-square"></i></a>
                            <?php }?>

                            <?php $AboutPageTeam3STStatus = get_theme_mod( "AboutPageTeam3SocialTwitter","1")?>
                            <?php if( $AboutPageTeam3STStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "AboutPageTeam3SocialTwitterURL","https://twitter.com/W3layouts" ); ?>"><i class="fab fa-twitter-square"></i></a>
                            <?php }?>
                                
                            <?php $AboutPageTeam3SGStatus = get_theme_mod( "AboutPageTeam3SocialGoogle","1")?>
                            <?php if( $AboutPageTeam3SGStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "AboutPageTeam3SocialGoogleURL","https://w3layouts.com/" ); ?>"><i class="fab fa-google-plus-square"></i></a>
                            <?php }?>
                                                                
                            </div>
                        </a>
                    </div>
                </div>
            <?php }?>

            <?php $AboutPageTeam4Status = get_theme_mod( "AboutPageTeam4Required","1")?>
            <?php if( $AboutPageTeam4Status==1 ){?>
                <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                    <div class="image-one">
                        <a href="#team">
                            <img src="<?php if(get_theme_mod('AboutPageTeam4Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTeam4Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTeam4Image'))=='') { echo  get_template_directory_uri()."/assets/images/team4.png";  }?>" class="arrow-png img-responsive">
                            <h4><?php echo get_theme_mod( "AboutPageTeam4Title" );if(get_theme_mod( "AboutPageTeam4Title" )==''){echo 'Nombre Cuatro';}?></h4>
                            <div class="buttons-teams2 mt-2">

                            <?php $AboutPageTeam4SFStatus = get_theme_mod( "AboutPageTeam4SocialFacebook","1")?>
                            <?php if( $AboutPageTeam4SFStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "AboutPageTeam4SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>"><i class="fab fa-facebook-square"></i></a>
                            <?php }?>

                            <?php $AboutPageTeam4STStatus = get_theme_mod( "AboutPageTeam4SocialTwitter","1")?>
                            <?php if( $AboutPageTeam4STStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "AboutPageTeam4SocialTwitterURL","https://twitter.com/W3layouts" ); ?>"><i class="fab fa-twitter-square"></i></a>
                            <?php }?>
                                                                
                            <?php $AboutPageTeam4SGStatus = get_theme_mod( "AboutPageTeam4SocialGoogle","1")?>
                            <?php if( $AboutPageTeam4SGStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "AboutPageTeam4SocialGoogleURL","https://w3layouts.com/" ); ?>"><i class="fab fa-google-plus-square"></i></a>
                            <?php }?>
                                
                            </div>
                        </a>
                    </div>
                </div>
                
            <?php }?>

            </div>

        </div>
    </section>
<?php }?>

<section>
    <?php echo get_theme_mod( "AboutPageTeamBottomArea","" );?>
</section>

<!-- AboutPage team -->


<!-- AboutPage Content With Photo section -->

<section>
  <?php echo get_theme_mod( "AboutPageCWPTopArea","" );?>
</section>

<?php $AboutPageCWPStatus = get_theme_mod( "AboutPageCWPRequired","1")?>
<?php if( $AboutPageCWPStatus==1 ){?>
    <section class="w3l-about-2 pb-5 pt-4">
        <div class="container pb-md-5 pb-4 AboutPageCWP">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 about-2-secs-right mb-lg-0 mb-4 text-center pe-lg-4">
                    <img src="<?php if(get_theme_mod('AboutPageCWPImage')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageCWPImage') );} if(wp_get_attachment_url(get_theme_mod('AboutPageCWPImage'))=='') { echo  get_template_directory_uri()."/assets/images/image.jpg";}?>" alt="" class="img-fluid radius-image m-auto" />
                </div>
                <div class="col-lg-6 about-2-secs-left ps-lg-5">
                    <p class="text-uppercase"><?php echo get_theme_mod( "AboutPageCWPTitle1" );if(get_theme_mod( "AboutPageCWPTitle1" )==''){echo "Nuestro ambiente";}?></p>
                    <h3 class="title-style mb-sm-3 mb-2"><?php echo get_theme_mod( "AboutPageCWPTitle2" );if(get_theme_mod( "AboutPageCWPTitle2" )==''){echo "Aprendizaje activo, profesores expertos y entorno seguro";}?></h3>
                    <p><?php echo get_theme_mod( "AboutPageCWPContent","Somos dignos de nuestra escuela" );?></p>
                    <div class="d-flex align-items-center mt-5">
                        <a class="btn btn-style btn-style-3" href="<?php echo get_theme_mod( "AboutPageCWPBtn1URL","#url" ); ?>"><?php echo get_theme_mod( "AboutPageCWPBtn1Text" );if(get_theme_mod( "AboutPageCWPBtn1Text" )==''){echo "Contactanos";}?></a>
                        <a class="btn btn-style-primary ms-4" href="<?php echo get_theme_mod( "AboutPageCWPBtn2URL","#url" ); ?>"><?php echo get_theme_mod( "AboutPageCWPBtn2Text" );if(get_theme_mod( "AboutPageCWPBtn2Text" )==''){echo "Leer más";}?> <i
                                class="<?php echo get_theme_mod( "AboutPageCWPBtn2Icon" );if(get_theme_mod( "AboutPageCWPBtn2Icon" )==''){echo "fas fa-arrow-right";}?>"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<section>
  <?php echo get_theme_mod( "AboutPageCWPBottomArea","" );?>
</section>

<!-- AboutPage Content With Photo section -->




<!-- AboutPage Join Number -->

<section>
    <?php echo get_theme_mod( "AboutPageJoinNumberTopArea","" );?>
</section>

<?php $AboutPageJoinNumberRequir = get_theme_mod( "AboutPageJoinNumberRequired","1")?>
<?php if( $AboutPageJoinNumberRequir==1 ){?>
<section class="w3l-call-to-action-6">
    <div class="container py-md-5 py-sm-4 py-5 AboutPageJoinNumber">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="left-content-call">
                <h3 class="title-big">
                    <?php echo get_theme_mod( "AboutPageJoinNumberTitle" );if(get_theme_mod( "AboutPageJoinNumberTitle" )==''){echo "¡LLAME PARA INSCRIBIR A SU HIJA!";}?>
                </h3>
                <p class="text-white mt-1">
                    <?php echo get_theme_mod( "AboutPageJoinNumberContent" );if(get_theme_mod( "AboutPageJoinNumberContent" )==''){echo '¡Comienza el cambio hoy!';}?>
                </p>
            </div>
            <div class="right-content-call mt-lg-0 mt-4">
                <ul class="buttons">
                    <li class="phone-sec me-lg-4"><i
                            class="<?php echo get_theme_mod( "AboutPageJoinNumberIcon" ); if(get_theme_mod( "AboutPageJoinNumberIcon" )==''){echo 'fas fa-phone-volume';}?>"></i>
                        <a class="call-style-w3"
                            href="<?php echo get_theme_mod( "AboutPageJoinNumberURL","tel:+569" ); ?>"><?php echo get_theme_mod( "AboutPageJoinNumber" );if(get_theme_mod( "AboutPageJoinNumber" )==''){echo "+1(23) 456 789 0000";}?></a>
                    </li>
                    <li><a href="<?php echo get_theme_mod( "AboutPageJoinNumberBtnUrl","#url" ); ?>"
                            class="btn btn-style btn-style-2 mt-lg-0 mt-3"><?php echo get_theme_mod( "AboutPageJoinNumberBtnText" );if(get_theme_mod( "AboutPageJoinNumberBtnText" )==''){echo "Join for free";}?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php }?>

<section>
    <?php echo get_theme_mod( "AboutPageJoinNumberBottomArea","" );?>
</section>

<!-- //AboutPage Join Number -->





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