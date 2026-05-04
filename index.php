<?php
/**
 * Index del tema - Plantilla principal del portafolio
 * 
 * Este archivo contiene el Loop de WordPress y las secciones
 * principales de contenido: Hero, Perfil Técnico y Experiencia Laboral.
 * 
 * @package Portfolio Rocío Bazán
 * @subpackage Templates
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<?php get_header(); ?>

    <!-- Contenido principal del sitio -->
    <main class="site-main" role="main">

    <!-- SECCIÓN HERO - Presentación principal -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <span class="hero-badge">Estudiante avanzada de análisis de sistemas</span>
                <h1 class="hero-title"><?php _e('Rocío Bazán', 'portfolio-rocio'); ?></h1>
                <p class="hero-subtitle"><?php _e('Estudiante avanzada de Analista de Sistemas | Desarrollador C# Junior | .NET Core, MVC & Entity Framework', 'portfolio-rocio'); ?></p>
                <p class="hero-description">
                    <?php _e('Desarrolladora junior con sólida formación en tecnologías .NET, programación orientada a objetos y gestión de bases de datos SQL Server. Enfocada en el análisis detallado de requerimientos y el diseño lógico de soluciones funcionales adaptadas a las necesidades del negocio.', 'portfolio-rocio'); ?>
                </p>
                <div class="hero-cta">
                    <a href="#skills" class="btn btn-primary"><?php _e('Ver Skills', 'portfolio-rocio'); ?></a>
                    <a href="#experience" class="btn btn-secondary"><?php _e('Experiencia', 'portfolio-rocio'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 1: PERFIL TÉCNICO - Stack Tecnológico -->
    <section class="skills-section" id="skills">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Perfil Técnico', 'portfolio-rocio'); ?></h2>
                <p class="section-subtitle"><?php _e('Stack tecnológico y competencias especializadas', 'portfolio-rocio'); ?></p>
            </div>
            
            <div class="skills-grid">
                <!-- Lenguajes de Programación -->
                <div class="skill-card">
                    <div class="skill-header">
                        <div class="skill-icon">C#</div>
                        <h3 class="skill-title"><?php _e('C#', 'portfolio-rocio'); ?></h3>
                    </div>
                    <p class="skill-description"><?php _e('Desarrollo de aplicaciones robustas con .NET Framework y .NET Core. Implementación profunda de POO. Creación de aplicaciones de escritorio interactivas utilizando WinForms', 'portfolio-rocio'); ?></p>
                    <div class="skill-tags">
                        <span class="skill-tag">POO</span>
                        <span class="skill-tag">WinForms</span>
                        <span class="skill-tag">Lógica de programación</span>
                    </div>
                </div>
                
                <!-- Frameworks .NET -->
                <div class="skill-card">
                    <div class="skill-header">
                        <div class="skill-icon">.NET</div>
                        <h3 class="skill-title"><?php _e('.NET Core & Framework', 'portfolio-rocio'); ?></h3>
                    </div>
                    <p class="skill-description"><?php _e('Desarrollo web y de escritorio con ASP.NET Core, MVC, WebForms y aplicaciones Windows Forms. Implementación de arquitecturas en capas para una integración eficiente con bases de datos.', 'portfolio-rocio'); ?></p>
                    <div class="skill-tags">
                        <span class="skill-tag">ASP.NET Core</span>
                        <span class="skill-tag">MVC</span>
                        <span class="skill-tag">WebForms</span>
                        <span class="skill-tag">Windows Forms</span>
                        <span class="skill-tag">Web API</span>
                        <span class="skill-tag">Arquitectura en capas</span>
                    </div>
                </div>
                
                <!-- Entity Framework -->
                <div class="skill-card">
                    <div class="skill-header">
                        <div class="skill-icon">EF</div>
                        <h3 class="skill-title"><?php _e('Entity Framework', 'portfolio-rocio'); ?></h3>
                    </div>
                    <p class="skill-description"><?php _e('Utilización de ORM para la persistencia y acceso a datos. Creación y modelado de clases, configuración de contexto y control de versiones de la base de datos a través de migraciones. Implementación de Fluent API y carga inicial de datos (Seeding)', 'portfolio-rocio'); ?></p>
                    <div class="skill-tags">
                        <span class="skill-tag">Modelado de clases</span>
                        <span class="skill-tag">Migrations</span>
                        <span class="skill-tag">Fluent API</span>
                    </div>
                </div>
                
                <!-- SQL Server -->
                <div class="skill-card">
                    <div class="skill-header">
                        <div class="skill-icon">SQL</div>
                        <h3 class="skill-title"><?php _e('SQL Server', 'portfolio-rocio'); ?></h3>
                    </div>
                    <p class="skill-description"><?php _e('Diseño y administración de bases de datos. Consultas T-SQL, procedimientos almacenados, triggers y optimización.', 'portfolio-rocio'); ?></p>
                    <div class="skill-tags">
                        <span class="skill-tag">T-SQL</span>
                        <span class="skill-tag">Stored Procedures</span>
                        <span class="skill-tag">Triggers</span>
                    </div>
                </div>
                
                <!-- Frontend -->
                <div class="skill-card">
                    <div class="skill-header">
                        <div class="skill-icon">FE</div>
                        <h3 class="skill-title"><?php _e('Frontend', 'portfolio-rocio'); ?></h3>
                    </div>
                    <p class="skill-description"><?php _e('Desarrollo de interfaces dinámicas con motor de vistas Razor, integrando HTML5, CSS3, JavaScript y Bootstrap. Diseño responsive enfocado en la funcionalidad y la experiencia de usuario', 'portfolio-rocio'); ?></p>
                    <div class="skill-tags">
                        <span class="skill-tag">HTML5</span>
                        <span class="skill-tag">CSS3</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">Bootstrap</span>
                        <span class="skill-tag">Razor</span>
                    </div>
                </div>
                
                <!-- Herramientas -->
                <div class="skill-card">
                    <div class="skill-header">
                        <div class="skill-icon">GH</div>
                        <h3 class="skill-title"><?php _e('Herramientas', 'portfolio-rocio'); ?></h3>
                    </div>
                    <p class="skill-description"><?php _e('Control de versiones con Git y GitHub. Análisis de requerimientos y reglas de negocio. Metodologías ágiles.', 'portfolio-rocio'); ?></p>
                    <div class="skill-tags">
                        <span class="skill-tag">Git</span>
                        <span class="skill-tag">GitHub</span>
                        <span class="skill-tag">UML</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 2: EXPERIENCIA LABORAL -->
    <section class="experience-section" id="experience">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Experiencia Laboral', 'portfolio-rocio'); ?></h2>
            </div>
            
            <div class="experience-timeline">
                <div class="experience-item">
                    <div class="experience-date"><?php _e('Febrero 2025 - Actualidad', 'portfolio-rocio'); ?></div>
                    <div class="experience-content">
                        <h3 class="experience-title"><?php _e('Administradora', 'portfolio-rocio'); ?></h3>
                        <p class="experience-company"><?php _e('Instituto Industrial Cristo Obrero', 'portfolio-rocio'); ?></p>
                        <ul class="experience-tasks">
                            <li><?php _e('Gestionar el cobro de cuotas y la carga de pagos en el sistema', 'portfolio-rocio'); ?></li>
                            <li><?php _e('Administrar compras y presupuestos de materiales técnicos para las distintas áreas de la institución', 'portfolio-rocio'); ?></li>
                            <li><?php _e('Actuar como nexo con el proveedor del software de gestión para reportar fallas o pedir cambios que mejoren nuestro trabajo', 'portfolio-rocio'); ?></li>
                            <li><?php _e('Controlar y rendir los fondos fijos destinados a los gastos diarios de las áreas de mantenimiento y taller', 'portfolio-rocio'); ?></li>
                            <li><?php _e('Asistir en la atención de familias, participando en la negociación de acuerdos de pago y en la gestión de becas', 'portfolio-rocio'); ?></li>
                            <li><?php _e('Colaborar en la gestión de registros administrativos y financieros, garantizando el cumplimiento de las normativas vigentes ante entidades externas', 'portfolio-rocio'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: EDUCACIÓN -->
    <section class="education-section" id="education">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Educación', 'portfolio-rocio'); ?></h2>
                <p class="section-subtitle"><?php _e('Formación académica y certificaciónes', 'portfolio-rocio'); ?></p>
            </div>
            
            <div class="education-grid">
                <div class="education-card">
                    <h3 class="education-title"><?php _e('Analista de Sistemas', 'portfolio-rocio'); ?></h3>
                    <p class="education-institution"><?php _e('Instituto Remedios Escalada de San Martín', 'portfolio-rocio'); ?></p>
                    <p class="education-period"><?php _e('2024 - Actualidad', 'portfolio-rocio'); ?></p>
                    <p class="education-details"><?php _e('Materias aprobadas: 29/38', 'portfolio-rocio'); ?></p>
                </div>
                
                <div class="education-card">
                    <h3 class="education-title"><?php _e('Técnico Superior en Administración de Empresas', 'portfolio-rocio'); ?></h3>
                    <p class="education-institution"><?php _e('Instituto Remedios Escalada de San Martín', 'portfolio-rocio'); ?></p>
                    <p class="education-period"><?php _e('2017 - 2019', 'portfolio-rocio'); ?></p>
                    <p class="education-details"><?php _e('Graduada', 'portfolio-rocio'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: CURSOS -->
    <section class="courses-section" id="courses">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Cursos y Capacitaciones', 'portfolio-rocio'); ?></h2>
                <p class="section-subtitle"><?php _e('Formación técnica complementaria', 'portfolio-rocio'); ?></p>
            </div>
            
            <div class="courses-grid">
                <div class="course-card">
                    <h4 class="course-name"><?php _e('Programación C# Nivel 4: MVC + EF', 'portfolio-rocio'); ?></h4>
                    <p class="course-provider"><?php _e('Maxiprograma.com', 'portfolio-rocio'); ?></p>
                    <p class="course-period"><?php _e('Febrero 2026 - Mayo 2026', 'portfolio-rocio'); ?></p>
                </div>
                
                <div class="course-card">
                    <h4 class="course-name"><?php _e('Curso de Bases de Datos', 'portfolio-rocio'); ?></h4>
                    <p class="course-provider"><?php _e('Maxiprograma.com', 'portfolio-rocio'); ?></p>
                    <p class="course-period"><?php _e('Julio 2024 - Agosto 2024', 'portfolio-rocio'); ?></p>
                </div>
                
                <div class="course-card">
                    <h4 class="course-name"><?php _e('Programación C# Nivel 3: Web ASP.NET', 'portfolio-rocio'); ?></h4>
                    <p class="course-provider"><?php _e('Maxiprograma.com', 'portfolio-rocio'); ?></p>
                    <p class="course-period"><?php _e('Noviembre 2023 - Febrero 2024', 'portfolio-rocio'); ?></p>
                </div>
                
                <div class="course-card">
                    <h4 class="course-name"><?php _e('Programación C# Nivel 2: POO + .Net + SQL', 'portfolio-rocio'); ?></h4>
                    <p class="course-provider"><?php _e('Maxiprograma.com', 'portfolio-rocio'); ?></p>
                    <p class="course-period"><?php _e('Agosto 2023 - Octubre 2023', 'portfolio-rocio'); ?></p>
                </div>
                
                <div class="course-card">
                    <h4 class="course-name"><?php _e('Programación C# Nivel 1', 'portfolio-rocio'); ?></h4>
                    <p class="course-provider"><?php _e('Maxiprograma.com', 'portfolio-rocio'); ?></p>
                    <p class="course-period"><?php _e('Agosto 2023', 'portfolio-rocio'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Loop de WordPress: Contenido dinámico del blog -->
    <!-- <section class="content-section" id="blog">
        <div class="container">
            <?php
            /**
             * El Loop de WordPress: paradigma funcional y orientado a eventos
             * 
             * Este loop implementa el patrón de iteración estándar de WordPress:
             * - have_posts(): función que verifica si hay posts disponibles
             * - the_post(): carga el post actual en las variables globales
             * - the_title(), the_content(): funciones de template para mostrar datos
             * 
             * Hooks relacionados:
             * - pre_get_posts: modifica la query antes de ejecutarse
             * - the_post: acción que se ejecuta por cada post
             * - wp_enqueue_scripts: para cargar scripts en el frontend
             */
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
                                <span class="post-author"><?php _e('por', 'portfolio-rocio'); ?> <?php the_author(); ?></span>
                            </div>
                        </header>
                        
                        <div class="post-content">
                            <?php
                            // Función estándar: the_content() - muestra el contenido del post
                            the_content(__('Continuar leyendo', 'portfolio-rocio'));
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
                    'prev_text' => __('&laquo; Anterior', 'portfolio-rocio'),
                    'next_text' => __('Siguiente &raquo;', 'portfolio-rocio'),
                ));
                
            else :
            ?>
                <div class="no-content">
                    <p><?php _e('No se encontró contenido.', 'portfolio-rocio'); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </section> -->

</main><!-- .site-main -->

<?php get_footer(); ?>