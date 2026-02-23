<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        $child_style_path = get_stylesheet_directory() . '/style.css';
        $child_style_version = file_exists( $child_style_path ) ? filemtime( $child_style_path ) : wp_get_theme()->get( 'Version' );

        wp_enqueue_style(
            'chld_thm_cfg_child',
            trailingslashit( get_stylesheet_directory_uri() ) . 'style.css',
            array( 'astra-theme-css' ),
            $child_style_version
        );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
