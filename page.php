<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lucien
 */

get_header();
?>
	<div class="page-container">
		<?php get_sidebar(); ?>

		<main id="primary" class="single-page">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div>
	<?php get_footer(); ?>
<?php