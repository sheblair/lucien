<?php
/**
 * The template for displaying the home page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lucien
 */

get_header();
?>
	<div class="page-container">
		<?php get_sidebar(); ?>

		<main id="primary" class="site-main">
			<?php while ( have_posts() ) : the_post(); 
				$homepage_image_1 = get_field('homepage_image_1');
				$homepage_image_2 = get_field('homepage_image_2');
				$homepage_image_3 = get_field('homepage_image_3');
				$homepage_image_4 = get_field('homepage_image_4');
				$size = "small";
			?>

			<div class="page">
				<div class="homepage-text">
					<?php the_content(); ?>
				</div>
				<div class="home-images">
						<figure class="img">
							<?php echo wp_get_attachment_image( $homepage_image_1, $size ) ?>
						</figure>
						<?php if($homepage_image_2): ?>
							<figure class="img">
								<?php echo wp_get_attachment_image( $homepage_image_2, $size ) ?>
							</figure>
						<?php endif; ?>
						<?php if($homepage_image_3): ?>
							<figure class="img">
								<?php echo wp_get_attachment_image( $homepage_image_3, $size ) ?>
							</figure>
						<?php endif; ?>
						<?php if($homepage_image_4): ?>
							<figure class="img">
								<?php echo wp_get_attachment_image( $homepage_image_4, $size ) ?>
							</figure>
						<?php endif; ?>
					</div>
			</div>

			<?php endwhile; ?> <!-- End of the loop -->
	</main><!-- #main -->
	</div>
	
