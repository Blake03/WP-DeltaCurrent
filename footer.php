<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DeltaCurrent.com
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
			<?php dynamic_sidebar( 'footer-widget' ); ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'deltacurrent' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'deltacurrent' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'deltacurrent' ), 'deltacurrent', '<a href="https://automattic.com/" rel="designer">Blake Sims</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<?php include_once("analyticstracking.php") ?>
</body>
</html>
