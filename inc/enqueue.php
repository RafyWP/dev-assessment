<?php
/**
 * Enqueue scripts and styles.
 *
 * @package DevAssessment
 */

namespace DevAssessment\Enqueue;

/**
 * Enqueue the `global.css` file.
 *
 * The `global.css` file is enqueued on all pages and is used for global styles.
 *
 * @return void
 */
function global_theme_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
    $file_time     = filemtime( get_template_directory() . '/assets/css/global.css' );
	$css_version   = $theme_version . '.' . $file_time;

	wp_enqueue_style(
        'dev-assessment-global-theme-style',
        get_template_directory_uri() . '/assets/css/global.css',
        [],
        $css_version
    );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\global_theme_styles' );

/**
 * Enqueue the `scripts.js` file and associated dependencies.
 *
 * The `scripts.js` file is enqueued on all pages and is used for global scripts.
 *
 * @return void
 */
function front_end_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );
    $file_time     = filemtime( get_template_directory() . '/assets/js/scripts.js' );
	$js_version    = $theme_version . '.' . $file_time;

	wp_enqueue_script(
        'dev-assessment-front-end-scripts',
        get_template_directory_uri() . '/assets/js/scripts.js',
        ['jquery'],
        $js_version,
        true
    );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\front_end_scripts' );
