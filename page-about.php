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
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="about-page">
					<div class="about-text">
						<?php the_content(); ?>
					</div>
					<figure class="about-img">
						<?php lucien_post_thumbnail(); ?>
					</figure>
				</div>
			<?php endwhile; // End of the loop. ?>
	    </main><!-- #main -->
		
    </div>
