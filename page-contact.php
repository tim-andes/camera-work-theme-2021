<?php
/**
 * The template for displaying all pages other than the landing page (front-page.php).
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package camera-work-theme-2021
 */

get_header(); // not front page header, but normal header
?>

	<main id="contact-main" class="site-main lg:col-start-3 lg:col-end-11 md:col-start-3 md:col-end-6 row-start-2">
		<!-- SiteOrigin Page Builder for content -->
        <div class="grid-container-1"></div>
        <div id="contact-form" class="grid-container-2">
            <?php 
                $page = get_page_by_title('Contact');
                echo apply_filters('the_content', $page->post_content);
            ?>
        </div>
        <div class="grid-container-3"></div>
	</main><!-- #contact-main .site-main -->
</div><!-- body-container Note: starts in header.php -->

<?php
get_footer();
