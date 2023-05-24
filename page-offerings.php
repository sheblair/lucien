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
			<?php
			while ( have_posts() ) : the_post();
				$offerings_image = get_field('offerings_image');
				$size = 'full';
				$offerings_title_1 = get_field('offerings_title_1');
				$offerings_title_2 = get_field('offerings_title_2');
				$offerings_title_3 = get_field('offerings_title_3');
				$offerings_text_1 = get_field('offerings_text_1');
				$offerings_text_2 = get_field('offerings_text_2');
				$offerings_text_3 = get_field('offerings_text_3');
			?>

			<div id="offerings-page">
				<figure class="offerings-img">
					<?php echo wp_get_attachment_image($offerings_image, $size); ?>
				</figure>
				<div class="offerings-container">
					<div class="offering">
						<p class="offerings-title"><?php echo $offerings_title_1; ?></p>
						<p class="offerings-text"><?php echo $offerings_text_1; ?></p>
					</div>
					<div class="offering">
						<p class="offerings-title"><?php echo $offerings_title_2; ?></p>
						<p class="offerings-text"><?php echo $offerings_text_2; ?></p>
					</div>
			
					<div class="offering">
						<p class="offerings-title"><?php echo $offerings_title_3; ?></p>
						<p class="offerings-text"><?php echo $offerings_text_3; ?></p>
					</div>
				</div>
			</div>

			<?php endwhile; ?> <!-- End of the loop -->
	    </main><!-- #main -->
    </div>
