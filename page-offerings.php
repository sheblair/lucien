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

			<div id="offerings-page">
				<figure class="offerings-img">
					<?php echo wp_get_attachment_image( $offerings_image, $size ); ?>
				</figure>
				<div class="offerings-container">
					<div class="offering">
                        <?php the_title(); ?>
                        <?php the_content(); ?>
                    </div>
				</div>
			</div>

			<?php endwhile; ?> <!-- End of the loop -->
	    </main><!-- #main -->
    </div>
