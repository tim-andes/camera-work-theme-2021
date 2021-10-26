<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package camera-work-theme-2021
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://github.com/tim-andes/camera-work-theme-2021', 'camera-work-theme-2021' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'camera-work-theme-2021' ), 'WordPress ' );
				?>
			</a>
			<span class="sep">|</span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( ' Theme: %1$s by %2$s.', 'camera-work-theme-2021' ), 'camera-work-theme-2021', '<a href="https://github.com/tim-andes">Tim Andes</a>' );
				?>
		</div><!-- END .site-info -->
	</footer><!-- END #colophon -->
</div><!-- END #page Note: Starts in header.php-->

<?php wp_footer(); ?>
</div><!-- END .front-page-body-footer-container Note: Starts in front-page.php -->
</body>
</html>
