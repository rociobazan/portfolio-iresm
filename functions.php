<?php
/**
 * Funciones del tema - Functions.php
 * 
 * Este archivo contiene las funciones principales del tema,
 * registro de menús, soporte para características de WordPress,
 * y hooks personalizados.
 * 
 * @package Portfolio Sistemas Rocio
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
function portfolio_sistemas_setup() {
    // Carga el archivo de traducción del tema
    load_theme_textdomain('portfolio-sistemas', get_template_directory() . '/languages');

    // Añade soporte para título dinámico del sitio
    add_theme_support('title-tag');

    // Añade soporte para imagenes destacadas en posts
    add_theme_support('post-thumbnails');

    // Añade soporte para formato de posts
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));

    // Registra el menú principal
    register_nav_menus(array(
        'primary'   => __('Menú Principal', 'portfolio-sistemas'),
        'footer'   => __('Menú Footer', 'portfolio-sistemas'),
    ));

    // Añade soporte para Custom Logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Añade soporte para Custom Background
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));

    // Añade soporte para Custom Header
    add_theme_support('custom-header', array(
        'default-image'          => '',
        'default-text-color'     => '2C3E50',
        'width'                  => 1200,
        'height'                 => 400,
        'flex-height'            => true,
        'flex-width'             => true,
        'uploads'                => true,
        'wp-head-callback'       => 'portfolio_sistemas_header_style',
    ));
}
add_action('after_setup_theme', 'portfolio_sistemas_setup');

/**
 * Registra los tamaños de imagen personalizados
 */
function portfolio_sistemas_image_sizes() {
    add_image_size('portfolio-thumbnail', 300, 200, true);
    add_image_size('portfolio-medium', 600, 400, true);
    add_image_size('portfolio-large', 1200, 800, true);
}
add_action('after_setup_theme', 'portfolio_sistemas_image_sizes');

/**
 * Define los límites del contenido y excerpt
 */
function portfolio_sistemas_excerpt_length($length) {
    return 30; // 30 palabras por defecto
}
add_filter('excerpt_length', 'portfolio_sistemas_excerpt_length', 999);

/**
 * Modifica el texto del excerpt "Read more"
 */
function portfolio_sistemas_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'portfolio_sistemas_excerpt_more');

/**
 * Encola los estilos y scripts del tema
 * Hook: wp_enqueue_scripts
 */
function portfolio_sistemas_scripts() {
    // Estilo principal del tema
    wp_enqueue_style(
        'portfolio-sistemas-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // Estilos adicionales (si son necesarios)
    wp_enqueue_style(
        'portfolio-sistemas-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        array(),
        '1.0.0'
    );

    // Script principal del tema
    wp_enqueue_script(
        'portfolio-sistemas-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        array(),
        '1.0.0',
        true
    );

    // Script para comentarios
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'portfolio_sistemas_scripts');

/**
 * Estilos del Custom Header
 */
function portfolio_sistemas_header_style() {
    $header_text_color = get_header_textcolor();

    if (display_header_text()) {
        ?>
        <style type="text/css">
        .site-title a,
        .site-description {
            color: #<?php echo esc_attr($header_text_color); ?>;
        }
        </style>
        <?php
    }
}

/**
 * Registra la zona de widgets (Sidebar)
 */
function portfolio_sistemas_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'portfolio-sistemas'),
        'id'            => 'sidebar-1',
        'description'   => __('Añade widgets aquí para que aparezcan en la barra lateral.', 'portfolio-sistemas'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget', 'portfolio-sistemas'),
        'id'            => 'footer-1',
        'description'   => __('Añade widgets aquí para el pie de página.', 'portfolio-sistemas'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'portfolio_sistemas_widgets_init');

/**
 * Hook personalizado: Social Links
 * Permite añadir enlaces a redes sociales
 */
function portfolio_social_links_default() {
    // Este hook puede ser utilizado por plugins o child themes
    // para añadir enlaces de redes sociales
}
add_action('portfolio_social_links', 'portfolio_social_links_default');

/**
 * Filtro para modificar el excerpt
 */
function portfolio_sistemas_custom_excerpt($excerpt) {
    return str_replace('[...]', '...', $excerpt);
}
add_filter('get_the_excerpt', 'portfolio_sistemas_custom_excerpt');

/**
 * Añade clase body para mejor targeting
 */
function portfolio_sistemas_body_classes($classes) {
    // Añade clase si hay sidebar
    if (is_active_sidebar('sidebar-1') && !is_page()) {
        $classes[] = 'has-sidebar';
    }

    // Añade clase para el tipo de layout
    $classes[] = 'portfolio-layout';

    return $classes;
}
add_filter('body_class', 'portfolio_sistemas_body_classes');

/**
 * Configuración del tema - Opciones de personalización
 */
function portfolio_sistemas_customize_register($wp_customize) {
    // Sección: Colores del tema
    $wp_customize->add_section('portfolio_sistemas_colors', array(
        'title'    => __('Colores del Tema', 'portfolio-sistemas'),
        'priority' => 30,
    ));

    // Configuración: Color principal
    $wp_customize->add_setting('portfolio_sistemas_primary_color', array(
        'default'   => '#2C3E50',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'portfolio_sistemas_primary_color',
        array(
            'label'    => __('Color Principal', 'portfolio-sistemas'),
            'section'  => 'portfolio_sistemas_colors',
            'settings' => 'portfolio_sistemas_primary_color',
        )
    ));
}
add_action('customize_register', 'portfolio_sistemas_customize_register');

/**
 * Función helper: Obtiene la ruta del template
 */
function portfolio_sistemas_get_template_part($slug, $name = null) {
    do_action("get_template_part_{$slug}", $slug, $name);
    $templates = $name ? "{$slug}-{$name}.php" : "{$slug}.php";
    locate_template($templates, true, false);
}

/**
 * Función helper: Obtiene la URL del tema
 */
function portfolio_sistemas_get_theme_url() {
    return get_template_directory_uri();
}

/**
 * Función helper: Obtiene la ruta del tema
 */
function portfolio_sistemas_get_theme_path() {
    return get_template_directory();
}