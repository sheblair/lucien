<?php
/**
 * The template for displaying the About page
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
				$about_image_1 = get_field('about_image_1');
				$about_image_2 = get_field('about_image_2');
				$about_image_3 = get_field('about_image_3');
				$about_image_4 = get_field('about_image_4');
				$size = "full";
			?>
				<div id="about-page">
					<div class="about-text">
						<?php the_content(); ?>
					</div>
					<figure class="about-img">
						<?php echo wp_get_attachment_image( $about_image_1, $size ) ?>
					</figure>
					<?php if($about_image_2): ?>
						<figure class="about-img">
							<?php echo wp_get_attachment_image( $about_image_2, $size ) ?>
						</figure>
					<?php endif; ?>
					<?php if($about_image_3): ?>
						<figure class="about-img">
							<?php echo wp_get_attachment_image( $about_image_3, $size ) ?>
						</figure>
					<?php endif; ?>
					<?php if($about_image_4): ?>
						<figure class="about-img">
							<?php echo wp_get_attachment_image( $about_image_4, $size ) ?>
						</figure>
					<?php endif; ?>
				</div>
			<?php endwhile; // End of the loop. ?>
	    </main><!-- #main -->
		
    </div>
