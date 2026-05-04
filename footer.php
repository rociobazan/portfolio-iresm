<?php
/**
 * Footer del tema - Plantilla de pie de página
 * 
 * Este archivo contiene la estructura HTML del pie de página
 * y carga los scripts necesarios a través de hooks de WordPress.
 * 
 * @package Portfolio Rocío Bazán
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
                        <h3 class="footer-title"><?php _e('Sobre Mí', 'portfolio-rocio'); ?></h3>
                        <p class="footer-description">
                            <?php _e('Analista de Sistemas en formación con experiencia en desarrollo .NET, programación C# y administración de bases de datos SQL Server.', 'portfolio-rocio'); ?>
                        </p>
                    </div>
                    
                    <!-- Enlaces rápidos -->
                    <div class="footer-section links">
                        <h3 class="footer-title"><?php _e('Enlaces', 'portfolio-rocio'); ?></h3>
                        <ul class="footer-menu">
                            <li><a href="#skills"><?php _e('Skills', 'portfolio-rocio'); ?></a></li>
                            <li><a href="#experience"><?php _e('Experiencia', 'portfolio-rocio'); ?></a></li>
                            <li><a href="#education"><?php _e('Educación', 'portfolio-rocio'); ?></a></li>
                            <li><a href="#courses"><?php _e('Cursos', 'portfolio-rocio'); ?></a></li>
                        </ul>
                    </div>
                    
                    <!-- Redes sociales / Contacto -->
                    <div class="footer-section social">
                        <h3 class="footer-title"><?php _e('Contacto', 'portfolio-rocio'); ?></h3>
                        <div class="social-links">
                            <a href="mailto:rocio.bazan@example.com" class="social-link email" aria-label="Email">
                                <span class="social-icon">✉️</span>
                            </a>
                            <a href="https://github.com" class="social-link github" aria-label="GitHub" target="_blank" rel="noopener noreferrer">
                                <span class="social-icon">🐙</span>
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
                        &copy; <?php echo date('Y'); ?> <?php _e('Rocío Bazán - Portfolio', 'portfolio-rocio'); ?>. 
                        <?php _e('Todos los derechos reservados.', 'portfolio-rocio'); ?>
                    </p>
                    <p class="developer-credit">
                        <?php printf(
                            __('Desarrollado con %s', 'portfolio-rocio'),
                            '<a href="https://wordpress.org/" target="_blank" rel="noopener">WordPress</a>'
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