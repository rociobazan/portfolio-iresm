<?php
/**
 * Funciones del tema - Functions.php
 * * Este archivo contiene las funciones principales del tema,
 * registro de menús, soporte para características de WordPress,
 * y hooks personalizados.
 * * @package Portfolio Rocío Bazán
 * @subpackage Core
 */

// Previene acceso directo al archivo
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuración inicial del tema
 * Hook: after_setup_theme
 */
function portfolio_rocio_setup() {
    // Carga el archivo de traducción del tema
    load_theme_textdomain('portfolio-rocio', get_template_directory() . '/languages');

    // Añade soporte para título dinámico del sitio
    add_theme_support('title-tag');

    // Añade soporte para imagenes destacadas en posts
    add_theme_support('post-thumbnails');

    // Registra el menú principal
    register_nav_menus(array(
        'primary'   => __('Menú Principal', 'portfolio-rocio'),
        'footer'    => __('Menú Footer', 'portfolio-rocio'),
    ));

    // Añade soporte para Custom Logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'portfolio_rocio_setup');

/**
 * Encola los estilos del tema
 */
function portfolio_rocio_enqueue_scripts() {
    // Carga la hoja de estilos principal (style.css)
    wp_enqueue_style(
        'portfolio-rocio-style',
        get_stylesheet_uri(),
        array(),
        '5.0.3'
    );
    
    // Carga Google Fonts (Inter)
    wp_enqueue_style(
        'portfolio-rocio-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'portfolio_rocio_enqueue_scripts');

/**
 * Registra el área de widgets del sidebar
 */
function portfolio_rocio_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'portfolio-rocio'),
        'id'            => 'sidebar-1',
        'description'   => __('Añade widgets aquí para que aparezcan en la barra lateral.', 'portfolio-rocio'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'portfolio_rocio_widgets_init');