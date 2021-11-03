<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package camera-work-theme-2021
 */

get_header();
?>

	<main id="404-main" class="site-main  min-h-screen lg:grid-cols-6 lg:grid-rows-6">

		<div class="404-main-child error-404 not-found min-h-full lg:col-start-2 lg:col-span-4 lg:row-start-2 lg:row-span-4">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'camera-work-theme-2021' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<!-- Create a stylized 404 -->
				<div class="back-button-container">
					<?php do_action('back_button'); ?>
				</div>			
			</div><!-- .page-content -->

		</div><!-- .404-main-child .error-404 .not-found-->

	</main><!-- #main -->

<?php
get_footer();
