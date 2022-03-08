<?php
/**
 * The header for our theme. This will be the header for all pages other than the landing page.
 * Landing page: custom-header.php
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
	<!-- Custom Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site min-h-screen relative pb-10">
	<div id="body-container" class="lg:h-screen lg:grid lg:grid-cols-12 lg:grid-rows-6 md:grid-cols-6">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'camera-work-theme-2021' ); ?></a>

		<header id="masthead" class="site-header lg:h-screen lg:grid lg:grid-rows-6">
			<div class="site-branding"><!-- Logo area, row 1 -->
				<?php
				the_custom_logo();
				?>
			</div><!-- END .site-branding -->

			<nav id="site-navigation" class="lg:row-start-2">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
			</nav><!-- END #site-navigation -->
		</header><!-- END #masthead -->