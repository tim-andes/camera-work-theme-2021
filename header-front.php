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
	<!-- TO DO: Create one head.php file to include in all headers. -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Add Custom Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<section class="hero-image bg-center bg-no-repeat bg-cover h-screen text-white">
    <header id="header">
        
        <!--   Announcements   -->
        <div id="announcements-container-front-hero" class="border-white border-solid border-b">
            <p id="announcements-text-front-hero" class="text-center">
                <!-- Holiday Sale! All Gallery Prints 20% off until Jan. 1, 2022! -->
            </p><!-- #announcements-text-front-hero -->
        </div><!-- #announcements-container-front-hero -->
        
        <!--   Nav Menu Items   -->
        <div id="hero-nav-front-container">
            <nav id="nav-front">
                <ul id="ul-nav-front-hero">
                <li><a id="gallery-li-nav" class="li-nav-front-hero" href="<?php echo site_url('/gallery'); ?>"><h2>GALLERY</h2></a></li>
                <li><a id="contact-li-nav" class="li-nav-front-hero" href="<?php echo site_url('/contact'); ?>"><h2>CONTACT</h2></a></li>
                <li><a id="about-li-nav" class="li-nav-front-hero" href="<?php echo site_url('/about'); ?>"><h2>ABOUT</h2></a></li>
                </ul><!-- #ul-nav-section-front-hero -->
            </nav><!-- #nav-id -->
        </div><!-- #hero-nav-container -->
        
    </header><!-- #header -->
</section><!-- .hero-image .bg-center .bg-no-repeat .bg-cover .h-screen .text-white -->