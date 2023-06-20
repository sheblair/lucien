<?php
/**
 * Template part for displaying Offerings posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lucien
 */

?>

<?php
    $args = array( 'category_name' => 'offerings' );

    $loop = new WP_Query($args);

    while ( $loop -> have_posts() ) { $loop->the_post(); ?>

        <div class="offering">
            <?php the_title(); ?>
            <?php the_content(); ?>
        </div>

    <?php
}