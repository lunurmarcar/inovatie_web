<main id="site-main">

    <!-- =========================================
       HERO DE SERVICIOS
       ========================================= -->
    <section class="position-relative overflow-hidden bg-dark text-white">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="
        background-image: url('<?= base_url('assets/img/servicios/hero_servicios_01.webp'); ?>');
        background-size: cover;
        background-position: center;
        opacity: .35;
      "></div>

        <div class="container position-relative py-5 py-lg-6">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a class="text-decoration-none text-light" href="<?= base_url('pages/inicio.php'); ?>">
                                    Inicio
                                </a>
                            </li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Servicios
                            </li>
                        </ol>
                    </nav>

                    <h1 class="display-5 fw-semibold mb-3">
                        Servicios que acompañan todo el ciclo de tu proyecto
                    </h1>
                    <p class="lead mb-4">
                        Desde el diseño de mezcla hasta la puesta en marcha en obra, Inovatie ofrece
                        servicios técnicos y de laboratorio para asegurar el desempeño de tus soluciones.
                    </p>

                    <div class="d-flex flex-wrap gap-2">
                        <a href="#servicios-portafolio" class="btn btn-primary">
                            Ver portafolio de servicios
                        </a>
                        <a href="<?= base_url('pages/contacto.php'); ?>" class="btn btn-outline-light">
                            Solicitar propuesta
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 mt-4 mt-lg-0">
                    <div class="bg-light bg-opacity-10 border border-light border-opacity-25 rounded-3 p-3 p-lg-4">
                        <h2 class="h5 fw-semibold mb-2">
                            Acompañamiento técnico integral
                        </h2>
                        <p class="mb-2 small">
                            Un servicio no es solo un ensayo aislado. Es un acompañamiento que conecta
                            laboratorio, obra y desarrollo de producto para generar soluciones completas.
                        </p>
                        <ul class="small mb-0 ps-3">
                            <li>Diagnóstico de necesidades de proyecto.</li>
                            <li>Diseño de mezclas y validación experimental.</li>
                            <li>Soporte en obra y seguimiento de desempeño.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
       INTRODUCCIÓN GENERAL DE SERVICIOS
       ========================================= -->
    <section class="service-intro py-5 py-lg-6 position-relative overflow-hidden">
        <div class="service-intro-bg"></div>

        <div class="container position-relative">
            <div class="row align-items-start g-4">
                <div class="col-lg-6">
                    <div class="pe-lg-4">
                        <h2 class="h3 fw-semibold mb-3">
                            Un portafolio de servicios pensado para la obra civil
                        </h2>
                        <p class="mb-3">
                            Los servicios de Inovatie combinan capacidades de laboratorio, conocimiento de
                            materiales y experiencia en campo para respaldar decisiones críticas en el diseño
                            y ejecución de proyectos de concreto y soluciones especiales.
                        </p>
                        <p class="mb-0">
                            Desde la evaluación de materias primas hasta la capacitación de tu equipo, nuestro
                            objetivo es construir contigo soluciones sostenibles, seguras y eficientes.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="service-feature h-100">
                                <div class="service-feature-icon">01</div>
                                <div class="service-feature-body">
                                    <h3 class="h6 fw-semibold mb-1">Asesoría técnica en diseño de mezcla</h3>
                                    <p class="small mb-0">
                                        Ajuste de dosificaciones, compatibilidad de materiales y recomendaciones
                                        para lograr el desempeño requerido.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="service-feature h-100">
                                <div class="service-feature-icon">02</div>
                                <div class="service-feature-body">
                                    <h3 class="h6 fw-semibold mb-1">Servicios de laboratorio y pruebas</h3>
                                    <p class="small mb-0">
                                        Ensayos físicos y mecánicos sobre cementos, agregados, concretos y
                                        morteros, bajo metodologías normativas.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="service-feature h-100">
                                <div class="service-feature-icon">03</div>
                                <div class="service-feature-body">
                                    <h3 class="h6 fw-semibold mb-1">Soporte en obra y puesta en marcha</h3>
                                    <p class="small mb-0">
                                        Acompañamiento durante colados, arranques de producción y ajustes de
                                        operación en sitio.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="service-feature h-100">
                                <div class="service-feature-icon">04</div>
                                <div class="service-feature-body">
                                    <h3 class="h6 fw-semibold mb-1">Capacitación y transferencia de conocimiento</h3>
                                    <p class="small mb-0">
                                        Programas de formación para tu equipo técnico y operativo, presenciales o
                                        remotos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
       PORTAFOLIO DE SERVICIOS (GRID)
       ========================================= -->
    <section id="servicios-portafolio" class="py-5 py-lg-6">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-2 mb-4">
                <div>
                    <h2 class="h3 fw-semibold mb-1">Portafolio de servicios</h2>
                    <p class="mb-0 text-muted small">
                        Una vista general de los servicios que podemos combinar según las necesidades de tu proyecto.
                    </p>
                </div>
                <div class="text-end">
                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle">
                        Maqueta estática – contenidos ilustrativos
                    </span>
                </div>
            </div>

            <?php
            $servicios = [
                [
                    'slug'        => 'diseno-mezclas',
                    'nombre'      => 'Diseño y optimización de mezclas',
                    'descripcion' => 'Cálculo y ajuste de dosificaciones de concreto y mortero para alcanzar desempeño mecánico, durabilidad y trabajabilidad específicos.',
                ],
                [
                    'slug'        => 'evaluacion-materias-primas',
                    'nombre'      => 'Evaluación de materias primas',
                    'descripcion' => 'Caracterización de cementos, agregados y aditivos para identificar oportunidades de mejora en desempeño y costo.',
                ],
                [
                    'slug'        => 'pruebas-laboratorio',
                    'nombre'      => 'Pruebas de desempeño en laboratorio',
                    'descripcion' => 'Ensayos de resistencia, tiempos de fraguado, retracción, bombeabilidad y otros parámetros críticos.',
                ],
                [
                    'slug'        => 'soporte-obra',
                    'nombre'      => 'Soporte en obra y calidad de concreto',
                    'descripcion' => 'Acompañamiento en sitio para arranques, ajuste de mezclas, control de slump y seguimiento de colados.',
                ],
                [
                    'slug'        => 'desarrollo-medida',
                    'nombre'      => 'Desarrollo de productos a la medida',
                    'descripcion' => 'Diseño colaborativo de soluciones específicas para proyectos o clientes con requerimientos particulares.',
                ],
                [
                    'slug'        => 'diagnostico-patologias',
                    'nombre'      => 'Diagnóstico de patologías en concreto',
                    'descripcion' => 'Análisis de fallas y afectaciones en estructuras para identificar causas probables y alternativas de mitigación.',
                ],
            ];
            ?>

            <div class="row g-4">
                <?php foreach ($servicios as $index => $serv): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="service-card h-100">
                        <div class="service-card-header">
                            <span class="service-card-index">
                                <?= sprintf('%02d', $index + 1); ?>
                            </span>
                            <h3 class="h6 fw-semibold mb-0">
                                <?= htmlspecialchars($serv['nombre'], ENT_QUOTES, 'UTF-8'); ?>
                            </h3>
                        </div>
                        <div class="service-card-body">
                            <p class="small mb-0">
                                <?= htmlspecialchars($serv['descripcion'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- LABORATORIO Y PRUEBAS -->
    <section id="servicio-laboratorio" class="py-5 py-lg-6 bg-light">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h2 class="h4 fw-semibold mb-3">
                        Laboratorio y pruebas de desempeño
                    </h2>
                    <p class="mb-3">
                        El laboratorio de Inovatie permite evaluar el comportamiento de materiales y mezclas
                        bajo diferentes condiciones, utilizando metodologías normativas y ensayos
                        complementarios adaptados a cada proyecto.
                    </p>
                    <p class="mb-0">
                        Los resultados se transforman en recomendaciones concretas para ajustar diseños de
                        mezcla, seleccionar aditivos y reducir incertidumbre en campo.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="service-photo rounded-3 shadow-sm"
                        style="background-image: url('<?= base_url('assets/img/servicios/lab_servicios.webp'); ?>');">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOPORTE EN OBRA -->
    <section id="servicio-obra" class="py-5 py-lg-6">
        <div class="container">
            <div class="row g-4 align-items-center flex-lg-row-reverse">
                <div class="col-lg-6">
                    <h2 class="h4 fw-semibold mb-3">
                        Soporte en obra y puesta en marcha
                    </h2>
                    <p class="mb-3">
                        Algunos ajustes solo pueden definirse en obra: logística de suministro, tiempos de
                        descarga, equipo disponible y condiciones ambientales. Por ello, acompañamos los
                        arranques y las etapas críticas de tus proyectos.
                    </p>
                    <p class="mb-0">
                        El objetivo es que la solución definida en laboratorio se traduzca en un concreto
                        estable, colocable y con el desempeño esperado en cada colado.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="service-photo rounded-3 shadow-sm"
                        style="background-image: url('<?= base_url('assets/img/servicios/obra_servicios.webp'); ?>');">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CAPACITACIÓN -->
    <section id="servicio-capacitacion" class="py-5 py-lg-6 bg-light">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h2 class="h4 fw-semibold mb-3">
                        Capacitación y transferencia de conocimiento
                    </h2>
                    <p class="mb-3">
                        La tecnología solo genera valor si las personas que la utilizan la conocen y la
                        dominan. Por ello, diseñamos programas de capacitación a la medida de equipos de
                        producción, laboratorio y obra.
                    </p>
                    <p class="mb-0">
                        Podemos abordar desde fundamentos de materiales hasta temas avanzados de diseño de
                        mezcla, interpretación de resultados y buenas prácticas en campo.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="service-photo rounded-3 shadow-sm"
                        style="background-image: url('<?= base_url('assets/img/servicios/capacitacion_servicios.webp'); ?>');">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="py-5 py-lg-6 border-top">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="h4 fw-semibold mb-2">
                        ¿Quieres combinar varios servicios en una propuesta integral?
                    </h2>
                    <p class="mb-0 text-muted">
                        Compártenos las características de tu proyecto y diseñaremos contigo un esquema de
                        servicios que equilibre desempeño técnico, tiempos de respuesta y presupuesto.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?= base_url('pages/contacto.php'); ?>" class="btn btn-primary">
                        Solicitar propuesta de servicios
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>