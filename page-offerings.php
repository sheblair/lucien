<?php
/**
 * The template for displaying the Offerings page
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
				$offerings_image_1 = get_field('offerings_image_1');
				$offerings_image_2 = get_field('offerings_image_2');
				$offerings_image_3 = get_field('offerings_image_3');
				$offerings_image_4 = get_field('offerings_image_4');
				$size = "full";
			?>

			<div class="single-page" id="offerings">
				<div class="offerings-images">
					<figure>
						<?php echo wp_get_attachment_image( $offerings_image_1, $size ); ?>
					</figure>
					<?php if($offerings_image_2): ?>
						<figure class="img">
							<?php echo wp_get_attachment_image( $offerings_image_2, $size ) ?>
						</figure>
					<?php endif; ?>
					<?php if($offerings_image_3): ?>
						<figure class="img">
							<?php echo wp_get_attachment_image( $offerings_image_3, $size ) ?>
						</figure>
					<?php endif; ?>
					<?php if($offerings_image_4): ?>
						<figure class="img">
							<?php echo wp_get_attachment_image( $offerings_image_4, $size ) ?>
						</figure>
					<?php endif; ?>
				</div>
				<div class="offerings-container">
                    <?php get_template_part( 'template-parts/content', 'offerings' ); ?>
				</div>
			</div>

			<?php endwhile; ?> <!-- End of the loop -->
	    </main><!-- #main -->
    </div>

<?php get_footer(); ?>