<?php
/**
 * The template for displaying the header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php ambika_body_schema();?> <?php body_class(); ?>>
	<?php
	/**
	 * new WordPress action since version 5.2
	 */
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
	
	/**
	 * ambika_before_header hook.
	 *
	 *
	 * @hooked ambika_do_skip_to_content_link - 2
	 * @hooked ambika_top_bar - 5
	 * @hooked ambika_add_navigation_before_header - 5
	 */
	do_action( 'ambika_before_header' );

	/**
	 * ambika_header hook.
	 *
	 *
	 * @hooked ambika_construct_header - 10
	 */
	do_action( 'ambika_header' );

	/**
	 * ambika_after_header hook.
	 *
	 *
	 * @hooked ambika_featured_page_header - 10
	 */
	do_action( 'ambika_after_header' );
	?>

	<div id="page" class="hfeed site grid-container container grid-parent">
		<div id="content" class="site-content">
			<?php
			/**
			 * ambika_inside_container hook.
			 *
			 */
			do_action( 'ambika_inside_container' );
