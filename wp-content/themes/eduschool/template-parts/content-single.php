<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package w3layouts
 */

?>


<!-- inner banner -->
<section class="inner-banner py-5">
  <style>
    .inner-banner {
      background-image: url(<?php if(get_theme_mod('BlogSinglePageBannerBgImage') !='') {
        echo wp_get_attachment_url(get_theme_mod('BlogSinglePageBannerBgImage'));
      }

      if(wp_get_attachment_url(get_theme_mod('BlogSinglePageBannerBgImage'))=='') {
        echo get_template_directory_uri()."/assets/images/banner3.jpg";
      }

      ?>);
    }
  </style>
  <div class="w3l-breadcrumb py-lg-5">
    <div class="container BlogSinglePageBanner">
      <?php $BlogSinglePageMainTitleStatus = get_theme_mod( "BlogSinglePageMainTitleRequired","1")?>
      <?php if( $BlogSinglePageMainTitleStatus==1 ){?>
      <h4 class="inner-text-title font-weight-bold pt-5">
        <?php echo get_theme_mod( "BlogSinglePageBannerMainTitle" );if(get_theme_mod( "BlogSinglePageBannerMainTitle" )==''){echo 'Blog Single';}?></h4>
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




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
	</header><!-- entry-header -->


	
	<section class="w3l-blogpost-content py-5">
        <div class="container py-md-5 py-4 w3BlogLayout">

				<div class="row">

					<?php	$w3layoutsArticleLayout=get_theme_mod( "w3layoutsArticleLayout");
					// echo 'Article Layout : '.$w3layoutsArticleLayout;
					?>

					<?php	if($w3layoutsArticleLayout=='sidebarleft'){ get_sidebar(); }?>
					<?php
					if($w3layoutsArticleLayout!='sidebarnone'){?>
					<div class="col-lg-8 text-11 pr-lg-5">
						<?php }
						if($w3layoutsArticleLayout=='sidebarnone'){?>
						<div class="col-lg-12 text-11">

							<?php }  ?>


							<div class="text11-content">
								
							<h4>
								<?php if ( is_singular() ) :
										the_title( '', '' );
									else :
										the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
									endif;?>
							</h4>

							<div class="single-post-image mb-4">
								<?php if ( has_post_thumbnail() ) { ?>
									<?php w3layouts_post_thumbnail(); ?>
								<?php }?>
							</div>

							<div class="single-post-content">

								<div class="entry-content">
										<?php
										the_content(
											sprintf(
												wp_kses(
													/* translators: %s: Name of current post. Only visible to screen readers */
													__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'w3layouts' ),
													array(
														'span' => array(
															'class' => array(),
														),
													)
												),
												wp_kses_post( get_the_title() )
											)
										);

										wp_link_pages(
											array(
												'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'w3layouts' ),
												'after'  => '</div>',
											)
										);

										?>


										<?php $BlogArticleAuthorCardStatus = get_theme_mod( "BlogArticleAuthorCardRequired","1")?>
										<?php if( $BlogArticleAuthorCardStatus==1 ){?>
										<div class="author-card author-listhny my-lg-5 my-sm-4 w3ArticleAuth">
											<div class="row">
												<div class="author-left col-lg-3 col-md-4 mb-md-0 mb-4">
													<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID'));?>">
														<img class="img-fluid" src="<?php print get_avatar_url( get_the_author_meta( 'ID' ), ['size' => '200'] ); ?>"
															alt="<?php the_author_meta('display_name'); ?>">
													</a>
												</div>
												<div class="author-right col-lg-9 col-md-8 position-relative align-self ps-xl-4 ps-lg-5">

													<h4 class="mb-0"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID'));?>"
															class="title-team-28"><?php the_author_meta('display_name'); ?></a></h4>
													<p class="para-team my-0"><?php the_author_meta('user_description'); ?></p>

													<div class="share-icons mt-4">

														<?php
													if(!empty(get_the_author_meta('facebookurl')))
													{?>
														<a href="<?php the_author_meta('facebookurl'); ?>"><span class="fab fa-facebook-f"></span></a>
														<?php }
													?>

														<?php
													if(!empty(get_the_author_meta('twitterurl')))
													{?>
														<a href="<?php the_author_meta('twitterurl'); ?>"><span class="fab fa-twitter"></span></a>
														<?php }
													?>

														<?php
													if(!empty(get_the_author_meta('pinteresturl')))
													{?>
														<a href="<?php the_author_meta('pinteresturl'); ?>"><span class="fab fa-pinterest-p"></span></a>
														<?php }
													?>

														<?php
													if(!empty(get_the_author_meta('instagramurl')))
													{?>
														<a href="<?php the_author_meta('instagramurl'); ?>"><span class="fab fa-instagram"></span></a>
														<?php }
													?>

														<?php
													if(!empty(get_the_author_meta('vkurl')))
													{?>
														<a href="<?php the_author_meta('vkurl'); ?>"><span class="fab fa-vk"></span></a>
														<?php }
													?>

														<?php
													if(!empty(get_the_author_meta('tumblrurl')))
													{?>
														<a href="<?php the_author_meta('tumblrurl'); ?>"><span class="fab fa-tumblr"></span></a>
														<?php }
													?>

														<?php
													if(!empty(get_the_author_meta('dribbleurl')))
													{?>
														<a href="<?php the_author_meta('dribbleurl'); ?>" class="vk"><span class="fab fa-dribbble"></span></a>
														<?php }?>

													</div>
												</div>
											</div>
										</div>
										<?php }?>
									</div>
								</div>

								<?php	the_post_navigation(
									array(
										'prev_text' => '<span class="nav-subtitle"> <span class="fa fa-arrow-left" aria-hidden="true"> </span>   ' . esc_html__( 'Publicación anterior', 'w3layouts' ) . '</span> <span class="nav-title">%title</span>',
										'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Siguiente publicación', 'w3layouts' ) . ' <span class="fa fa-arrow-right ml-2" aria-hidden="true"></span> </span>  <span class="nav-title">%title</span>',
									)
								);
								?>

								<?php $BlogArticlePostCommentsStatus = get_theme_mod( "PostCommentSectionRequired","1")?>
								<?php if( $BlogArticlePostCommentsStatus==1 ){?>
									<div class="w3PostComments">
										<?php // If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;
									?>
									</div>
								<?php }?>

							</div>
							</div>

						<?php 
						// if($BLOGlayoutselected==1){ get_sidebar(); }
						?>

						<?php	if($w3layoutsArticleLayout=='sidebarright'){ get_sidebar(); }?>

					</div>
				</div>


			</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->






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