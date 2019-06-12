<?php
/**
 * Builds our admin page.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'ambika_create_menu' ) ) {
	add_action( 'admin_menu', 'ambika_create_menu' );
	/**
	 * Adds our "Ambika" dashboard menu item
	 *
	 */
	function ambika_create_menu() {
		$ambika_page = add_theme_page( 'Ambika', 'Ambika', apply_filters( 'ambika_dashboard_page_capability', 'edit_theme_options' ), 'ambika-options', 'ambika_settings_page' );
		add_action( "admin_print_styles-$ambika_page", 'ambika_options_styles' );
	}
}

if ( ! function_exists( 'ambika_options_styles' ) ) {
	/**
	 * Adds any necessary scripts to the Ambika dashboard page
	 *
	 */
	function ambika_options_styles() {
		wp_enqueue_style( 'ambika-options', get_template_directory_uri() . '/css/admin/admin-style.css', array(), AMBIKA_VERSION );
	}
}

if ( ! function_exists( 'ambika_settings_page' ) ) {
	/**
	 * Builds the content of our Ambika dashboard page
	 *
	 */
	function ambika_settings_page() {
		?>
		<div class="wrap">
			<div class="metabox-holder">
				<div class="ambika-masthead clearfix">
					<div class="ambika-container">
						<div class="ambika-title">
							<a href="<?php echo esc_url(AMBIKA_THEME_URL); ?>" target="_blank"><?php esc_html_e( 'Ambika', 'ambika' ); ?></a> <span class="ambika-version"><?php echo esc_html( AMBIKA_VERSION ); ?></span>
						</div>
						<div class="ambika-masthead-links">
							<?php if ( ! defined( 'AMBIKA_PREMIUM_VERSION' ) ) : ?>
								<a class="ambika-masthead-links-bold" href="<?php echo esc_url(AMBIKA_THEME_URL); ?>" target="_blank"><?php esc_html_e( 'Premium', 'ambika' );?></a>
							<?php endif; ?>
							<a href="<?php echo esc_url(AMBIKA_WPKOI_AUTHOR_URL); ?>" target="_blank"><?php esc_html_e( 'WPKoi', 'ambika' ); ?></a>
                            <a href="<?php echo esc_url(AMBIKA_DOCUMENTATION); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'ambika' ); ?></a>
						</div>
					</div>
				</div>

				<?php
				/**
				 * ambika_dashboard_after_header hook.
				 *
				 */
				 do_action( 'ambika_dashboard_after_header' );
				 ?>

				<div class="ambika-container">
					<div class="postbox-container clearfix" style="float: none;">
						<div class="grid-container grid-parent">

							<?php
							/**
							 * ambika_dashboard_inside_container hook.
							 *
							 */
							 do_action( 'ambika_dashboard_inside_container' );
							 ?>

							<div class="form-metabox grid-70" style="padding-left: 0;">
								<h2 style="height:0;margin:0;"><!-- admin notices below this element --></h2>
								<form method="post" action="options.php">
									<?php settings_fields( 'ambika-settings-group' ); ?>
									<?php do_settings_sections( 'ambika-settings-group' ); ?>
									<div class="customize-button hide-on-desktop">
										<?php
										printf( '<a id="ambika_customize_button" class="button button-primary" href="%1$s">%2$s</a>',
											esc_url( admin_url( 'customize.php' ) ),
											esc_html__( 'Customize', 'ambika' )
										);
										?>
									</div>

									<?php
									/**
									 * ambika_inside_options_form hook.
									 *
									 */
									 do_action( 'ambika_inside_options_form' );
									 ?>
								</form>

								<?php
								$modules = array(
									'Backgrounds' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Blog' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Colors' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Copyright' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Disable Elements' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Demo Import' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Hooks' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Import / Export' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Menu Plus' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Page Header' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Secondary Nav' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Spacing' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Typography' => array(
											'url' => AMBIKA_THEME_URL,
									),
									'Elementor Addon' => array(
											'url' => AMBIKA_THEME_URL,
									)
								);

								if ( ! defined( 'AMBIKA_PREMIUM_VERSION' ) ) : ?>
									<div class="postbox ambika-metabox">
										<h3 class="hndle"><?php esc_html_e( 'Premium Modules', 'ambika' ); ?></h3>
										<div class="inside" style="margin:0;padding:0;">
											<div class="premium-addons">
												<?php foreach( $modules as $module => $info ) { ?>
												<div class="add-on activated ambika-clear addon-container grid-parent">
													<div class="addon-name column-addon-name" style="">
														<a href="<?php echo esc_url( $info[ 'url' ] ); ?>" target="_blank"><?php echo esc_html( $module ); ?></a>
													</div>
													<div class="addon-action addon-addon-action" style="text-align:right;">
														<a href="<?php echo esc_url( $info[ 'url' ] ); ?>" target="_blank"><?php esc_html_e( 'More info', 'ambika' ); ?></a>
													</div>
												</div>
												<div class="ambika-clear"></div>
												<?php } ?>
											</div>
										</div>
									</div>
								<?php
								endif;

								/**
								 * ambika_options_items hook.
								 *
								 */
								do_action( 'ambika_options_items' );
								?>
							</div>

							<div class="ambika-right-sidebar grid-30" style="padding-right: 0;">
								<div class="customize-button hide-on-mobile">
									<?php
									printf( '<a id="ambika_customize_button" class="button button-primary" href="%1$s">%2$s</a>',
										esc_url( admin_url( 'customize.php' ) ),
										esc_html__( 'Customize', 'ambika' )
									);
									?>
								</div>

								<?php
								/**
								 * ambika_admin_right_panel hook.
								 *
								 */
								 do_action( 'ambika_admin_right_panel' );

								  ?>
                                
                                <div class="wpkoi-doc">
                                	<h3><?php esc_html_e( 'Ambika documentation', 'ambika' ); ?></h3>
                                	<p><?php esc_html_e( 'If You`ve stuck, the documentation may help on WPKoi.com', 'ambika' ); ?></p>
                                    <a href="<?php echo esc_url(AMBIKA_DOCUMENTATION); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Ambika documentation', 'ambika' ); ?></a>
                                </div>
                                
                                <div class="wpkoi-social">
                                	<h3><?php esc_html_e( 'WPKoi on Facebook', 'ambika' ); ?></h3>
                                	<p><?php esc_html_e( 'If You want to get useful info about WordPress and the theme, follow WPKoi on Facebook.', 'ambika' ); ?></p>
                                    <a href="<?php echo esc_url(AMBIKA_WPKOI_SOCIAL_URL); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Go to Facebook', 'ambika' ); ?></a>
                                </div>
                                
                                <div class="wpkoi-review">
                                	<h3><?php esc_html_e( 'Help with You review', 'ambika' ); ?></h3>
                                	<p><?php esc_html_e( 'If You like Ambika theme, show it to the world with Your review. Your feedback helps a lot.', 'ambika' ); ?></p>
                                    <a href="<?php echo esc_url(AMBIKA_WORDPRESS_REVIEW); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Add my review', 'ambika' ); ?></a>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}

if ( ! function_exists( 'ambika_admin_errors' ) ) {
	add_action( 'admin_notices', 'ambika_admin_errors' );
	/**
	 * Add our admin notices
	 *
	 */
	function ambika_admin_errors() {
		$screen = get_current_screen();

		if ( 'appearance_page_ambika-options' !== $screen->base ) {
			return;
		}

		if ( isset( $_GET['settings-updated'] ) && 'true' == $_GET['settings-updated'] ) {
			 add_settings_error( 'ambika-notices', 'true', esc_html__( 'Settings saved.', 'ambika' ), 'updated' );
		}

		if ( isset( $_GET['status'] ) && 'imported' == $_GET['status'] ) {
			 add_settings_error( 'ambika-notices', 'imported', esc_html__( 'Import successful.', 'ambika' ), 'updated' );
		}

		if ( isset( $_GET['status'] ) && 'reset' == $_GET['status'] ) {
			 add_settings_error( 'ambika-notices', 'reset', esc_html__( 'Settings removed.', 'ambika' ), 'updated' );
		}

		settings_errors( 'ambika-notices' );
	}
}
