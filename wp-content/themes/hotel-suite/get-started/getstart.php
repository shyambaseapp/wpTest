<?php
/**
 * Admin functions.
 *
 * @package Hotel Suite
 */

define('HOTEL_SUITE_SUPPORT',__('https://wordpress.org/support/theme/hotel-suite/','hotel-suite'));
define('HOTEL_SUITE_REVIEW',__('https://wordpress.org/support/theme/hotel-suite/reviews/#new-post','hotel-suite'));
define('HOTEL_SUITE_BUY_NOW',__('https://www.wpradiant.net/blocks/suite-wordpress-theme/','hotel-suite'));
define('HOTEL_SUITE_LIVE_DEMO',__('https://www.wpradiant.net/pattern/hotel-suite/','hotel-suite'));
define('HOTEL_SUITE_PRO_DOC',__('https://www.wpradiant.net/tutorial/hotel-suite-pro/','hotel-suite'));

/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function hotel_suite_admin_menu_page() {

	$theme = wp_get_theme( get_template() );

	add_theme_page(
		$theme->display( 'Name' ),
		$theme->display( 'Name' ),
		'manage_options',
		'hotel-suite',
		'hotel_suite_do_admin_page'
	);

}
add_action( 'admin_menu', 'hotel_suite_admin_menu_page' );

function hotel_suite_admin_theme_style() {
	wp_enqueue_style('hotel-suite-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
	wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script('admin-notice-script', 'example_ajax_obj', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'hotel_suite_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function hotel_suite_do_admin_page() {

	$theme = wp_get_theme( get_template() );
	?>
	<div class="hotel-suite-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( HOTEL_SUITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'hotel-suite' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( HOTEL_SUITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Live Preview', 'hotel-suite' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( HOTEL_SUITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'hotel-suite' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->
		<div class="four-col">

			<div class="col">

				<h3><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Upgrade to Pro', 'hotel-suite' ); ?></h3>

				<p>
					<?php esc_html_e( 'To gain access to extra theme options and more interesting features, upgrade to pro version.', 'hotel-suite' ); ?>
				</p>

				<p>
					<a class="button green button-primary" href="<?php echo esc_url( HOTEL_SUITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Upgrade to Pro', 'hotel-suite' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'hotel-suite' ); ?></h3>

				<p>
					<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'hotel-suite' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'hotel-suite' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'hotel-suite' ); ?></h3>
				<p>
					<?php esc_html_e( 'We would love to hear your feedback.', 'hotel-suite' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( HOTEL_SUITE_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'hotel-suite' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'hotel-suite' ); ?></h3>

				<p>
					<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'hotel-suite' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( HOTEL_SUITE_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'hotel-suite' ); ?></a>
				</p>

			</div><!-- .col -->

		</div><!-- .four-col -->

	</div><!-- .wrap -->
	<?php
}