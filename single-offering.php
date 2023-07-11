<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lucien
 */

get_header();
?>
	<div class="page-container">
		<?php get_sidebar(); ?>

		<main id="primary" class="single-page">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content-offering', get_post_type() );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div>
<?php get_footer();
