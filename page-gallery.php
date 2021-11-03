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

	<main id="gallery-main" class="site-main min-h-screen lg:grid-cols-6 lg:grid-rows-6">
		<!-- SiteOrigin Page Builder for content -->
        <div id="gallery-main-child" class="min-h-full lg:col-start-2 lg:col-span-4 lg:row-start-2 lg:row-span-4">
            <?php
                $page = get_page_by_title('Gallery');
                echo apply_filters('the_content', $page->post_content);
            ?>
        </div><!-- gallery-main-child -->
	</main><!-- #gallery-main .site-main -->
</div><!-- body-container Note: starts in header.php -->

<?php
get_footer();
