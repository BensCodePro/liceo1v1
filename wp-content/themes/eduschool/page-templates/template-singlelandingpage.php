<?php
/**
 * Template Name: Single Landing Page
 */
?>

<?php get_header(); ?>

<!-- Homepage Banner section -->
<section>
    <?php echo get_theme_mod( "LandingPageBannerTopArea","" );?>
</section>

<?php $LandingPageBannerRequir = get_theme_mod( "LandingPageBannerRequired","1")?>
<?php if( $LandingPageBannerRequir==1 ){?>
<section id="home" class="w3l-banner py-5">
    <div class="banner-content">
        <div class="container py-4 LandingPageBanner">
            <div class="row align-items-center pt-sm-5 pt-4">
                <div class="col-md-6">
                    <h3 class="mb-lg-4 mb-3">
                        <?php echo get_theme_mod( "LandingPageBannerTitle1" );if(get_theme_mod( "LandingPageBannerTitle1" )==''){echo 'Your Kids Deserve The';}?><span
                            class="d-block"><?php echo get_theme_mod( "LandingPageBannerTitle2" );if(get_theme_mod( "LandingPageBannerTitle2" )==''){echo 'Best Education';}?></span>
                    </h3>
                    <p class="banner-sub"><?php echo get_theme_mod( "LandingPageBannerContent","Active Learning, Expert Teachers & Safe Environment" );?>
                    </p>
                    <div class="d-flex align-items-center buttons-banner">
                        <a href="<?php echo get_theme_mod( "LandingPageBannerBtnURL","#url" ); ?>"
                            class="btn btn-style mt-lg-5 mt-4"><?php echo get_theme_mod( "LandingPageBannerBtnText" );if(get_theme_mod( "LandingPageBannerBtnText" )==''){echo 'Admission Now';}?></a>
                    </div>
                </div>
                <div class="col-md-6 right-banner-2 text-end position-relative mt-md-0 mt-5">
                    <div class="sub-banner-image mx-auto">
                        <img src="<?php if(get_theme_mod('LandingPageBannerImage')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageBannerImage') );} if(wp_get_attachment_url(get_theme_mod('LandingPageBannerImage'))=='') { echo  get_template_directory_uri()."/assets/images/banner.png";  }?>"
                            class="img-fluid position-relative" alt=" ">
                    </div>
                    <div class="banner-style-1 position-absolute">
                        <div class="banner-style-2 position-relative">
                            <h4><?php echo get_theme_mod( "LandingPageBannerImageTitle" );if(get_theme_mod( "LandingPageBannerImageTitle" )==''){echo 'Back to School';}?>
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
    <?php echo get_theme_mod( "LandingPageBannerBottomArea","" );?>
</section>
<!-- //Homepage Banner section -->



<!-- LandingPage about section -->

<section>
    <?php echo get_theme_mod( "LandingPageAboutTopArea","" );?>
</section>

<?php $LandingPageAboutRequir = get_theme_mod( "LandingPageAboutRequired","1")?>
<?php if( $LandingPageAboutRequir==1 ){?>
<section class="w3l-servicesblock py-5 mb-lg-5" id="about">
    <div class="container py-md-5 py-4 LandingPageAbout">
        <div class="row pb-xl-5 align-items-center">
            <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                <div class="position-relative">
                    <img src="<?php if(get_theme_mod('LandingPageAboutImage')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageAboutImage') );} if(wp_get_attachment_url(get_theme_mod('LandingPageAboutImage'))=='') { echo  get_template_directory_uri()."/assets/images/img1.jpg";  }?>"
                        alt="" class="img-fluid radius-image">
                </div>

                <?php $LandingPageAboutGetAppointmentBlockRequir = get_theme_mod( "LandingPageAboutGetAppointmentBlockRequired","1")?>
                <?php if( $LandingPageAboutGetAppointmentBlockRequir==1 ){?>
                <div class="imginfo__box">
                    <h6 class="imginfo__title">
                        <?php echo get_theme_mod( "LandingPageAboutGetAppointmentTitle" );if(get_theme_mod( "LandingPageAboutGetAppointmentTitle" )==''){echo 'Get a Appointment Today!';}?>
                    </h6>
                    <p>
                        <?php echo get_theme_mod( "LandingPageAboutGetAppointmentPara","Nemo enim ipsam oluptatem quia oluptas<br> sit aspernatur aut odit aut fugit." );?>
                    </p>
                    <a href="<?php echo get_theme_mod( "LandingPageAboutPhoneURL","tel:1-800-654-3210" ); ?>"><i class="fas fa-phone-alt"></i>
                        <?php echo get_theme_mod( "LandingPageAboutPhoneNumber" );if(get_theme_mod( "LandingPageAboutPhoneNumber" )==''){echo '1-800-654-3210';}?></a>
                </div>
                <?php } ?>

            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                <h3 class="title-style">
                    <?php echo get_theme_mod( "LandingPageAboutTitle1" );if(get_theme_mod( "LandingPageAboutTitle1" )==''){echo 'We Are The Best Choice For Your Child';}?>
                </h3>
                <p class="mt-4"><?php echo get_theme_mod( "LandingPageAboutContent","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit." );?></p>
                <ul class="mt-4 list-style-lis pt-lg-1">
                    <li><i
                            class="fas fa-check-circle"></i><?php echo get_theme_mod( "LandingPageAboutListTitle1" );if(get_theme_mod( "LandingPageAboutListTitle1" )==''){echo 'Special Education';}?>
                    </li>
                    <li><i
                            class="fas fa-check-circle"></i><?php echo get_theme_mod( "LandingPageAboutListTitle2" );if(get_theme_mod( "LandingPageAboutListTitle2" )==''){echo 'Access more then 100K online courses';}?>
                    </li>
                    <li><i
                            class="fas fa-check-circle"></i><?php echo get_theme_mod( "LandingPageAboutListTitle3" );if(get_theme_mod( "LandingPageAboutListTitle3" )==''){echo 'Traditional Academies';}?>
                    </li>
                </ul>
                <a href="<?php echo get_theme_mod( "LandingPageAboutBtnURL","#url" ); ?>"
                    class="btn btn-style mt-5"><?php echo get_theme_mod( "LandingPageAboutBtnText" );if(get_theme_mod( "LandingPageAboutBtnText" )==''){echo 'Apply Now';}?></a>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<section>
    <?php echo get_theme_mod( "LandingPageAboutBottomArea","" );?>
</section>

<!-- LandingPage about section -->


<!-- LandingPage Features -->

<section>
    <?php echo get_theme_mod( "LandingPageFeaturesTopArea","" );?>
</section>

<?php $LandingPageFeaturesRequir = get_theme_mod( "LandingPageFeaturesRequired","1")?>
<?php if( $LandingPageFeaturesRequir==1 ){?>
<section class="services-w3l-block pb-5" id="features">
    <div class="container pb-md-5 pb-4 LandingPageFeatures">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <p class="text-uppercase">
                <?php echo get_theme_mod( "LandingPageFeaturesTitle1" );if(get_theme_mod( "LandingPageFeaturesTitle1" )==''){echo 'Best Features';}?></p>
            <h3 class="title-style">
                <?php echo get_theme_mod( "LandingPageFeaturesTitle2" );if(get_theme_mod( "LandingPageFeaturesTitle2" )==''){echo 'Achieve Your Goals With Edu School';}?>
            </h3>
        </div>

        <div class="row justify-content-center">

            <?php $LandingPageFeature1Requir = get_theme_mod( "LandingPageFeature1Required","1")?>
            <?php if( $LandingPageFeature1Requir==1 ){?>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                <div class="icon-box icon-box-clr-1">
                    <div class="icon"><i
                            class="<?php echo get_theme_mod( "LandingPageFeature1Icon" );if(get_theme_mod( "LandingPageFeature1Icon" )==''){echo 'fas fa-user-friends';}?>"></i>
                    </div>
                    <h4 class="title"><a
                            href="<?php echo get_theme_mod( "LandingPageFeature1Url","#url" ); ?>"><?php echo get_theme_mod( "LandingPageFeature1Title" );if(get_theme_mod( "LandingPageFeature1Title" )==''){echo 'Expert Teachers';}?></a>
                    </h4>
                    <p><?php echo get_theme_mod( "LandingPageFeature1Content","Ras effic itur metusga via suscipit consect eturerse adi unde omnis." );?>
                    </p>
                </div>
            </div>
            <?php } ?>

            <?php $LandingPageFeature2Requir = get_theme_mod( "LandingPageFeature2Required","1")?>
            <?php if( $LandingPageFeature2Requir==1 ){?>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-md-0 mt-4">
                <div class="icon-box icon-box-clr-2">
                    <div class="icon"><i
                            class="<?php echo get_theme_mod( "LandingPageFeature2Icon" );if(get_theme_mod( "LandingPageFeature2Icon" )==''){echo 'fas fa-book-reader';}?>"></i>
                    </div>
                    <h4 class="title"><a
                            href="<?php echo get_theme_mod( "LandingPageFeature2Url","#url" ); ?>"><?php echo get_theme_mod( "LandingPageFeature2Title" );if(get_theme_mod( "LandingPageFeature2Title" )==''){echo 'Quality Education';}?></a>
                    </h4>
                    <p><?php echo get_theme_mod( "LandingPageFeature2Content","Ras effic itur metusga via suscipit consect eturerse adi unde omnis." );?>
                    </p>
                </div>
            </div>
            <?php } ?>

            <?php $LandingPageFeature3Requir = get_theme_mod( "LandingPageFeature3Required","1")?>
            <?php if( $LandingPageFeature3Requir==1 ){?>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                <div class="icon-box icon-box-clr-3">
                    <div class="icon"><i
                            class="<?php echo get_theme_mod( "LandingPageFeature3Icon" );if(get_theme_mod( "LandingPageFeature3Icon" )==''){echo 'fas fa-user-graduate';}?>"></i>
                    </div>
                    <h4 class="title"><a
                            href="<?php echo get_theme_mod( "LandingPageFeature3Url","#url" ); ?>"><?php echo get_theme_mod( "LandingPageFeature3Title" );if(get_theme_mod( "LandingPageFeature3Title" )==''){echo 'Life Time Support';}?></a>
                    </h4>
                    <p><?php echo get_theme_mod( "LandingPageFeature3Content","Ras effic itur metusga via suscipit consect eturerse adi unde omnis." );?>
                    </p>
                </div>
            </div>
            <?php } ?>

            <?php $LandingPageFeature4Requir = get_theme_mod( "LandingPageFeature4Required","1")?>
            <?php if( $LandingPageFeature4Requir==1 ){?>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                <div class="icon-box icon-box-clr-4">
                    <div class="icon"><i
                            class="<?php echo get_theme_mod( "LandingPageFeature4Icon" );if(get_theme_mod( "LandingPageFeature4Icon" )==''){echo 'fas fa-university';}?>"></i>
                    </div>
                    <h4 class="title"><a
                            href="<?php echo get_theme_mod( "LandingPageFeature4Url","#url" ); ?>"><?php echo get_theme_mod( "LandingPageFeature4Title" );if(get_theme_mod( "LandingPageFeature4Title" )==''){echo 'Best Scholarships';}?></a>
                    </h4>
                    <p><?php echo get_theme_mod( "LandingPageFeature4Content","Ras effic itur metusga via suscipit consect eturerse adi unde omnis." );?>
                    </p>
                </div>
            </div>
            <?php } ?>

        </div>

    </div>
</section>
<?php } ?>

<section>
    <?php echo get_theme_mod( "LandingPageFeaturesBottomArea","" );?>
</section>

<!-- //LandingPage Features -->




<!-- LandingPage team -->

<section>
    <?php echo get_theme_mod( "LandingPageTeamTopArea","" );?>
</section>

<?php $LandingPageTeamStatus = get_theme_mod( "LandingPageTeamRequired","1")?>
<?php if( $LandingPageTeamStatus==1 ){?>
    <section class="w3l-team-13 py-5" id="team">
        <div class="container py-md-5 py-4 LandingPageTeam">

            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase"><?php echo get_theme_mod( "LandingPageTeamTitle1" );if(get_theme_mod( "LandingPageTeamTitle1" )==''){echo 'Our Team';}?></p>
                <h3 class="title-style"><?php echo get_theme_mod( "LandingPageTeamTitle2" );if(get_theme_mod( "LandingPageTeamTitle2" )==''){echo 'Meet our Teachers';}?></h3>
            </div>

            <div class="row text-center left-side justify-content-center">

            <?php $LandingPageTeam1Status = get_theme_mod( "LandingPageTeam1Required","1")?>
            <?php if( $LandingPageTeam1Status==1 ){?>
                <div class="col-lg-3 col-6">
                    <div class="image-one">
                        <a href="#team">
                            <img src="<?php if(get_theme_mod('LandingPageTeam1Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTeam1Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTeam1Image'))=='') { echo  get_template_directory_uri()."/assets/images/team1.png";}?>" class="arrow-png img-responsive" />
                            <h4><?php echo get_theme_mod( "LandingPageTeam1Title" );if(get_theme_mod( "LandingPageTeam1Title" )==''){echo 'Emma Watson';}?></h4>
                            <div class="buttons-teams2 mt-2">

                            <?php $LandingPageTeam1SFStatus = get_theme_mod( "LandingPageTeam1SocialFacebook","1")?>
                            <?php if( $LandingPageTeam1SFStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "LandingPageTeam1SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>"><i class="fab fa-facebook-square"></i></a>
                            <?php }?>

                            <?php $LandingPageTeam1STStatus = get_theme_mod( "LandingPageTeam1SocialTwitter","1")?>
                            <?php if( $LandingPageTeam1STStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "LandingPageTeam1SocialTwitterURL","https://twitter.com/W3layouts" ); ?>"><i class="fab fa-twitter-square"></i></a>
                            <?php }?>

                            <?php $LandingPageTeam1SGStatus = get_theme_mod( "LandingPageTeam1SocialGoogle","1")?>
                            <?php if( $LandingPageTeam1SGStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "LandingPageTeam1SocialGoogleURL","https://w3layouts.com/" ); ?>"><i class="fab fa-google-plus-square"></i></a>
                            <?php }?>
                                
                            </div>
                        </a>
                    </div>
                </div>
            <?php }?>

            <?php $LandingPageTeam2Status = get_theme_mod( "LandingPageTeam2Required","1")?>
            <?php if( $LandingPageTeam2Status==1 ){?>
                <div class="col-lg-3 col-6">
                    <div class="image-one">
                        <a href="#team">
                            <img src="<?php if(get_theme_mod('LandingPageTeam2Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTeam2Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTeam2Image'))=='') { echo  get_template_directory_uri()."/assets/images/team2.png";}?>" class="arrow-png img-responsive">
                            <h4><?php echo get_theme_mod( "LandingPageTeam2Title" );if(get_theme_mod( "LandingPageTeam2Title" )==''){echo 'Enrique Lal';}?></h4>
                            <div class="buttons-teams2 mt-2">

                            <?php $LandingPageTeam2SFStatus = get_theme_mod( "LandingPageTeam2SocialFacebook","1")?>
                            <?php if( $LandingPageTeam2SFStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "LandingPageTeam2SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>"><i class="fab fa-facebook-square"></i></a>
                            <?php }?>

                            <?php $LandingPageTeam2STStatus = get_theme_mod( "LandingPageTeam2SocialTwitter","1")?>
                            <?php if( $LandingPageTeam2STStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "LandingPageTeam2SocialTwitterURL","https://twitter.com/W3layouts" ); ?>"><i class="fab fa-twitter-square"></i></a>
                            <?php }?>
                                                                
                            <?php $LandingPageTeam2SGStatus = get_theme_mod( "LandingPageTeam2SocialGoogle","1")?>
                            <?php if( $LandingPageTeam2SGStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "LandingPageTeam2SocialGoogleURL","https://w3layouts.com/" ); ?>"><i class="fab fa-google-plus-square"></i></a>
                            <?php }?>
                                
                            </div>
                        </a>
                    </div>
                </div>
            <?php }?>

            <?php $LandingPageTeam3Status = get_theme_mod( "LandingPageTeam3Required","1")?>
            <?php if( $LandingPageTeam3Status==1 ){?>
                <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                    <div class="image-one">
                        <a href="#team">
                            <img src="<?php if(get_theme_mod('LandingPageTeam3Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTeam3Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTeam3Image'))=='') { echo  get_template_directory_uri()."/assets/images/team3.png";  }?>" class="arrow-png img-responsive">
                            <h4><?php echo get_theme_mod( "LandingPageTeam3Title" );if(get_theme_mod( "LandingPageTeam3Title" )==''){echo 'Smith Ker';}?></h4>

                            <div class="buttons-teams2 mt-2">
                            <?php $LandingPageTeam3SFStatus = get_theme_mod( "LandingPageTeam3SocialFacebook","1")?>
                            <?php if( $LandingPageTeam3SFStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "LandingPageTeam3SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>"><i class="fab fa-facebook-square"></i></a>
                            <?php }?>

                            <?php $LandingPageTeam3STStatus = get_theme_mod( "LandingPageTeam3SocialTwitter","1")?>
                            <?php if( $LandingPageTeam3STStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "LandingPageTeam3SocialTwitterURL","https://twitter.com/W3layouts" ); ?>"><i class="fab fa-twitter-square"></i></a>
                            <?php }?>
                                
                            <?php $LandingPageTeam3SGStatus = get_theme_mod( "LandingPageTeam3SocialGoogle","1")?>
                            <?php if( $LandingPageTeam3SGStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "LandingPageTeam3SocialGoogleURL","https://w3layouts.com/" ); ?>"><i class="fab fa-google-plus-square"></i></a>
                            <?php }?>
                                                                
                            </div>
                        </a>
                    </div>
                </div>
            <?php }?>

            <?php $LandingPageTeam4Status = get_theme_mod( "LandingPageTeam4Required","1")?>
            <?php if( $LandingPageTeam4Status==1 ){?>
                <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                    <div class="image-one">
                        <a href="#team">
                            <img src="<?php if(get_theme_mod('LandingPageTeam4Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTeam4Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTeam4Image'))=='') { echo  get_template_directory_uri()."/assets/images/team4.png";  }?>" class="arrow-png img-responsive">
                            <h4><?php echo get_theme_mod( "LandingPageTeam4Title" );if(get_theme_mod( "LandingPageTeam4Title" )==''){echo 'Forkler Lee';}?></h4>
                            <div class="buttons-teams2 mt-2">

                            <?php $LandingPageTeam4SFStatus = get_theme_mod( "LandingPageTeam4SocialFacebook","1")?>
                            <?php if( $LandingPageTeam4SFStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "LandingPageTeam4SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>"><i class="fab fa-facebook-square"></i></a>
                            <?php }?>

                            <?php $LandingPageTeam4STStatus = get_theme_mod( "LandingPageTeam4SocialTwitter","1")?>
                            <?php if( $LandingPageTeam4STStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "LandingPageTeam4SocialTwitterURL","https://twitter.com/W3layouts" ); ?>"><i class="fab fa-twitter-square"></i></a>
                            <?php }?>
                                                                
                            <?php $LandingPageTeam4SGStatus = get_theme_mod( "LandingPageTeam4SocialGoogle","1")?>
                            <?php if( $LandingPageTeam4SGStatus==1 ){?>
                                <a href="<?php echo get_theme_mod( "LandingPageTeam4SocialGoogleURL","https://w3layouts.com/" ); ?>"><i class="fab fa-google-plus-square"></i></a>
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
    <?php echo get_theme_mod( "LandingPageTeamBottomArea","" );?>
</section>

<!-- LandingPage team -->



<!-- LandingPage Stats section -->

<section>
    <?php echo get_theme_mod( "LandingPageStatsTopArea","" );?>
</section>

<?php $LandingPageStatsRequir = get_theme_mod( "LandingPageStatsRequired","1")?>
<?php if( $LandingPageStatsRequir==1 ){?>
<section class="w3-stats pt-4 pb-5" id="stats">
    <div class="container pb-md-5 pb-4 LandingPageStats">

        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <p class="text-uppercase">
                <?php echo get_theme_mod( "LandingPageStatsMainTitle1" );if(get_theme_mod( "LandingPageStatsMainTitle1" )==''){echo 'Our Statistics';}?></p>
            <h3 class="title-style">
                <?php echo get_theme_mod( "LandingPageStatsMainTitle2" );if(get_theme_mod( "LandingPageStatsMainTitle2" )==''){echo 'We are Proud to Share with You';}?>
            </h3>
        </div>

        <div class="row text-center pt-4 justify-content-center">

            <?php $LandingPageStatsGrid1Requir = get_theme_mod( "LandingPageStatsGrid1Required","1")?>
            <?php if( $LandingPageStatsGrid1Requir==1 ){?>
            <div class="col-md-3 col-6">
                <div class="counter">
                    <img src="<?php if(get_theme_mod('LandingPageStats1Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageStats1Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageStats1Image'))=='') { echo  get_template_directory_uri()."/assets/images/icon-1.png";  }?>"
                        alt="" class="img-fluid">
                    <div class="timer count-title count-number mt-sm-1"
                        data-to="<?php echo get_theme_mod( "LandingPageStats1Number" );if(get_theme_mod( "LandingPageStats1Number" )==''){echo '36076';}?>"
                        data-speed="1500"></div>
                    <p class="count-text">
                        <?php echo get_theme_mod( "LandingPageStats1Title" );if(get_theme_mod( "LandingPageStats1Title" )==''){echo 'Students Enrolled';}?>
                    </p>
                </div>
            </div>
            <?php } ?>

            <?php $LandingPageStatsGrid2Requir = get_theme_mod( "LandingPageStatsGrid2Required","1")?>
            <?php if( $LandingPageStatsGrid2Requir==1 ){?>
            <div class="col-md-3 col-6">
                <div class="counter">
                    <img src="<?php if(get_theme_mod('LandingPageStats2Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageStats2Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageStats2Image'))=='') { echo  get_template_directory_uri()."/assets/images/icon-2.png";  }?>"
                        alt="" class="img-fluid">
                    <div class="timer count-title count-number mt-3"
                        data-to="<?php echo get_theme_mod( "LandingPageStats2Number" );if(get_theme_mod( "LandingPageStats2Number" )==''){echo '786';}?>"
                        data-speed="1500"></div>
                    <p class="count-text">
                        <?php echo get_theme_mod( "LandingPageStats2Title" );if(get_theme_mod( "LandingPageStats2Title" )==''){echo 'Our Branches';}?></p>
                </div>
            </div>
            <?php } ?>

            <?php $LandingPageStatsGrid3Requir = get_theme_mod( "LandingPageStatsGrid3Required","1")?>
            <?php if( $LandingPageStatsGrid3Requir==1 ){?>
            <div class="col-md-3 col-6 mt-md-0 mt-5">
                <div class="counter">
                    <img src="<?php if(get_theme_mod('LandingPageStats3Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageStats3Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageStats3Image'))=='') { echo  get_template_directory_uri()."/assets/images/icon-3.png";  }?>"
                        alt="" class="img-fluid">
                    <div class="timer count-title count-number mt-3"
                        data-to="<?php echo get_theme_mod( "LandingPageStats3Number" );if(get_theme_mod( "LandingPageStats3Number" )==''){echo '3630';}?>"
                        data-speed="1500"></div>
                    <p class="count-text">
                        <?php echo get_theme_mod( "LandingPageStats3Title" );if(get_theme_mod( "LandingPageStats3Title" )==''){echo 'Total Courses';}?></p>
                </div>
            </div>
            <?php } ?>

            <?php $LandingPageStatsGrid4Requir = get_theme_mod( "LandingPageStatsGrid4Required","1")?>
            <?php if( $LandingPageStatsGrid4Requir==1 ){?>
            <div class="col-md-3 col-6 mt-md-0 mt-5">
                <div class="counter">
                    <img src="<?php if(get_theme_mod('LandingPageStats4Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageStats4Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageStats4Image'))=='') { echo  get_template_directory_uri()."/assets/images/icon-4.png";  }?>"
                        alt="" class="img-fluid">
                    <div class="timer count-title count-number mt-3"
                        data-to="<?php echo get_theme_mod( "LandingPageStats4Number" );if(get_theme_mod( "LandingPageStats4Number" )==''){echo '6300';}?>"
                        data-speed="1500"></div>
                    <p class="count-text">
                        <?php echo get_theme_mod( "LandingPageStats4Title" );if(get_theme_mod( "LandingPageStats4Title" )==''){echo 'Awards Won';}?></p>
                </div>
            </div>
            <?php } ?>

        </div>

    </div>
</section>
<?php } ?>

<section>
    <?php echo get_theme_mod( "LandingPageStatsBottomArea","" );?>
</section>

<!-- /LandingPage Stats section -->


<!-- LandingPage Testimonials -->

<section>
    <?php echo get_theme_mod( "LandingPageTestimonialsTopArea","" );?>
</section>

<?php $LandingPageTestimonialsStatus = get_theme_mod( "LandingPageTestimonialsRequired","1")?>
<?php if( $LandingPageTestimonialsStatus==1 ){?>
<section class="w3l-index4 py-5" id="testimonials">
    <style>
        .w3l-index4 {
            background: url(<?php if(get_theme_mod('LandingPageTestimonialsBgImage') !='') {
                echo wp_get_attachment_url(get_theme_mod('LandingPageTestimonialsBgImage'));

            }

            if(wp_get_attachment_url(get_theme_mod('LandingPageTestimonialsBgImage'))=='') {
                echo get_template_directory_uri()."/assets/images/bg3.jpg";
            }

            ?>);
        }
    </style>
    <div class="container py-md-5 py-4 LandingPageTestimonials">
        <div class="content-slider text-center">
            <div class="clients-slider">
                <div class="mask">

                    <ul>

                        <?php $LandingPageTestimonial1Status = get_theme_mod( "LandingPageTestimonial1Required","1")?>
                        <?php if( $LandingPageTestimonial1Status==1 ){?>
                        <li class="anim1">
                            <img src="<?php if(get_theme_mod('LandingPageTestimonialsClient1Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTestimonialsClient1Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTestimonialsClient1Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi1.jpg";  }?>"
                                class="img-fluid rounded-circle" alt="client image" />
                            <blockquote class="quote">
                                <q><?php echo get_theme_mod( "LandingPageTestimonialsMessage1" ); if(get_theme_mod( "LandingPageTestimonialsMessage1" )==''){echo 'Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "LandingPageTestimonialsClient1Name" );if(get_theme_mod( "LandingPageTestimonialsClient1Name" )==''){echo 'Mario Spe';}?>
                            </div>
                        </li>
                        <?php }?>

                        <?php $LandingPageTestimonial2Status = get_theme_mod( "LandingPageTestimonial2Required","1")?>
                        <?php if( $LandingPageTestimonial2Status==1 ){?>
                        <li class="anim2">
                            <img src="<?php if(get_theme_mod('LandingPageTestimonialsClient2Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTestimonialsClient2Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTestimonialsClient2Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi2.jpg";  }?>"
                                class="img-fluid rounded-circle" alt="client image" />
                            <blockquote class="quote"><q><?php echo get_theme_mod( "LandingPageTestimonialsMessage2" ); if(get_theme_mod( "LandingPageTestimonialsMessage2" )==''){echo 'Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                    illo inventore.';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "LandingPageTestimonialsClient2Name" );if(get_theme_mod( "LandingPageTestimonialsClient2Name" )==''){echo 'Petey Cru';}?>
                            </div>
                        </li>
                        <?php }?>

                        <?php $LandingPageTestimonial3Status = get_theme_mod( "LandingPageTestimonial3Required","1")?>
                        <?php if( $LandingPageTestimonial3Status==1 ){?>
                        <li class="anim3">
                            <img src="<?php if(get_theme_mod('LandingPageTestimonialsClient3Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTestimonialsClient3Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTestimonialsClient3Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi3.jpg";  }?>"
                                class="img-fluid rounded-circle " alt="client image" />
                            <blockquote class="quote"><q><?php echo get_theme_mod( "LandingPageTestimonialsMessage3" ); if(get_theme_mod( "LandingPageTestimonialsMessage3" )==''){echo 'Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation.';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "LandingPageTestimonialsClient3Name" );if(get_theme_mod( "LandingPageTestimonialsClient3Name" )==''){echo 'Anna Sth';}?>
                            </div>
                        </li>
                        <?php }?>

                        <?php $LandingPageTestimonial4Status = get_theme_mod( "LandingPageTestimonial4Required","1")?>
                        <?php if( $LandingPageTestimonial4Status==1 ){?>
                        <li class="anim4">
                            <img src="<?php if(get_theme_mod('LandingPageTestimonialsClient4Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTestimonialsClient4Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTestimonialsClient4Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi1.jpg";  }?>"
                                class="img-fluid rounded-circle" alt="client image" />
                            <blockquote class="quote">
                                <q><?php echo get_theme_mod( "LandingPageTestimonialsMessage4" ); if(get_theme_mod( "LandingPageTestimonialsMessage4" )==''){echo 'Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "LandingPageTestimonialsClient4Name" );if(get_theme_mod( "LandingPageTestimonialsClient4Name" )==''){echo 'Gail For';}?>
                            </div>
                        </li>
                        <?php }?>

                        <?php $LandingPageTestimonial5Status = get_theme_mod( "LandingPageTestimonial5Required","1")?>
                        <?php if( $LandingPageTestimonial5Status==1 ){?>
                        <li class="anim5">
                            <img src="<?php if(get_theme_mod('LandingPageTestimonialsClient5Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTestimonialsClient5Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTestimonialsClient5Image'))=='') { echo  get_template_directory_uri()."/assets/images/testi2.jpg";  }?>"
                                class="img-fluid rounded-circle" alt="client image" />
                            <blockquote class="quote"><q><?php echo get_theme_mod( "LandingPageTestimonialsMessage5" ); if(get_theme_mod( "LandingPageTestimonialsMessage5" )==''){echo 'Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation.';}?>
                                </q> </blockquote>
                            <div class="source">-
                                <?php echo get_theme_mod( "LandingPageTestimonialsClient5Name" );if(get_theme_mod( "LandingPageTestimonialsClient5Name" )==''){echo 'Boye Fra';}?>
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
    <?php echo get_theme_mod( "LandingPageTestimonialsBottomArea","" );?>
</section>

<!-- //LandingPage Testimonials -->


<!-- Homepage Blog grids -->

<section>
    <?php echo get_theme_mod( "LandingPageBlogTopArea","" );?>
</section>

<?php $LandingPageBlogGridsRequir = get_theme_mod( "LandingPageBlogGridsRequired","1")?>
<?php if( $LandingPageBlogGridsRequir==1 ){?>

<div class="w3l-blog-block-5 py-5" id="blog">
    <div class="container py-md-5 py-4 LandingPageBlog">

        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <p class="text-uppercase">
                <?php echo get_theme_mod( "LandingPageBlogGridsTitle1" );if(get_theme_mod( "LandingPageBlogGridsTitle1" )==''){echo 'Our News';}?></p>
            <h3 class="title-style">
                <?php echo get_theme_mod( "LandingPageBlogGridsTitle2" );if(get_theme_mod( "LandingPageBlogGridsTitle2" )==''){echo 'Latest Blog Posts';}?>
            </h3>
        </div>

        <?php global $wp_customize;
                    if ( isset( $wp_customize ) ) {
                        ?>
        <!-- <img src="<?php if(get_theme_mod('LandingPageBlogGridsImage')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageBlogGridsImage') );} if  (wp_get_attachment_url(get_theme_mod('LandingPageBlogGridsImage'))=='') { echo  get_template_directory_uri()."/assets/images/BlogSection.jpg";  }?>"> -->
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

            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
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

                                <?php $LandingPageBlogAuthorRequir = get_theme_mod( "LandingPageBlogAuthorRequired","1")?>
                                <?php if( $LandingPageBlogAuthorRequir==1 ){?>
                                <a class="d-flex align-items-center" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID'));?>"
                                    title="23k followers">
                                    <img class="img-fluid" src="<?php print get_avatar_url( get_the_author_meta( 'ID' ), ['size' => '40'] ); ?>"
                                        alt="<?php the_author_meta('display_name'); ?>" style="max-width:40px"> <span
                                        class="small ms-2"><?php echo w3layouts_posted();?></span>
                                </a>
                                <?php } ?>

                                <?php $LandingPageBlogDateRequir = get_theme_mod( "LandingPageBlogDateRequired","1")?>
                                <?php if( $LandingPageBlogDateRequir==1 ){?>
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
    <?php echo get_theme_mod( "LandingPageBlogBottomArea","" );?>
</section>

<!-- //Homepage Blog grids -->




<!-- Contact section -->

<section>
    <?php echo get_theme_mod( "LandingPageContactTopArea","" );?>
</section>

<?php $LPContactStatus = get_theme_mod( "LandingPageContactRequired","1")?>
<?php if( $LPContactStatus==1 ){?>

<section class="w3l-contact py-5" id="contact">
    <div class="container py-md-5 py-4 LPContactSection">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <p class="text-uppercase"><?php echo get_theme_mod( "LPContactTitle1" );if(get_theme_mod( "LPContactTitle1" )==''){echo 'Get In Touch';}?></p>
            <h3 class="title-style"><?php echo get_theme_mod( "LPContactTitle2" );if(get_theme_mod( "LPContactTitle2" )==''){echo 'Contact Us';}?></h3>
        </div>
        <div class="row contact-block">

            <!-- contact-form -->
            <?php $LPContactFormStatus = get_theme_mod( "LandingPageContactFormRequired","1")?>
            <?php if( $LPContactFormStatus==1 ){?>

            <div class="col-md-7 contact-left LandingPageContactForm">
                <?php
                    ///Contact US email code Starts here
                    $LPContactToEmail=get_theme_mod( "LPContactToEmail", "w3lSender" );
                    $LPContactFromName=$_REQUEST[get_theme_mod( "LandingPageContactFormName", "w3lName" )];
                    $LPContactFromSubject=$_REQUEST[get_theme_mod( "LandingPageContactFormSubject", "w3lSubject" )];
                    $LPContactFromEmail=$_REQUEST[get_theme_mod( "LandingPageContactFormEmail", "w3lSender" )];
                    $LPContactFromMessage=$_REQUEST[get_theme_mod( "LandingPageContactFormMessage", "w3lMessage" )];
                    if($LPContactFromEmail!='' && $LPContactToEmail!=''){
                    $LPContactEmailMessage = '<table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                        <thead>
                            <tr>
                            <th scope="col" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;line-height:30px"></th>
                            <th scope="col" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;line-height:30px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Name : </td>
                            <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"> '.$LPContactFromName.'</td>

                            </tr>
                            <tr>
                            <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Email : </td>
                            <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"> '.$LPContactFromEmail.'</td>
                            </tr>

                            <tr>
                            <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Message : </td>
                            <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"> '.$LPContactFromMessage.'</td>
                            </tr>
                        </tbody>
                    </table>';
                    add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));
                    
                    wp_mail( $LPContactToEmail, $LPContactFromSubject, $LPContactEmailMessage );

                    ?>

                <h3 class="font-weight-bold mb-4 text-success mx-0" width="100"> We got your details. We will contact you soon</h3>

                <?php
                    ///Contact US email code Ends here

                    } ?>


                <form action="<?php echo get_theme_mod( "LandingPageContactFormURL", "" );?>" method="post" class="signin-form">
                    <div class="input-grids">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="<?php echo get_theme_mod( "LandingPageContactFormName", "w3lName" );?>" id="w3lName"
                                    placeholder="<?php echo get_theme_mod( "LandingPageContactFormNameplaceholder", "Your Name" );?>" class="contact-input"
                                    required="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="<?php echo get_theme_mod( "LandingPageContactFormEmail", "w3lSender" );?>" id="w3lSender"
                                    placeholder="<?php echo get_theme_mod( "LandingPageContactFormEmailplaceholder", "Your Email" );?>" class="contact-input"
                                    required="" />
                            </div>
                        </div>

                        <input type="text" name="<?php echo get_theme_mod( "LandingPageContactFormSubject", "w3lSubject" );?>" id="w3lSubect"
                            placeholder="<?php echo get_theme_mod( "LandingPageContactFormSubjectplaceholder", "Subject" );?>" class="contact-input"
                            required="" />

                        <input type="text" name="<?php echo get_theme_mod( "LandingPageContactFormWebsite", "w3lWebsite" );?>" id="w3lWebsite"
                            placeholder="<?php echo get_theme_mod( "LandingPageContactFormWebsiteplaceholder", "Website URL" );?>" class="contact-input"
                            required="" />
                    </div>
                    <div class="form-input">
                        <textarea name="<?php echo get_theme_mod( "LandingPageContactFormMessage", "w3lMessage" );?>" id="w3lMessage"
                            placeholder="<?php echo get_theme_mod( "LandingPageContactFormMessageplaceholder", "Type your message here" );?>"
                            required=""></textarea>
                    </div>
                    <div class="text-start">
                        <button class="btn btn-style btn-style-3"><?php echo get_theme_mod( "LandingPageContactFormBtn", "Send Message" );?></button>
                    </div>
                </form>
            </div>
            <?php }?>

            <?php $LPContactDetailsStatus = get_theme_mod( "LPContactDetailsRequired","1")?>
            <?php if( $LPContactDetailsStatus==1 ){?>
            <div class="col-md-5 ps-lg-5 mt-md-0 mt-5">
                <div class="contact-right">

                    <div class="cont-details">

                    <?php $LandingPageContactAddressStatus = get_theme_mod( "LandingPageContactAddressRequired","1")?>
                    <?php if( $LandingPageContactAddressStatus==1 ){?>
                        <div class="d-flex contact-grid">
                            <div class="cont-left text-center me-3">
                                <i class="<?php echo get_theme_mod( "LPContactAddressIcon" );if(get_theme_mod( "LPContactAddressIcon" )==''){echo 'fas fa-building';}?>"></i>
                            </div>
                            <div class="cont-right">
                                <h6><?php echo get_theme_mod( "LPContactAddressTitle" );if(get_theme_mod( "LPContactAddressTitle" )==''){echo 'Company Address';}?></h6>
                                <p><?php echo get_theme_mod( "LPContactAddress","Edu School, 10001, 5th Avenue, 12202 street, London." );?></p>
                            </div>
                        </div>
                    <?php }?>

                    <?php $LPContactNumberStatus = get_theme_mod( "LandingPageContactNumberRequired","1")?>
                    <?php if( $LPContactNumberStatus==1 ){?>
                        <div class="d-flex contact-grid mt-4 pt-lg-2">
                            <div class="cont-left text-center me-3">
                                <i class="<?php echo get_theme_mod( "LPContactPhoneIcon" );if(get_theme_mod( "LPContactPhoneIcon" )==''){echo 'fas fa-phone-alt';}?>"></i>
                            </div>
                            <div class="cont-right">
                                <h6><?php echo get_theme_mod( "LPContactNumberTitle" );if(get_theme_mod( "LPContactNumberTitle" )==''){echo 'Call Us';}?></h6>
                                <p><a href="<?php echo get_theme_mod( "LPContactNumberUrl","tel:+1(21) 234 4567" ); ?>"><?php echo get_theme_mod( "LPContactNumber" );if(get_theme_mod( "LPContactNumber" )==''){echo '+1(21) 112 7368';}?></a></p>
                            </div>
                        </div>
                    <?php }?>

                    <?php $LPContactOfficialStatus = get_theme_mod( "LandingPageContactOfficialRequired","1")?>
                    <?php if( $LPContactOfficialStatus==1 ){?>
                        <div class="d-flex contact-grid mt-4 pt-lg-2">
                            <div class="cont-left text-center me-3">
                                <i class="<?php echo get_theme_mod( "LPContactMailIcon" );if(get_theme_mod( "LPContactMailIcon" )==''){echo 'fas fa-envelope-open-text';}?>"></i>
                            </div>
                            <div class="cont-right">
                                <h6><?php echo get_theme_mod( "LPContactMailTitle" );if(get_theme_mod( "LPContactMailTitle" )==''){echo 'Email Us';}?></h6>
                                <p><a href="mailto:<?php echo get_theme_mod( "LPContactOfficialMailUrl","example@mail.com" ); ?>" class="mail"><?php echo get_theme_mod( "LPContactOfficialMailtxt" );if(get_theme_mod( "LPContactOfficialMailtxt" )==''){echo 'example@mail.com';}?></a></p>
                            </div>
                        </div>
                    <?php }?>

                    <?php $LPContactSupportStatus = get_theme_mod( "LandingPageContactSupportRequired","1")?>
                    <?php if( $LPContactSupportStatus==1 ){?>
                        <div class="d-flex contact-grid mt-4 pt-lg-2">
                            <div class="cont-left text-center me-3">
                                <i class="<?php echo get_theme_mod( "LPContactSupportIcon" );if(get_theme_mod( "LPContactSupportIcon" )==''){echo 'fas fa-headphones-alt';}?>"></i>
                            </div>
                            <div class="cont-right">
                                <h6><?php echo get_theme_mod( "LPContactSupportTitle" );if(get_theme_mod( "LPContactSupportTitle" )==''){echo 'Customer Support';}?></h6>
                                <p><a href="mailto:<?php echo get_theme_mod( "LPContactSupportMailUrl","info@support.com" ); ?>" class="mail"><?php echo get_theme_mod( "LPContactSupportMailtxt" );if(get_theme_mod( "LPContactSupportMailtxt" )==''){echo 'info@support.com';}?></a></p>
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
    <?php echo get_theme_mod( "LandingPageContactBottomArea","" );?>
</section>

<!-- /contact-section -->


<!-- Contact Map section -->

<section>
    <?php echo get_theme_mod( "LandingPageContactMapBottomArea","" );?>
</section>

<?php $ContactMapStatus = get_theme_mod( "LandingPageContactMapRequired","1")?>
<?php if( $ContactMapStatus==1 ){?>
<div class="map LandingPageContactMap text-center">
    <iframe
        src="<?php echo get_theme_mod( "LandingPageContactMapURL", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" );?>"
        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
</div>
<?php }?>

<section>
    <?php echo get_theme_mod( "LandingPageContactMapBottomArea","" );?>
</section>
<!-- //Contact Map section -->


<!-- LandingPage Join Number -->

<section>
    <?php echo get_theme_mod( "LandingPageJoinNumberTopArea","" );?>
</section>

<?php $LandingPageJoinNumberRequir = get_theme_mod( "LandingPageJoinNumberRequired","1")?>
<?php if( $LandingPageJoinNumberRequir==1 ){?>
<section class="w3l-call-to-action-6">
    <div class="container py-md-5 py-sm-4 py-5 LandingPageJoinNumber">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="left-content-call">
                <h3 class="title-big">
                    <?php echo get_theme_mod( "LandingPageJoinNumberTitle" );if(get_theme_mod( "LandingPageJoinNumberTitle" )==''){echo "Call To Enroll Your Child!";}?>
                </h3>
                <p class="text-white mt-1">
                    <?php echo get_theme_mod( "LandingPageJoinNumberContent" );if(get_theme_mod( "LandingPageJoinNumberContent" )==''){echo 'Begin the change today!';}?>
                </p>
            </div>
            <div class="right-content-call mt-lg-0 mt-4">
                <ul class="buttons">
                    <li class="phone-sec me-lg-4"><i
                            class="<?php echo get_theme_mod( "LandingPageJoinNumberIcon" ); if(get_theme_mod( "LandingPageJoinNumberIcon" )==''){echo 'fas fa-phone-volume';}?>"></i>
                        <a class="call-style-w3"
                            href="<?php echo get_theme_mod( "LandingPageJoinNumberURL","tel:+1(23) 456 789 0000" ); ?>"><?php echo get_theme_mod( "LandingPageJoinNumber" );if(get_theme_mod( "LandingPageJoinNumber" )==''){echo "+1(23) 456 789 0000";}?></a>
                    </li>
                    <li><a href="<?php echo get_theme_mod( "LandingPageJoinNumberBtnUrl","#url" ); ?>"
                            class="btn btn-style btn-style-2 mt-lg-0 mt-3"><?php echo get_theme_mod( "LandingPageJoinNumberBtnText" );if(get_theme_mod( "LandingPageJoinNumberBtnText" )==''){echo "Join for free";}?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php }?>

<section>
    <?php echo get_theme_mod( "LandingPageJoinNumberBottomArea","" );?>
</section>

<!-- //LandingPage Join Number -->





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