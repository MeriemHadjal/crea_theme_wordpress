<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php ambika_content_class(); ?>>
		<main id="main" <?php ambika_main_class(); ?>>
			<?php
			/**
			 * ambika_before_main_content hook.
			 *
			 */
			do_action( 'ambika_before_main_content' );
			?>

			<div class="inside-article">

				<?php
				/**
				 * ambika_before_content hook.
				 *
				 *
				 * @hooked ambika_featured_page_header_inside_single - 10
				 */
				do_action( 'ambika_before_content' );
				?>

				<header class="entry-header">
					<h1 class="entry-title" itemprop="headline"><?php echo esc_html( apply_filters( 'ambika_404_title', __( 'Oops! That page can&rsquo;t be found.', 'ambika' ) ) ); // WPCS: XSS OK. ?></h1>
				</header><!-- .entry-header -->

				<?php
				/**
				 * ambika_after_entry_header hook.
				 *
				 *
				 * @hooked ambika_post_image - 10
				 */
				do_action( 'ambika_after_entry_header' );
				?>

				<div class="entry-content" itemprop="text">
					<?php
					echo '<p>' . esc_html( apply_filters( 'ambika_404_text', __( 'It looks like nothing was found at this location. Maybe try searching?', 'ambika' ) ) ) . '</p>'; // WPCS: XSS OK.

					get_search_form();
					?>
				</div><!-- .entry-content -->

				<?php
				/**
				 * ambika_after_content hook.
				 *
				 */
				do_action( 'ambika_after_content' );
				?>

			</div><!-- .inside-article -->

			<?php
			/**
			 * ambika_after_main_content hook.
			 *
			 */
			do_action( 'ambika_after_main_content' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	/**
	 * ambika_after_primary_content_area hook.
	 *
	 */
	 do_action( 'ambika_after_primary_content_area' );

	 ambika_construct_sidebars();

get_footer();
