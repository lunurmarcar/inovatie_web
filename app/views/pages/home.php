<?php

declare(strict_types=1);
/**
 * HOME (Machote de secciones)
 * - Solo estructura visual (sin BD, sin JS, sin componentes reales)
 * - Secciones con fondo distinto y texto centrado para validar distribución
 * - SIN sección de Testimonios (eliminada por requerimiento)
 */

?>
<!-- <div style="width:100%; height:100vh; display:flex; justify-content:center; align-items:center;">
    <img src="<?= base_url('assets/img/inovatie_logo.png') ?>" alt="Inovatie Logo"
        style="max-width:300px; height:auto;">
</div> -->
<!-- =========================
   SECCIÓN 0 — HERO / CARRUSEL
   ========================= -->
<?php require __DIR__ . '/../components/hero_slider.php'; ?>


<!-- =========================
     SECCIÓN — Productos Destacados
========================= -->
<section id="seccion-productos" class="py-5 bg-white">
    <div class="container">

        <header class="text-center mb-5">
            <h2 class="text-uppercase fw-bold">Productos Destacados</h2>
            <p class="text-muted">
                Soluciones técnicas desarrolladas para alto desempeño en construcción, concreto y obra civil.
            </p>
        </header>

        <div class="row g-4">

            <!-- Producto 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm producto-card">
                    <img src="<?= base_url('assets/img/productos/prod_01.jpg') ?>" class="card-img-top"
                        alt="Aditivo Superplastificante">

                    <div class="card-body">
                        <h5 class="card-title">Aditivo Superplastificante HR</h5>
                        <p class="card-text small text-muted">
                            Aditivo reductor de agua de alto rango para concretos de alto desempeño.
                        </p>
                    </div>

                    <div class="card-footer bg-transparent border-0 text-center">
                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#modalProducto01">
                            Ver más
                        </button>
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm producto-card">
                    <img src="<?= base_url('assets/img/productos/prod_02.jpg') ?>" class="card-img-top"
                        alt="Fibra Sintética Estructural">

                    <div class="card-body">
                        <h5 class="card-title">Fibra Sintética Estructural</h5>
                        <p class="card-text small text-muted">
                            Refuerzo tridimensional para control de fisuración y mejora estructural.
                        </p>
                    </div>

                    <div class="card-footer bg-transparent border-0 text-center">
                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#modalProducto02">
                            Ver más
                        </button>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm producto-card">
                    <img src="<?= base_url('assets/img/productos/prod_03.jpg') ?>" class="card-img-top"
                        alt="Aditivo Impermeabilizante Integral">

                    <div class="card-body">
                        <h5 class="card-title">Impermeabilizante Integral</h5>
                        <p class="card-text small text-muted">
                            Aditivo integral para reducción de permeabilidad y durabilidad del concreto.
                        </p>
                    </div>

                    <div class="card-footer bg-transparent border-0 text-center">
                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#modalProducto03">
                            Ver más
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- =========================
     SECCIÓN — Blog / Noticias
