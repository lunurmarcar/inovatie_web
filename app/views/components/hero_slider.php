<?php

/**
 * HERO SLIDER — Componente modular
 * - Fallback local por número: slider_01 .. slider_08
 * - Preparado para BD futura (si un texto viene vacío, no se imprime)
 * - NO BD todavía
 */

/**
 * Slides base (fijos de marca)
 * Regla: mínimo 5, máximo 8
 * Convención de imagen: assets/img/hero/slider_0X.(png|jpg|jpeg|webp)
 */
$slidesDefault = [
    [
        'key'      => 'slider_01',
        'image'    => 'assets/img/hero/slider_01.png',
        'title'    => 'Innovamos la química que construye el futuro',
        'subtitle' => 'Soluciones integrales',
    ],
    [
        'key'      => 'slider_02',
        'image'    => 'assets/img/hero/slider_02.png',
        'title'    => 'Tecnologías sostenibles',
        'subtitle' => 'Bajo carbono y desempeño superior',
    ],
    [
        'key'      => 'slider_03',
        'image'    => 'assets/img/hero/slider_03.png',
        'title'    => 'Ingeniería y tecnología aplicada',
        'subtitle' => 'Soporte especializado',
    ],
    [
        'key'      => 'slider_04',
        'image'    => 'assets/img/hero/slider_04.png',
        'title'    => 'Calidad y desempeño comprobado',
        'subtitle' => 'Marcas líderes',
    ],
    [
        'key'      => 'slider_05',
        'image'    => 'assets/img/hero/slider_05.png',
        'title'    => 'Cercanía técnica',
        'subtitle' => 'Atención con sentido de urgencia',
    ],
];

/**
 * FUTURO (BD):
 * $slides = obtenerSlidesDesdeBD();
 * - Si hay 1..8, se usan esos
 * - Si hay menos de 5, se completa con defaults
 * - Si hay 0, usar defaults (5)
 * - Si hay más de 8, limitar a 8
 */
$slides = $slidesDefault;
?>

<section id="hero-slider" class="hero-slider" aria-label="Hero Slider">

    <div class="hero-slider__track">
        <?php foreach ($slides as $index => $slide): ?>
        <article class="hero-slide<?= $index === 0 ? ' is-active' : '' ?>" data-slide="<?= $index ?>">

            <!-- Imagen -->
            <div class="hero-slide__media">
                <img src="<?= base_url($slide['image']) ?>" alt="<?= htmlspecialchars($slide['title'] ?? 'Slide') ?>"
                    loading="<?= $index === 0 ? 'eager' : 'lazy' ?>">
            </div>

            <!-- Contenido: ENVUELTO en una caja para apilar y centrar SIEMPRE -->
            <div class="hero-slide__content">
                <div class="hero-slide__box">

                    <?php if (!empty($slide['title'])): ?>
                    <h1 class="hero-slide__title">
                        <?= htmlspecialchars($slide['title']) ?>
                    </h1>
                    <?php endif; ?>

                    <?php if (!empty($slide['subtitle'])): ?>
                    <p class="hero-slide__subtitle">
                        <?= htmlspecialchars($slide['subtitle']) ?>
                    </p>
                    <?php endif; ?>

                </div>
            </div>

        </article>
        <?php endforeach; ?>
    </div>

    <!-- Controles -->
    <button class="hero-slider__nav hero-slider__nav--prev" type="button" aria-label="Anterior" data-hero-prev></button>

    <button class="hero-slider__nav hero-slider__nav--next" type="button" aria-label="Siguiente"
        data-hero-next></button>

    <!-- Indicadores -->
    <div class="hero-slider__dots" role="tablist" aria-label="Indicadores del slider">
        <?php foreach ($slides as $i => $_): ?>
        <button class="hero-slider__dot<?= $i === 0 ? ' is-active' : '' ?>" type="button" data-hero-dot="<?= $i ?>"
            aria-label="Ir al slide <?= $i + 1 ?>"></button>
        <?php endforeach; ?>
    </div>

</section>