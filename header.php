<?php
/**
 * Header del tema - Plantilla principal de cabecera
 * 
 * Este archivo contiene la estructura HTML de la cabecera del tema
 * y carga los recursos necesarios a través de hooks de WordPress.
 * 
 * @package Portfolio Sistemas Rocio
 * @subpackage Components
 */

if (!defined('ABSPATH')) {
    exit; // Previene acceso directo al archivo
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    
    <!-- Carga de recursos mediante Hook: wp_head() -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Estructura semántica HTML5: Header principal -->
    <header class="site-header" role="banner">
        <div class="container">
            <div class="header-content">
                <!-- Logo/Nombre del sitio -->
                <div class="site-branding">
                    <h1 class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                    <p class="site-description"><?php bloginfo('description'); ?></p>
                </div>
                
                <!-- Navegación principal -->
                <nav class="main-navigation" role="navigation" aria-label="Navegación principal">
                    <?php
                    // Menú principal de WordPress
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'echo'           => true,
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </header>

    <!-- Contenedor principal del contenido -->
    <main class="site-main" role="main">