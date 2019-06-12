<?php
/**
 * The template for displaying single posts.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php ambika_article_schema( 'CreativeWork' ); ?>>
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
			<?php
			/**
			 * ambika_before_entry_title hook.
			 *
			 */
			do_action( 'ambika_before_entry_title' );

			if ( ambika_show_title() ) {
				the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' );
			}

			/**
			 * ambika_after_entry_title hook.
			 *
			 *
			 * @hooked ambika_post_meta - 10
			 */
			do_action( 'ambika_after_entry_title' );
			?>
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
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ambika' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<?php
		/**
		 * ambika_after_entry_content hook.
		 *
		 *
		 * @hooked ambika_footer_meta - 10
		 */
		do_action( 'ambika_after_entry_content' );

		/**
		 * ambika_after_content hook.
		 *
		 */
		do_action( 'ambika_after_content' );
		?>
	</div><!-- .inside-article -->
</article><!-- #post-## -->
