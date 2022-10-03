<?php
/**
 * The template for displaying the custom home page.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myfirsttheme
 */
?>

<?php get_header(); ?>

    <h2>This is front-page.php</h2>

    <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', 'home' );
                endwhile;
            else:
                get_template_part('template-parts/content', 'none');
            endif;
        ?>

    <?php get_footer(); ?>