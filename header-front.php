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
<style>
html {
  font-size: 10px;
}

body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}

.hero {
  height: 100vh;
  background-image: url(https://images.unsplash.com/photo-1500417148159-68083bd7333a);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.hero-text {
  color: white;
}

#announcements-container-front-hero {
  display: flex;
  justify-content: space-around;
  align-items: center;
  
  height: 10vh;
  min-height: 2rem;
  
  border-bottom: 1px white solid;
  box-sizing: border-box;
}

#announcements-text-front-hero {
  font-size: 1.5rem;
}

.hero-nav-container {
  
}

#ul-nav-front-hero {
  list-style-type: none;
  height: 90vh;
  padding: 0;
  margin: 0;
  
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.li-nav-front-hero {
  color: inherit;
  text-decoration: none;
  font-size: 4.5rem;
  transition: 0.3s;
}

.li-nav-front-hero:hover {
  opacity:0.6;
}

/* Desktop Nav Arrangement */

/* Mobile Nav Arrangement */

/* Arrange in a column */
/* #nav-id {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
} 
*/

/* Give nav items space */
/*
.li-nav-hero {
  margin: 10px 0px;
}
*/    
</style>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <section class="hero hero-text">
    <header id="header">
        
        <!--   Announcements   -->
        <div id="announcements-container-front-hero">
        <div id="announcements-text-front-hero">
            Christmas Sale! All Gallery prints 20% off!
        </div>
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