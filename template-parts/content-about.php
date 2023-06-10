<?php
/**
 * Template part for displaying the About page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lucien
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="about-page">
		<div class="about-text">
			<?php the_content(); ?>
		</div>
		<figure class="about-img">
			<?php lucien_post_thumbnail(); ?>
		</figure>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
