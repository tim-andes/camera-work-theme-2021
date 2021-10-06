<?php
/**
 * The header for the front page of our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package camera-work-theme-2021
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<section class="hero hero-text">
    <header id="header">
        
        <!--   Announcements   -->
        <div id="announcements-container-front-hero">
            <div id="announcements-text-front-hero">
                Holiday Sale! All Gallery Prints 20% off until Jan. 1, 2022!
            </div><!-- #announcements-text-front-hero -->
        </div><!-- #announcements-container-front-hero -->
        
        <!--   Nav Menu Items   -->
        <div class="hero-nav-container">
            <nav id="nav-id">
                <ul id="ul-nav-front-hero">
                <li><a id="gallery-li-nav" class="li-nav-front-hero" href="#">Gallery</a></li>
                <li><a id="contact-li-nav" class="li-nav-front-hero" href="#">Contact</a></li>
                <li><a id="about-li-nav" class="li-nav-front-hero" href="#">About</a></li>
                </ul><!-- #ul-nav-section-front-hero -->
            </nav><!-- #nav-id -->
        </div><!-- #hero-nav-container -->
        
    </header>
</section>