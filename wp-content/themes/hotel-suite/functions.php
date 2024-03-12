<?php
/**
 * Hotel Suite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hotel-suite
 * @since hotel-suite 1.0
 */


if ( ! function_exists( 'hotel_suite_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since hotel-suite 1.0
	 *
	 * @return void
	 */
	function hotel_suite_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'hotel_suite_support' );

if ( ! function_exists( 'hotel_suite_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since hotel-suite 1.0
	 *
	 * @return void
	 */
	function hotel_suite_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'hotel-suite-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style( 
			'hotel-suite-animate-css', 
			esc_url(get_template_directory_uri()).'/assets/css/animate.css' 
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'hotel-suite-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'hotel_suite_styles' );

/* Enqueue Wow Js */
function hotel_suite_scripts() {
	wp_enqueue_script( 
		'hotel-suite-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', 
		array('jquery') 
	);
	
}
add_action( 'wp_enqueue_scripts', 'hotel_suite_scripts' );

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

// Get Started
require get_template_directory() . '/get-started/getstart.php';

/**
 * Display the admin notice if not dismissed.
 */
function hotel_suite_admin_notice() {
    // Check if the notice is dismissed
    $dismissed = get_user_meta(get_current_user_id(), 'hotel_suite_dismissed_notice', true);

    // Display the notice only if not dismissed
    if (!$dismissed) {
        ?>
        <div class="updated notice notice-success is-dismissible notice-get-started-class" data-notice="get-start" style="display: flex;padding: 10px;">
            <p><?php echo esc_html('Initiate your theme exploration by clicking on the "Getting Started" Button.', 'hotel-suite'); ?></p>
            <a style="margin-left: 30px;" class="button button-primary"
               href="<?php echo esc_url(admin_url('themes.php?page=hotel-suite')); ?>"><?php esc_html_e('Getting Started', 'hotel-suite') ?></a>
        </div>
        <?php
    }
}

// Hook to display the notice
add_action('admin_notices', 'hotel_suite_admin_notice');

/**
 * AJAX handler to dismiss the notice.
 */
function hotel_suite_dismissed_notice() {
    // Set user meta to indicate the notice is dismissed
    update_user_meta(get_current_user_id(), 'hotel_suite_dismissed_notice', true);
    die();
}

// Hook for the AJAX action
add_action('wp_ajax_hotel_suite_dismissed_notice', 'hotel_suite_dismissed_notice');

/**
 * Clear dismissed notice state when switching themes.
 */
function hotel_suite_switch_theme() {
    // Clear the dismissed notice state when switching themes
    delete_user_meta(get_current_user_id(), 'hotel_suite_dismissed_notice');
}

// Hook for switching themes
add_action('after_switch_theme', 'hotel_suite_switch_theme');