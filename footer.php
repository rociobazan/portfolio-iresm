<?php
/**
 * Footer del tema - Plantilla de pie de página
 * 
 * Este archivo contiene la estructura HTML del pie de página
 * y carga los scripts necesarios a través de hooks de WordPress.
 * 
 * @package Portfolio Sistemas Rocio
 * @subpackage Components
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

        </main><!-- .site-main -->

        <!-- Estructura semántica HTML5: Footer principal -->
        <footer class="site-footer" role="contentinfo">
            <div class="container">
                <div class="footer-content">
                    <!-- Información de contacto -->
                    <div class="footer-section about">
                        <h3 class="footer-title"><?php _e('Sobre Mí', 'portfolio-sistemas'); ?></h3>
                        <p class="footer-description">
                            <?php _e('Analista de Sistemas con experiencia en desarrollo .NET, administración de bases de datos SQL Server y gestión de sistemas escolares.', 'portfolio-sistemas'); ?>
                        </p>
                    </div>
                    
                    <!-- Enlaces rápidos -->
                    <div class="footer-section links">
                        <h3 class="footer-title"><?php _e('Enlaces', 'portfolio-sistemas'); ?></h3>
                        <ul class="footer-menu">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer',
                                'menu_class'     => 'footer-menu-list',
                                'container'      => false,
                                'fallback_cb'    => false,
                                'echo'           => true,
                            ));
                            ?>
                        </ul>
                    </div>
                    
                    <!-- Redes sociales -->
                    <div class="footer-section social">
                        <h3 class="footer-title"><?php _e('Contacto', 'portfolio-sistemas'); ?></h3>
                        <div class="social-links">
                            <?php
                            // Hook para redes sociales personalizadas
                            do_action('portfolio_social_links');
                            ?>
                            <a href="mailto:contacto@ejemplo.com" class="social-link email" aria-label="Email">
                                <span class="social-icon">✉️</span>
                            </a>
                            <a href="https://linkedin.com" class="social-link linkedin" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                                <span class="social-icon">💼</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Copyright -->
                <div class="footer-bottom">
                    <p class="copyright">
                        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
                        <?php _e('Todos los derechos reservados.', 'portfolio-sistemas'); ?>
                    </p>
                    <p class="developer-credit">
                        <?php printf(
                            __('Desarrollado con %s por %s', 'portfolio-sistemas'),
                            '<a href="https://wordpress.org/" target="_blank" rel="noopener">WordPress</a>',
                            get_bloginfo('name')
                        ); ?>
                    </p>
                </div>
            </div>
        </footer>

    </div><!-- .site-wrapper -->

    <!-- Hook: wp_footer() - Carga scripts y estilos del núcleo de WordPress -->
    <?php wp_footer(); ?>

</body>
</html>