========================= -->
<section id="seccion-blog" class="py-5 bg-light">
    <div class="container">

        <header class="text-center mb-5">
            <h2 class="text-uppercase fw-bold">Noticias Técnicas</h2>
            <p class="text-muted">
                Tendencias, innovación y conocimiento técnico en construcción y materiales.
            </p>
        </header>

        <div class="row g-4">

            <!-- Noticia 1 -->
            <div class="col-md-4">
                <article class="card h-100 shadow-sm blog-card">
                    <img src="<?= base_url('assets/img/blog/blog_01.jpg') ?>" class="card-img-top"
                        alt="Concreto de alto desempeño">

                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Concreto</span>
                        <h5 class="card-title">
                            Concreto de alto desempeño en infraestructura moderna
                        </h5>
                        <p class="card-text small text-muted">
                            El uso de aditivos avanzados permite alcanzar mayores resistencias,
                            durabilidad y eficiencia en obras civiles.
                        </p>
                    </div>

                    <div class="card-footer bg-transparent border-0">
                        <a href="#" class="btn btn-link p-0 text-primary fw-semibold">
                            Leer artículo →
                        </a>
                    </div>
                </article>
            </div>

            <!-- Noticia 2 -->
            <div class="col-md-4">
                <article class="card h-100 shadow-sm blog-card">
                    <img src="<?= base_url('assets/img/blog/blog_02.jpg') ?>" class="card-img-top"
                        alt="Aditivos sostenibles">

                    <div class="card-body">
                        <span class="badge bg-success mb-2">Sostenibilidad</span>
                        <h5 class="card-title">
                            Aditivos sostenibles y reducción de huella de carbono
                        </h5>
                        <p class="card-text small text-muted">
                            Nuevas formulaciones químicas permiten reducir el consumo de cemento
                            manteniendo el desempeño estructural.
                        </p>
                    </div>

                    <div class="card-footer bg-transparent border-0">
                        <a href="#" class="btn btn-link p-0 text-primary fw-semibold">
                            Leer artículo →
                        </a>
                    </div>
                </article>
            </div>

            <!-- Noticia 3 -->
            <div class="col-md-4">
                <article class="card h-100 shadow-sm blog-card">
                    <img src="<?= base_url('assets/img/blog/blog_03.jpg') ?>" class="card-img-top"
                        alt="Control de calidad en obra">

                    <div class="card-body">
                        <span class="badge bg-secondary mb-2">Ingeniería</span>
                        <h5 class="card-title">
                            Control de calidad en obra: claves para el desempeño final
                        </h5>
                        <p class="card-text small text-muted">
                            La correcta dosificación y supervisión técnica es determinante
                            para el éxito de cualquier proyecto.
                        </p>
                    </div>

                    <div class="card-footer bg-transparent border-0">
                        <a href="#" class="btn btn-link p-0 text-primary fw-semibold">
                            Leer artículo →
                        </a>
                    </div>
                </article>
            </div>

        </div>
    </div>
</section>


<!-- =========================
     SECCIÓN — Alianzas Estratégicas
========================= -->
<section id="seccion-alianzas" class="py-5 bg-white">
    <div class="container">

        <header class="text-center mb-5">
            <h2 class="text-uppercase fw-bold">Alianzas Estratégicas</h2>
            <p class="text-muted">
                Colaboramos con marcas líderes para ofrecer soluciones técnicas confiables y de alto desempeño.
            </p>
        </header>

        <div class="row g-4 justify-content-center alianzas-grid">

            <?php
            $alianzas = [
                ['img' => 'bar_chip.png', 'name' => 'BarChip Inc. – The Synthetic Fibre Experts'],
                ['img' => 'bekaert.png', 'name' => 'Bekaert'],
                ['img' => 'fester.png', 'name' => 'Fester'],
                ['img' => 'elements.png', 'name' => 'Elements – Química Aplicada'],
                ['img' => 'penetron.png', 'name' => 'Penetron'],
                ['img' => 'hummer.png', 'name' => 'Hummer Plastics'],
                ['img' => 'spajic.png', 'name' => 'Spajic'],
                ['img' => 'imcyc.png', 'name' => 'IMCYC'],
                ['img' => 'amc.png', 'name' => 'AMC – Drilling Optimisation'],
                ['img' => 'azcapotzalco.png', 'name' => 'AMC Azcapotzalco'],
            ];
            ?>

            <?php foreach ($alianzas as $alianza): ?>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="alianza-item" data-name="<?= htmlspecialchars($alianza['name']) ?>">
                    <img src="<?= base_url('assets/img/alianzas/' . $alianza['img']) ?>"
                        alt="<?= htmlspecialchars($alianza['name']) ?>">
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- =========================
   SECCIÓN 4 — CONTACTO / CTA
   ========================= -->
<!-- <section id="seccion-contacto" style="min-height:45vh; background:#ffeef1;">
    <div class="container py-5 h-100">
        <div class="d-flex align-items-center justify-content-center text-center" style="min-height:35vh;">
            <div>
                <h2 class="m-0 text-uppercase fw-bold">Aquí va contacto / CTA</h2>
                <p class="mt-2 mb-0">Formulario / botones / datos de contacto (pendiente)</p>
            </div>
        </div>
    </div>
</section> -->