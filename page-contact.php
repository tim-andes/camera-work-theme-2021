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

	<main id="contact" class="site-main">
		<!-- SiteOrigin Page Builder for content -->
        <div id="contact-form">
            <?php 
                $page = get_page_by_title('Contact');
                echo apply_filters('the_content', $page->post_content);
            ?>
        </div>
	</main><!-- #contact -->

<?php
get_footer();
