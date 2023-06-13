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
				$offerings_image = get_field('offerings_image');
				$size = "full";
			?>

			<div class="page" id="offerings-page">
				<figure class="img">
					<?php echo wp_get_attachment_image( $offerings_image, $size ); ?>
				</figure>
				<div class="offerings-container">
                    <?php get_template_part( 'template-parts/content', 'offerings' ); ?>
				</div>
			</div>

			<?php endwhile; ?> <!-- End of the loop -->
	    </main><!-- #main -->
    </div>
