<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Awesomeone
 */

get_header();
?>


    <div class="content-area">
        <div class="middle-align content_sidebar">
            <div class="site-main" id="sitemain">
            </div>
            <!-- disable main page get sidebar <?php get_sidebar();?> -->
            <div class="clear"></div>
        </div>
    </div>

<?php get_footer(); ?>
