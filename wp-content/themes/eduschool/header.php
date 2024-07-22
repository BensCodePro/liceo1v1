<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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
	<?php wp_body_open(); ?>
	<?php
	 $SiteName = get_bloginfo( 'name' );
	 if(!empty(get_bloginfo( 'description' )))
	 {
		 $SiteDiscription = ' - '.get_bloginfo( 'description' );
	 }

	 $logoselected =get_option('headerlogo');
			?>

	<header id="site-header" class="main-header fixed-top">
		<div class="container w3HeaderLogoEd">
			<nav class="navbar navbar-expand-lg navbar-light">
				<?php $HeaderImageLogoStatus = get_theme_mod( "HeaderImageLogo","0")?>
				<?php if( $HeaderImageLogoStatus==1 ){
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			?>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<!-- <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" /> -->
					<img src="<?php echo $image[0]; ?>" class="logo img-fluid" alt="<?php echo $SiteName;?><?php echo $SiteDiscription;?>">
				</a>
				<?php }?>
				<?php if($HeaderImageLogoStatus!=1) {
			$logoseIcon = get_theme_mod( "w3layoutsHeaderlogoIcon", 'fas fa-graduation-cap' ); 
			$logoseText = get_theme_mod( "w3layoutsHeaderlogoText", 'Edu School' ); 
			?>
				<h1><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<i class="<?php echo $logoseIcon; ?>"></i><?php echo $logoseText; ?>
					</a></h1>

				<?php } ?>

				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
						<span class="navbar-toggler-icon fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarScroll">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'container' => false,
						'menu_class' => '',
						'fallback_cb' => '__return_false',
						'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll %2$s">%3$s</ul>',
						'depth' => 2,
						'walker' => new bootstrap_5_wp_nav_menu_walker()
					) );
					?>

					<?php $HeaderSearchRequir = get_theme_mod( "HeaderSearchRequired","1")?>
					<?php if( $HeaderSearchRequir==1 ){?>										
					<!-- search-right -->
					<div class="header-search position-relative HeaderSearch">
						<div class="search-right mx-lg-2">
							<a href="#search" class="btn search-btn p-0" title="search">
								<i class="fas fa-search"></i></a>
							<!-- search popup -->
							<div id="search" class="pop-overlay">
								<div class="popup">
									<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="GET" class="search-box">
										<input type="search" placeholder="<?php echo get_theme_mod( 'HeaderSearchPlaceHolder', 'Enter Keyword...');?>" name="s"
											required="required" autofocus="">
										<button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
									</form>
								</div>
								<a class="close" href="#close">×</a>
							</div>
							<!-- //search popup -->
						</div>
					</div>
					<!--//search-right-->
					<?php } ?>

				</div>

				<!-- toggle switch for light and dark theme -->
				<?php $DarkandLightModeRequir = get_theme_mod( "DarkandLightModeRequired","1")?>
				<?php if( $DarkandLightModeRequir==1 ){?>
				<div class="cont-ser-position DarkandLight">
						<nav class="navigation">
								<div class="theme-switch-wrapper">
										<label class="theme-switch" for="checkbox">
												<input type="checkbox" id="checkbox">
												<div class="mode-container">
														<i class="gg-sun"></i>
														<i class="gg-moon"></i>
												</div>
										</label>
								</div>
						</nav>
				</div>
				<?php } ?>
				<!-- //toggle switch for light and dark theme -->
			</nav>
		</div>
		</section>
	</header>