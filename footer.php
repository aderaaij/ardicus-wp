<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage ardicus-wp
 * @since Ardicus WP 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<?php do_action( 'ardicus_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'ardicus' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'ardicus' ); ?>"><?php printf( __( 'Proudly powered by %s', 'ardicus' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>