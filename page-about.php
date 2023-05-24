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
			<?php
			while ( have_posts() ) : the_post();

				// get_template_part( 'template-parts/content', 'page' );

				// // If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

				$about_text = get_field('about_text');
				$about_image = get_field('about_image');
				$size = 'full';

			?>

			<div id="about-page">
				<div class="about-text">
					<?php echo $about_text; ?>
				</div>
				<figure class="about-img">
					<?php echo wp_get_attachment_image($about_image, $size) ?>
				</figure>
			</div>

			<?php endwhile; ?> <!-- End of the loop -->
	    </main><!-- #main -->
    </div>
