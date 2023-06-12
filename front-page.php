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
			<?php while ( have_posts() ) : the_post(); ?>

			<div id="homepage">
				<p class="homepage-text"><?php the_content(); ?></p>
				<figure class="homepage-img">
					<?php lucien_post_thumbnail(); ?>
				</figure>
			</div>

			<?php endwhile; ?> <!-- End of the loop -->
	</main><!-- #main -->
	</div>
	
