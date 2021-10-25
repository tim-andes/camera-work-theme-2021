<?php
/**
 * Template Name: Front Page Template
 * 
 * This is the file for the front page of your photo website.
 * -- With get_header('front');, we load in header-front.php
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package camera-work-theme-2021
 */
?>

<?php
// header-front.php
get_header('front');

wp_head();
?>

<div class="front-page-body-footer-container"><!-- This ends in footer.php-->

<?php
// Pull in PageBuilder/Editor content from Home page in WordPress Admin Dashboard
if( get_option( 'page_on_front' ) ) {
    echo apply_filters( 'the_content', get_post( get_option( 'page_on_front' ) )->post_content );
}
?>

<?php
get_footer();
?>
