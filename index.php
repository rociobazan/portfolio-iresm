<?php
/**
 * Index del tema - Plantilla principal
 * 
 * Este archivo contiene el Loop de WordPress y las dos secciones
 * principales de contenido: Skills Técnicos y Experiencia Profesional.
 * 
 * @package Portfolio Sistemas Rocio
 * @subpackage Templates
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<?php get_header(); ?>

    <!-- Sección: Skills Técnicos -->
    <section class="skills-section" id="skills">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Skills Técnicos', 'portfolio-sistemas'); ?></h2>
                <p class="section-subtitle"><?php _e('Technologies and tools I work with', 'portfolio-sistemas'); ?></p>
            </div>
            
            <div class="skills-grid">
                <!-- Skill: C# -->
                <div class="skill-card">
                    <div class="skill-icon">
                        <span class="skill-icon-csharp">C#</span>
                    </div>
                    <h3 class="skill-title">C#</h3>
                    <p class="skill-description"><?php _e('Desarrollo de aplicaciones robustas con .NET Framework y .NET Core', 'portfolio-sistemas'); ?></p>
                    <div class="skill-level">
                        <div class="skill-progress" style="width: 90%;"></div>
                    </div>
                </div>
                
                <!-- Skill: .NET -->
                <div class="skill-card">
                    <div class="skill-icon">
                        <span class="skill-icon-dotnet">.NET</span>
                    </div>
                    <h3 class="skill-title">.NET</h3>
                    <p class="skill-description"><?php _e('Desarrollo web y de escritorio con ASP.NET, WPF y Windows Forms', 'portfolio-sistemas'); ?></p>
                    <div class="skill-level">
                        <div class="skill-progress" style="width: 85%;"></div>
                    </div>
                </div>
                
                <!-- Skill: SQL Server -->
                <div class="skill-card">
                    <div class="skill-icon">
                        <span class="skill-icon-sql">SQL</span>
                    </div>
                    <h3 class="skill-title">SQL Server</h3>
                    <p class="skill-description"><?php _e('Diseño de bases de datos, consultas T-SQL y administración de servidores', 'portfolio-sistemas'); ?></p>
                    <div class="skill-level">
                        <div class="skill-progress" style="width: 88%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Loop de WordPress: Sección de contenido dinámico -->
    <section class="content-section" id="blog">
        <div class="container">
            <?php
            // El Loop de WordPress: paradigma funcional y orientado a eventos
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
                        <header class="post-header">
                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>" rel="bookmark">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="post-meta">
                                <span class="post-date"><?php echo get_the_date(); ?></span>
                                <span class="post-author"><?php _e('by', 'portfolio-sistemas'); ?> <?php the_author(); ?></span>
                            </div>
                        </header>
                        
                        <div class="post-content">
                            <?php
                            // Función estándar: the_content() - muestra el contenido del post
                            the_content(__('Continue reading', 'portfolio-sistemas'));
                            ?>
                        </div>
                        
                        <footer class="post-footer">
                            <?php
                            // Tags y categorías
                            $tags = get_the_tags();
                            if ($tags) {
                                echo '<div class="post-tags">';
                                foreach ($tags as $tag) {
                                    echo '<a href="' . get_tag_link($tag->term_id) . '" class="tag-link">' . $tag->name . '</a>';
                                }
                                echo '</div>';
                            }
                            ?>
                        </footer>
                    </article>
            <?php
                endwhile;
                
                // Paginación del Loop
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('&laquo; Anterior', 'portfolio-sistemas'),
                    'next_text' => __('Siguiente &raquo;', 'portfolio-sistemas'),
                ));
                
            else :
            ?>
                <div class="no-content">
                    <p><?php _e('No se encontró contenido.', 'portfolio-sistemas'); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Sección: Experiencia Profesional -->
    <section class="experience-section" id="experience">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Experiencia Profesional', 'portfolio-sistemas'); ?></h2>
                <p class="section-subtitle"><?php _e('My professional background in system administration', 'portfolio-sistemas'); ?></p>
            </div>
            
            <div class="experience-timeline">
                <!-- Experiencia: Administración Escolar -->
                <div class="experience-item">
                    <div class="experience-icon">
                        <span class="icon-school">🎓</span>
                    </div>
                    <div class="experience-content">
                        <h3 class="experience-role"><?php _e('Administración Escolar', 'portfolio-sistemas'); ?></h3>
                        <p class="experience-company"><?php _e('Institución Educativa', 'portfolio-sistemas'); ?></p>
                        <p class="experience-description">
                            <?php _e('Gestión integral de procesos administrativos escolares, incluyendo:', 'portfolio-sistemas'); ?>
                        </p>
                        <ul class="experience-tasks">
                            <li><?php _e('Control de inscripciones y matriculación de estudiantes', 'portfolio-sistemas'); ?></li>
                            <li><?php _e('Gestión de calificaciones y reportes académicos', 'portfolio-sistemas'); ?></li>
                            <li><?php _e('Administración de personal docente y administrativo', 'portfolio-sistemas'); ?></li>
                            <li><?php _e('Coordinación de horarios y asignación de aulas', 'portfolio-sistemas'); ?></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Experiencia: Gestión de Sistemas -->
                <div class="experience-item">
                    <div class="experience-icon">
                        <span class="icon-systems">💻</span>
                    </div>
                    <div class="experience-content">
                        <h3 class="experience-role"><?php _e('Gestión de Sistemas', 'portfolio-sistemas'); ?></h3>
                        <p class="experience-company"><?php _e('Departamento de Tecnología', 'portfolio-sistemas'); ?></p>
                        <p class="experience-description">
                            <?php _e('Administración y mantenimiento de infraestructura tecnológica:', 'portfolio-sistemas'); ?>
                        </p>
                        <ul class="experience-tasks">
                            <li><?php _e('Mantenimiento de bases de datos SQL Server', 'portfolio-sistemas'); ?></li>
                            <li><?php _e('Desarrollo de aplicaciones internas en C#/.NET', 'portfolio-sistemas'); ?></li>
                            <li><?php _e('Gestión de redes y soporte técnico', 'portfolio-sistemas'); ?></li>
                            <li><?php _e('Implementación de políticas de seguridad informática', 'portfolio-sistemas'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();