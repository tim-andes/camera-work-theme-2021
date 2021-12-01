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

	<main id="gallery-main" class="site-main lg:col-start-3 lg:col-end-11 md:col-start-3 row-start-2">
		<!-- SiteOrigin Page Builder for content -->
        <div class="grid-container-1"></div>
        <div id="gallery-container" class="grid-container-2">
            <?php
                $page = get_page_by_title('Gallery');
                echo apply_filters('the_content', $page->post_content);
            ?>

            <!-- Gallery photographs loop -->
            <?php 
            /**
             * Setup query to show the photographs.
             * Output the thumbnail.
             */
            /**
             *                 $args = array(  
             *       'post_type' => 'photographs',
             *       'post_status' => 'publish',
             *       'posts_per_page' => 2
             *   );

             *   $loop = new WP_Query( $args ); 
                    
             *   while ( $loop->have_posts() ) : $loop->the_post(); 
             *       the_post_thumbnail('medium_large');
             *   endwhile;

             *   wp_reset_postdata(); 
            */


            ?>

        </div><!-- gallery-main-child -->
        <div class="grid-container-3"></div>
	</main><!-- #gallery-main .site-main -->
</div><!-- body-container Note: starts in header.php -->

<?php
get_footer();
