<?php
/**
 * The template for displaying the landing page
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
			<?php
			while ( have_posts() ) : the_post();
				$homepage_text = get_field('homepage_text');
				$homepage_image = get_field('homepage_image');
				$size = 'full';

			?>

			<div id="homepage">
				<p class="homepage-text"><?php echo $homepage_text; ?></p>
				<figure class="homepage-img">
					<?php echo wp_get_attachment_image($homepage_image, $size) ?>
				</figure>
			</div>

			<?php endwhile; ?> <!-- End of the loop -->
	</main><!-- #main -->
	</div>
	
