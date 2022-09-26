<?php
/**
 * The template for displaying all pages.
 * 
 * This is the template that displays all pages by default. Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site may use a different template.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package myfirsttheme
 */
?>

<?php get_header(); ?>

    <main>
        <h2>This is page.php</h2>

        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_title( '<h2>', '</h2>' );
                    the_post_thumbnail();
                    the_excerpt();
                endwhile;
            else:
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
        ?>
    </main>

<?php get_footer(); ?>