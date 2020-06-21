<?php
/**
 * Understrap modify editor
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Registers an editor stylesheet for the theme.
 */

add_action( 'admin_init', 'understrap_wpdocs_theme_add_editor_styles' );

if ( ! function_exists( 'understrap_wpdocs_theme_add_editor_styles' ) ) {
	function understrap_wpdocs_theme_add_editor_styles() {
		add_editor_style( 'css/custom-editor-style.min.css' );
	}
}

// Add TinyMCE style formats.
add_filter( 'mce_buttons_2', 'understrap_tiny_mce_style_formats' );

if ( ! function_exists( 'understrap_tiny_mce_style_formats' ) ) {
	function understrap_tiny_mce_style_formats( $styles ) {

		array_unshift( $styles, 'styleselect' );
		return $styles;
	}
}


add_filter( 'tiny_mce_before_init', 'understrap_tiny_mce_before_init' );

if ( ! function_exists( 'understrap_tiny_mce_before_init' ) ) {
	function understrap_tiny_mce_before_init( $settings ) {

		$style_formats = array(
			array(
				'title'    => 'Lead Paragraph',
				'selector' => 'p',
				'classes'  => 'lead',
				'wrapper'  => true,
			),
			array(
				'title'  => 'Small',
				'inline' => 'small',
			),
			array(
				'title'   => 'Blockquote',
				'block'   => 'blockquote',
				'classes' => 'blockquote',
				'wrapper' => true,
			),
			array(
				'title'   => 'Blockquote Footer',
				'block'   => 'footer',
				'classes' => 'blockquote-footer',
				'wrapper' => true,
			),
			array(
				'title'  => 'Cite',
				'inline' => 'cite',
			),
		);

		if ( isset( $settings['style_formats'] ) ) {
			$orig_style_formats = json_decode( $settings['style_formats'], true );
			$style_formats      = array_merge( $orig_style_formats, $style_formats );
		}

		$settings['style_formats'] = json_encode( $style_formats );
		return $settings;
	}
}

/**
 * Register support for Gutenberg wide images in your theme
 */
function mytheme_setup() {
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Teal', 'themeLangDomain' ),
            'slug' => 'teal',
            'color' => '#076873',
        ),
        array(
            'name' => __( 'Mustard', 'themeLangDomain' ),
            'slug' => 'mustard',
            'color' => '#F28B30',
        ),
        array(
            'name' => __( 'Orange', 'themeLangDomain' ),
            'slug' => 'orange',
            'color' => '#F23C13',
        ),
        array(
            'name' => __( 'Pink', 'themeLangDomain' ),
            'slug' => 'pink',
            'color' => '#F2887E',
        ),
        array(
            'name' => __( 'Maroon', 'themeLangDomain' ),
            'slug' => 'maroon',
            'color' => '#A65D56',
        ),
        array(
            'name' => __( 'White', 'themeLangDomain' ),
            'slug' => 'white',
            'color' => '#ffffff',
        ),
        array(
            'name' => __( 'Midnight', 'themeLangDomain' ),
            'slug' => 'midnight',
            'color' => '#03272b',
        ),				

    ) );
}
 
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );
add_theme_support( 'editor-gradient-presets', array() );
add_theme_support( 'disable-custom-gradients' );
