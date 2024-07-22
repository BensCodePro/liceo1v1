<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package w3layouts
 */

?>


<div class="col-md-6 mt-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="blog-card-single">
		<div class="grids5-info">

			<a href="<?php the_permalink() ?>">
				<?php w3layouts_post_thumbnail(); ?>
			</a>

			<div class="blog-info">

				<h4>
					<a href="<?php the_permalink() ?>">
						<?php
							if ( is_singular() ) :
								the_title( '', '' );
							else :
								the_title( '', '' );
							endif;
						?>
					</a>
				</h4>

				<!-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
					officia deserunt.</p> -->

				<div class="d-flex align-items-center justify-content-between mt-4">

					<?php $BlogHomePostAuthStatus = get_theme_mod( "BlogHomePostAuthRequired","1")?>
					<?php if( $BlogHomePostAuthStatus==1 ){?>
						<div class="blogpost-author d-flex align-items-center">
						<a class="d-flex align-items-center" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID'));?>" title="23k followers">
						<img class="img-fluid" src="<?php print get_avatar_url( get_the_author_meta( 'ID' ), ['size' => '40'] ); ?>" alt="<?php the_author_meta('display_name'); ?>" style="max-width:40px"> <span class="small ms-2"><?php echo w3layouts_posted();?></span>
					</a>
					</div>
					<?php }?>

					<?php $BlogHomePostDateStatus = get_theme_mod( "BlogHomePostDateRequired","1")?>
					<?php if( $BlogHomePostDateStatus==1 ){?>
						<p class="date-text"><i class="far fa-calendar-alt me-1"></i><?php echo get_the_date( 'F j, Y' ); ?></p>
					<?php }?>

				</div>


			</div>

		</div>
	</div>
	</article>

</div>



<!-- </article>#post-<?php the_ID(); ?> -->