<?php
/**
 * The template for displaying the footer.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	</div><!-- #content -->
</div><!-- #page -->

<?php
/**
 * ambika_before_footer hook.
 *
 */
do_action( 'ambika_before_footer' );
?>

<div <?php ambika_footer_class(); ?>>
	<?php
	/**
	 * ambika_before_footer_content hook.
	 *
	 */
	do_action( 'ambika_before_footer_content' );

	/**
	 * ambika_footer hook.
	 *
	 *
	 * @hooked ambika_construct_footer_widgets - 5
	 * @hooked ambika_construct_footer - 10
	 */
	do_action( 'ambika_footer' );

	/**
	 * ambika_after_footer_content hook.
	 *
	 */
	do_action( 'ambika_after_footer_content' );
	?>
</div><!-- .site-footer -->

<?php
/**
 * ambika_after_footer hook.
 *
 */
do_action( 'ambika_after_footer' );

wp_footer();
?>

</body>
</html>
