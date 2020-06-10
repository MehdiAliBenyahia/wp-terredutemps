<?php
/**
 * Eduberg Theme Customizer.
 *
 * @package Eduberg
 */

/**
 * Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function eduberg_customize_register( $wp_customize ) {

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'            => '.site-title a',
			'container_inclusive' => false,
			'render_callback'     => 'eduberg_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'            => '.site-description',
			'container_inclusive' => false,
			'render_callback'     => 'eduberg_customize_partial_blogdescription',
		) );
	}

	// Load controls.
	require_once trailingslashit( get_template_directory() ) . '/inc/customizer/controls.php';

	// Sanitization.
	require_once trailingslashit( get_template_directory() ) . '/inc/customizer/sanitize.php';

	// Load options.
	require_once trailingslashit( get_template_directory() ) . '/inc/customizer/options/options.php';

	$wp_customize->register_section_type( 'Eduberg_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new Eduberg_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Eduberg Pro', 'eduberg' ),
				'pro_text' => esc_html__( 'Buy Pro', 'eduberg' ),
				'pro_url'  => 'https://www.wpconcern.com/downloads/eduberg/',
				'priority'  => 1,
			)
		)
	);

}
add_action( 'customize_register', 'eduberg_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function eduberg_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function eduberg_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Register customizer controls scripts.
 *
 * @since 2.0.0
 */
function eduberg_customize_scripts() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_script( 'eduberg-controls', get_template_directory_uri() . '/inc/customizer/js/controls' . $min . '.js', array( 'jquery', 'customize-controls' ), '1.0.3', true );
	wp_enqueue_style( 'eduberg-controls-style', get_template_directory_uri() . '/inc/customizer/css/controls' . $min . '.css', array(), '1.0.3' );
}

add_action( 'customize_controls_enqueue_scripts', 'eduberg_customize_scripts', 0 );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function eduberg_customize_preview_js() {
	wp_enqueue_script( 'eduberg-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'eduberg_customize_preview_js' );