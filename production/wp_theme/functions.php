<?php
/**
 * Theme bootstrap for the generated flexible page builder.
 *
 * @package MTVBuilderAI
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mtv_builder_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);
}
add_action( 'after_setup_theme', 'mtv_builder_theme_setup' );

function mtv_builder_enqueue_assets() {
	wp_enqueue_style(
		'mtv-builder-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'mtv_builder_enqueue_assets' );

function mtv_builder_acf_json_save_path( $path ) {
	return get_template_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'mtv_builder_acf_json_save_path' );

function mtv_builder_acf_json_load_paths( $paths ) {
	$paths[] = get_template_directory() . '/acf-json';
	return array_unique( $paths );
}
add_filter( 'acf/settings/load_json', 'mtv_builder_acf_json_load_paths' );

function mtv_builder_get_layout_partial( $layout ) {
	$map = array(
		'hero'         => 'partials/sections/hero.php',
		'trust_badges' => 'partials/sections/trust-badges.php',
		'services'     => 'partials/sections/services.php',
		'about'        => 'partials/sections/about.php',
		'brands'       => 'partials/sections/brands.php',
		'final_cta'    => 'partials/sections/final-cta.php',
		'contact'      => 'partials/sections/contact.php',
		'footer'       => 'partials/sections/footer.php',
	);

	return $map[ $layout ] ?? '';
}

function mtv_builder_render_flexible_sections( $field_name = 'page_sections' ) {
	if ( ! function_exists( 'have_rows' ) || ! have_rows( $field_name ) ) {
		return;
	}

	while ( have_rows( $field_name ) ) {
		the_row();

		$layout  = get_row_layout();
		$partial = mtv_builder_get_layout_partial( $layout );

		if ( ! $partial ) {
			continue;
		}

		$template = locate_template( $partial, false, false );

		if ( $template ) {
			include $template;
		}
	}
}

function mtv_builder_render_image( $image, $size = 'full', $attributes = array() ) {
	if ( empty( $image ) ) {
		return '';
	}

	$image_id = is_array( $image ) && ! empty( $image['ID'] ) ? (int) $image['ID'] : (int) $image;

	if ( ! $image_id ) {
		return '';
	}

	$defaults = array(
		'class'    => '',
		'loading'  => 'lazy',
		'decoding' => 'async',
	);

	if ( is_array( $image ) && ! empty( $image['alt'] ) && empty( $attributes['alt'] ) ) {
		$defaults['alt'] = $image['alt'];
	}

	$attributes = wp_parse_args( $attributes, $defaults );

	if ( isset( $attributes['alt'] ) ) {
		$attributes['alt'] = esc_attr( $attributes['alt'] );
	}

	if ( isset( $attributes['class'] ) ) {
		$attributes['class'] = trim( $attributes['class'] );
	}

	return wp_get_attachment_image( $image_id, $size, false, $attributes );
}

function mtv_builder_format_rich_text( $text ) {
	if ( empty( $text ) ) {
		return '';
	}

	return wp_kses_post( wpautop( $text ) );
}
