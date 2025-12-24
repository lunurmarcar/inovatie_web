<main id="site-main">

    <!-- =========================================
       HERO DE SEGMENTOS
       ========================================= -->
    <section class="position-relative overflow-hidden bg-dark text-white">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="
        background-image: url('<?= base_url('assets/img/hero/hero_segmentos_01.webp'); ?>');
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
                                Segmentos
                            </li>
                        </ol>
                    </nav>

                    <h1 class="display-5 fw-semibold mb-3">
                        Segmentos que impulsan la innovación en obra civil
                    </h1>
                    <p class="lead mb-4">
                        Soluciones químicas y tecnológicas diseñadas para las exigencias de infraestructura,
                        minería, prefabricados, pavimentos y construcción especializada.
                    </p>

                    <div class="d-flex flex-wrap gap-2">
                        <a href="#segmentos-lista" class="btn btn-primary">
                            Ver todos los segmentos
                        </a>
                        <a href="<?= base_url('pages/contacto.php'); ?>" class="btn btn-outline-light">
                            Solicitar asesoría para mi proyecto
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 mt-4 mt-lg-0">
                    <div class="bg-light bg-opacity-10 border border-light border-opacity-25 rounded-3 p-3 p-lg-4">
                        <h2 class="h5 fw-semibold mb-2">
                            ¿Por qué segmentar tus soluciones?
                        </h2>
                        <p class="mb-2 small">
                            Cada tipo de proyecto enfrenta condiciones de operación, tiempos y riesgos
                            diferentes. Un diseño adecuado de aditivos y servicios permite mejorar
                            productividad, durabilidad y seguridad.
                        </p>
                        <ul class="small mb-0 ps-3">
                            <li>Selección de aditivos según ambiente y tipo de esfuerzo.</li>
                            <li>Optimización de costos de producción y colocación.</li>
                            <li>Soporte técnico y pruebas orientadas al segmento.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
       INTRODUCCIÓN GENERAL (MEJORADA)
       ========================================= -->
    <section class="segment-intro py-5 py-lg-6 position-relative overflow-hidden">
        <div class="segment-intro-bg"></div>

        <div class="container position-relative">
            <div class="row align-items-start g-4">
                <div class="col-lg-6">
                    <div class="pe-lg-4">
                        <h2 class="h3 fw-semibold mb-3">
                            Soluciones especializadas para cada tipo de proyecto
                        </h2>
                        <p class="mb-3">
                            La experiencia de Inovatie integra materias primas, diseño de aditivos y
                            acompañamiento técnico para responder a las exigencias de distintos segmentos:
                            desde infraestructura urbana hasta minería subterránea y prefabricados de alta
                            precisión.
                        </p>
                        <p class="mb-0">
                            Esta página presenta una vista general de los principales segmentos a los que
                            atendemos. En futuras versiones, cada segmento contará con una landing dedicada, con
                            productos, casos de éxito y documentación descargable.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="segment-feature h-100">
                                <div class="segment-feature-icon">01</div>
                                <div class="segment-feature-body">
                                    <h3 class="h6 fw-semibold mb-1">Infraestructura y obra civil</h3>
                                    <p class="small mb-0">
                                        Puentes, carreteras, obras hidráulicas y estructuras especiales donde la
                                        durabilidad y el control de fisuras son clave.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="segment-feature h-100">
                                <div class="segment-feature-icon">02</div>
                                <div class="segment-feature-body">
                                    <h3 class="h6 fw-semibold mb-1">Minería y túneles</h3>
                                    <p class="small mb-0">
                                        Control de tiempos de fraguado, bombeabilidad y resistencia temprana en
                                        condiciones severas de operación.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="segment-feature h-100">
                                <div class="segment-feature-icon">03</div>
                                <div class="segment-feature-body">
                                    <h3 class="h6 fw-semibold mb-1">Prefabricados y elementos especiales</h3>
                                    <p class="small mb-0">
                                        Líneas de producción repetitivas que requieren consistencia, estética y ciclos
                                        de desmoldeo optimizados.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="segment-feature h-100">
                                <div class="segment-feature-icon">04</div>
                                <div class="segment-feature-body">
                                    <h3 class="h6 fw-semibold mb-1">Pavimentos y pisos industriales</h3>
                                    <p class="small mb-0">
                                        Soluciones para tránsito pesado, control de desgaste superficial y estabilidad
                                        dimensional a largo plazo.
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
       GRID DE SEGMENTOS CON IMAGEN DE FONDO
       ========================================= -->
    <section id="segmentos-lista" class="py-5 py-lg-6">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-2 mb-4">
                <div>
                    <h2 class="h3 fw-semibold mb-1">Segmentos atendidos por Inovatie</h2>
                    <p class="mb-0 text-muted small">
                        Selecciona un segmento para conocer sus retos y las líneas de solución recomendadas.
                    </p>
                </div>
                <div class="text-end">
                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle">
                        Maqueta estática – sin conexión a BD
                    </span>
                </div>
            </div>

            <?php
            // Maqueta estática: lista de segmentos ejemplo.
            $segmentos = [
                [
                    'slug'        => 'infraestructura-obra-civil',
                    'nombre'      => 'Infraestructura y obra civil',
                    'descripcion' => 'Puentes, carreteras, presas, plantas industriales y otras estructuras donde la durabilidad y la seguridad estructural son críticas.',
                    'anchor'      => '#detalle-infraestructura',
                    'bg'          => 'bg_infraestructura.webp',
                ],
                [
                    'slug'        => 'mineria-tuneles',
                    'nombre'      => 'Minería y túneles',
                    'descripcion' => 'Operaciones subterráneas y a cielo abierto que requieren mezclas bombeables, resistencia temprana y desempeño bajo condiciones extremas.',
                    'anchor'      => '#detalle-mineria',
                    'bg'          => 'bg_mineria.webp',
                ],
                [
                    'slug'        => 'prefabricados',
                    'nombre'      => 'Prefabricados y elementos especiales',
                    'descripcion' => 'Procesos de producción donde la repetibilidad, estética y ciclos de desmoldeo optimizados son claves para la calidad.',
                    'anchor'      => '#detalle-prefabricados',
                    'bg'          => 'bg_prefabricados.webp',
                ],
                [
                    'slug'        => 'pavimentos-pisos',
                    'nombre'      => 'Pavimentos y pisos industriales',
                    'descripcion' => 'Soluciones para superficies sometidas a cargas pesadas, desgaste superficial y requerimientos de estabilidad dimensional.',
                    'anchor'      => '#detalle-pavimentos',
                    'bg'          => 'bg_pavimentos.webp',
                ],
                [
                    'slug'        => 'concreteras-cementeras',
                    'nombre'      => 'Concreteras y cementeras',
                    'descripcion' => 'Productores de concreto y cemento que requieren aditivos confiables, seguimiento técnico y consistencia en el rendimiento.',
                    'anchor'      => '#detalle-concreteras',
                    'bg'          => 'bg_concreteras.webp',
                ],
                [
                    'slug'        => 'terracerias-estabilizacion',
                    'nombre'      => 'Terracerías y estabilización de suelos',
                    'descripcion' => 'Soluciones para mejorar capacidad de carga, reducir humedad y controlar deformaciones en plataformas y caminos.',
                    'anchor'      => '#detalle-terracerias',
                    'bg'          => 'bg_terracerias.webp',
                ],
            ];
            ?>

            <div class="row g-4">
                <?php foreach ($segmentos as $seg): ?>
                <?php $bgUrl = base_url('assets/img/segmentos/' . $seg['bg']); ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="segment-card h-100 text-white">
                        <div class="segment-card-bg"
                            style="background-image: url('<?= htmlspecialchars($bgUrl, ENT_QUOTES, 'UTF-8'); ?>');">
                        </div>
                        <div class="segment-card-overlay d-flex flex-column justify-content-between p-3 p-lg-4">
                            <div>
                                <h3 class="h5 fw-semibold mb-2">
                                    <?= htmlspecialchars($seg['nombre'], ENT_QUOTES, 'UTF-8'); ?>
                                </h3>
                                <p class="small mb-0">
                                    <?= htmlspecialchars($seg['descripcion'], ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                            </div>
                            <div class="mt-3 pt-2">
                                <a href="<?= $seg['anchor']; ?>" class="btn btn-sm btn-outline-light stretched-link">
                                    Ver retos y soluciones
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- =========================================
       DETALLE DE SEGMENTOS (MAQUETA)
       ========================================= -->

    <!-- DETALLE: INFRAESTRUCTURA Y OBRA CIVIL -->
    <section id="detalle-infraestructura" class="py-5 py-lg-6 bg-light">
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-lg-7">
                    <h2 class="h3 fw-semibold mb-3">
                        Segmento: Infraestructura y obra civil
                    </h2>
                    <p class="mb-3">
                        Las obras de infraestructura exigen concretos de alta durabilidad, control de
                        fisuración, resistencia a ciclos térmicos y desempeño estable ante ambientes agresivos.
                        Inovatie desarrolla soluciones integrales para optimizar diseños de mezcla, compatibilidad
                        de materiales y colocación en diversos escenarios constructivos.
                    </p>
                    <p class="mb-4">
                        Colaboramos con diseñadores, constructores y productores de concreto para ajustar
                        los diseños de mezcla y la selección de aditivos, considerando normativas locales,
                        tiempos de suministro y condiciones de colocación en sitio.
                    </p>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="border rounded-3 p-3 bg-white h-100">
                                <h3 class="h6 fw-semibold mb-2">Retos frecuentes</h3>
                                <ul class="small mb-0 ps-3">
                                    <li>Control de fisuración por retracción y cambios de temperatura.</li>
                                    <li>Compatibilidad entre cementos, aditivos y agregados locales.</li>
                                    <li>Bombeo a largas distancias y alturas considerables.</li>
                                    <li>Exposición a sulfatos, cloruros y ciclos de humedad.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded-3 p-3 bg-white h-100">
                                <h3 class="h6 fw-semibold mb-2">Líneas de solución Inovatie</h3>
                                <ul class="small mb-0 ps-3">
                                    <li>Reductores de agua de alto rango.</li>
                                    <li>Aditivos para control de retracción y compensación volumétrica.</li>
                                    <li>Modificadores de viscosidad para mezclas bombeables.</li>
                                    <li>Diseño de mezcla y pruebas de laboratorio.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="border rounded-3 p-3 p-lg-4 bg-white shadow-sm h-100">
                        <h3 class="h6 fw-semibold mb-3">Ejemplos de aplicaciones</h3>
                        <ul class="small mb-4 ps-3">
                            <li>Cimentaciones profundas y pilas de puente.</li>
                            <li>Losas de puentes, trabes y diafragmas.</li>
                            <li>Estructuras de contención y muros de carga.</li>
                            <li>Plantas industriales y naves de gran claro.</li>
                        </ul>
                        <h4 class="h6 fw-semibold mb-2">Productos representativos*</h4>
                        <p class="small mb-3">
                            Lista referencial para la maqueta. En la versión final se vinculará con el
                            catálogo real de productos por segmento.
                        </p>
                        <ul class="small mb-0 ps-3">
                            <li>Reducidores de agua de alto rango para infraestructura.</li>
                            <li>Aditivos para control de retracción compensada.</li>
                            <li>Modificadores de viscosidad para bombeo prolongado.</li>
                            <li>Soluciones integrales para concreto de alta durabilidad.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DETALLE: MINERÍA Y TÚNELES -->
    <section id="detalle-mineria" class="py-5 py-lg-6">
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-lg-7">
                    <h2 class="h3 fw-semibold mb-3">
                        Segmento: Minería y túneles
                    </h2>
                    <p class="mb-3">
                        Las operaciones mineras y de excavación requieren concretos y morteros con resistencia
                        temprana, cohesión, bombeabilidad y tiempos de fraguado ajustados a la logística del sitio.
                        La seguridad y continuidad operativa dependen de mezclas confiables.
                    </p>
                    <p class="mb-4">
                        Las soluciones de Inovatie buscan equilibrar seguridad, productividad y desempeño,
                        considerando métodos de excavación, logística de suministro, condiciones de
                        ventilación y restricciones de espacio.
                    </p>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="border rounded-3 p-3 bg-light h-100">
                                <h3 class="h6 fw-semibold mb-2">Retos frecuentes</h3>
                                <ul class="small mb-0 ps-3">
                                    <li>Resistencias tempranas muy elevadas.</li>
                                    <li>Ambientes húmedos, salinos o con cambios térmicos bruscos.</li>
                                    <li>Limitación de espacio para equipos de bombeo y mezclado.</li>
                                    <li>Control del rebote en concreto lanzado.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded-3 p-3 bg-light h-100">
                                <h3 class="h6 fw-semibold mb-2">Líneas de solución Inovatie</h3>
                                <ul class="small mb-0 ps-3">
                                    <li>Acelerantes de fraguado libres de álcalis.</li>
                                    <li>Modificadores de viscosidad para mezclas bombeables.</li>
                                    <li>Reductores de agua de alto desempeño.</li>
                                    <li>Aditivos especializados para rellenos minerales.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="border rounded-3 p-3 p-lg-4 bg-white shadow-sm h-100">
                        <h3 class="h6 fw-semibold mb-3">Aplicaciones típicas</h3>
                        <ul class="small mb-4 ps-3">
                            <li>Concreto lanzado para sostenimiento de túneles.</li>
                            <li>Rellenos cementados en minería subterránea.</li>
                            <li>Morteros de anclaje y sellos de seguridad.</li>
                            <li>Plataformas y galerías de servicio.</li>
                        </ul>
                        <h4 class="h6 fw-semibold mb-2">Productos representativos*</h4>
                        <p class="small mb-3">
                            Contenido ilustrativo. En la integración final se mostrarán familias y productos
                            específicos asociados a este segmento.
                        </p>
                        <ul class="small mb-0 ps-3">
                            <li>Acelerantes libres de álcalis para concreto lanzado.</li>
                            <li>Reductores de agua de alto desempeño para bombeo.</li>
                            <li>Modificadores de viscosidad para mezclas cohesivas.</li>
                            <li>Aditivos especiales para rellenos minerales.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUE GENERICO PARA OTROS SEGMENTOS -->
    <section id="detalle-prefabricados" class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <h2 class="h4 fw-semibold mb-3">
                        Segmento: Prefabricados y elementos especiales
                    </h2>
                    <p class="mb-3">
                        En prefabricados, la repetibilidad, la estética y la eficiencia en los ciclos de
                        producción determinan la competitividad. Las soluciones de Inovatie ayudan a
                        estabilizar tiempos, reducir defectos y optimizar resistencia temprana.
                    </p>
                    <p class="mb-0">
                        En una siguiente fase, esta sección se conectará con el catálogo de productos,
                        casos de éxito y documentación técnica específica para este segmento.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="border rounded-3 p-3 bg-white small">
                        <p class="mb-1 fw-semibold">Pendiente de integración</p>
                        <p class="mb-2">
                            En futuras versiones se integrarán:
                        </p>
                        <ul class="mb-0 ps-3">
                            <li>Catálogo de productos por segmento.</li>
                            <li>Casos de éxito y proyectos representativos.</li>
                            <li>Descargables técnicos (fichas, boletines, etc.).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUES DEMO PARA OTROS SEGMENTOS -->
    <section id="detalle-pavimentos" class="py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <h2 class="h4 fw-semibold mb-3">
                        Segmento: Pavimentos y pisos industriales
                    </h2>
                    <p class="mb-3">
                        Los pavimentos y pisos industriales enfrentan cargas dinámicas, abrasión y cambios
                        térmicos. La selección correcta de aditivos asegura estabilidad, durabilidad y mejor
                        comportamiento estructural.
                    </p>
                    <p class="mb-0">
                        Este bloque es demostrativo y se complementará con información específica de
                        productos y proyectos conforme avance la integración del sitio.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="border rounded-3 p-3 bg-white small">
                        <ul class="mb-0 ps-3">
                            <li>Control de desgaste superficial y abrasión.</li>
                            <li>Estabilidad volumétrica y reducción de curling.</li>
                            <li>Soluciones para tránsito pesado y patios de maniobra.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="detalle-concreteras" class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <h2 class="h4 fw-semibold mb-3">
                        Segmento: Concreteras y cementeras
                    </h2>
                    <p class="mb-3">
                        Las plantas productoras requieren aditivos estables, consistentes y adaptados a
                        variaciones de humedad, temperatura y materiales locales. Una correcta selección
                        permite mejorar la eficiencia y reducir reclamaciones en obra.
                    </p>
                    <p class="mb-0">
                        En la versión dinámica, este segmento se vinculará con familias de productos,
                        fichas técnicas y herramientas de seguimiento de desempeño.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="border rounded-3 p-3 bg-white small">
                        <ul class="mb-0 ps-3">
                            <li>Reductores de agua para mezclas controladas.</li>
                            <li>Aditivos que compensan variaciones de humedad en agregados.</li>
                            <li>Soluciones para mejorar bombeabilidad y cohesión.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="detalle-terracerias" class="py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <h2 class="h4 fw-semibold mb-3">
                        Segmento: Terracerías y estabilización de suelos
                    </h2>
                    <p class="mb-3">
                        La estabilización de suelos mejora la capacidad de carga, reduce asentamientos y
                        permite plataformas más seguras y duraderas. Las soluciones químicas adecuadas
                        ayudan a controlar humedad y comportamiento volumétrico.
                    </p>
                    <p class="mb-0">
                        Este contenido es demostrativo; posteriormente se complementará con casos reales y
                        recomendaciones de productos específicos para plataformas, caminos y terracerías.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="border rounded-3 p-3 bg-white small">
                        <ul class="mb-0 ps-3">
                            <li>Estabilizadores químicos para suelos expansivos.</li>
                            <li>Aditivos anti-humedad para plataformas.</li>
                            <li>Control de deformaciones y compactación.</li>
                        </ul>
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
                        ¿No encuentras tu segmento o quieres una propuesta a la medida?
                    </h2>
                    <p class="mb-0 text-muted">
                        Comparte con nosotros las características de tu proyecto y un especialista de
                        Inovatie podrá orientarte en la selección de aditivos, servicios de laboratorio
                        y acompañamiento técnico adecuados.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?= base_url('pages/contacto.php'); ?>" class="btn btn-primary">
                        Contactar a un especialista
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>