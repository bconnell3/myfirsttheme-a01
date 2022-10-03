<?php
/***
*   Template part for displaying content in the front-page.php (home page)
*   @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
*   @package myfirsttheme
*/
?>

<article <?php post_class();?> id="post-<?php the_ID();?>" >
    <main>
        <header>
            <!-- get the page title -->
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>

        <div class="entry-content">
            <!-- 
                -- displays the page/post content.
                -- You can add more html tags and other WP template tags/functions such as custom post types ( we will be), but what you see is the very minimum what you need to have your content to be displayed.
            -->
            <?php the_content(); ?>
        </div>
    </main>
</article>

