<?php
/**
 * This is the file for the front page of your photo website, /
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

//  get_header(); // should pull a custom front-page-only header with no nav or logo
?>

<?php
get_header('front');

wp_head();
?>

<?php
// if(is_front_page())
// {
// get_header('front');
// }
// else
// {
// get_header();
// }
// wp_head();
?>

<!-- SiteOrigin Page Builder for content -->

<?php
get_footer();
?>