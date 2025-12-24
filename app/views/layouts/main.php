<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="Inovatie - Innovamos la química que construye el futuro">
    <meta name="author" content="Inovatie">
    <meta name="theme-color" content="#0033A0">

    <title>Inovatie</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/img/favicon.png') ?>" type="image/png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Tokens (si existe en tu estructura; si está vacío, no pasa nada pero debe existir) -->
    <link rel="stylesheet" href="<?= base_url('assets/css/tokens.css') ?>">

    <!-- Estilos del header/navbar -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Estilos del header/slider -->
    <link rel="stylesheet" href="<?= base_url('assets/css/hero-slider-a.css') ?>">


    <!-- BASE_URL para JS -->
    <script>
    window.BASE_URL = '<?= rtrim(base_url(), '/') ?>/'
    </script>
</head>

<body>

    <?php
    // Header superior (logo + tagline)
    require __DIR__ . '/../partials/header.php';

    // Navbar principal
    require __DIR__ . '/../partials/navbar.php';
    ?>

    <main id="site-main">
        <?php
        // Contenido dinámico de la página (por ejemplo: home.php)
        if (isset($content)) {
            require $content;
        }
        ?>
        <div class="modal fade" id="modalProducto01" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Aditivo Superplastificante HR</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <p>
                            Aditivo reductor de agua de alto rango diseñado para concretos
                            con alta trabajabilidad y resistencia mecánica superior.
                        </p>

                        <ul>
                            <li>Reducción significativa de la relación agua/cemento.</li>
                            <li>Mejora en resistencia inicial y final.</li>
                            <li>Compatible con cementos Portland y mezclas especiales.</li>
                        </ul>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <img src="<?= base_url('assets/img/productos/prod_01_a.jpg') ?>"
                                    class="img-fluid rounded">
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url('assets/img/productos/prod_01_b.jpg') ?>"
                                    class="img-fluid rounded">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="<?= base_url('assets/docs/ficha_prod_01.pdf') ?>" class="btn btn-outline-secondary"
                            target="_blank">
                            Ficha técnica
                        </a>
                        <a href="#" class="btn btn-primary">
                            Cotizar
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="modalProducto02" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Aditivo Superplastificante HR</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <p>
                            Aditivo reductor de agua de alto rango diseñado para concretos
                            con alta trabajabilidad y resistencia mecánica superior.
                        </p>

                        <ul>
                            <li>Reducción significativa de la relación agua/cemento.</li>
                            <li>Mejora en resistencia inicial y final.</li>
                            <li>Compatible con cementos Portland y mezclas especiales.</li>
                        </ul>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <img src="<?= base_url('assets/img/productos/prod_01_a.jpg') ?>"
                                    class="img-fluid rounded">
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url('assets/img/productos/prod_01_b.jpg') ?>"
                                    class="img-fluid rounded">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="<?= base_url('assets/docs/ficha_prod_01.pdf') ?>" class="btn btn-outline-secondary"
                            target="_blank">
                            Ficha técnica
                        </a>
                        <a href="#" class="btn btn-primary">
                            Cotizar
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="modalProducto03" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Aditivo Superplastificante HR</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <p>
                            Aditivo reductor de agua de alto rango diseñado para concretos
                            con alta trabajabilidad y resistencia mecánica superior.
                        </p>

                        <ul>
                            <li>Reducción significativa de la relación agua/cemento.</li>
                            <li>Mejora en resistencia inicial y final.</li>
                            <li>Compatible con cementos Portland y mezclas especiales.</li>
                        </ul>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <img src="<?= base_url('assets/img/productos/prod_01_a.jpg') ?>"
                                    class="img-fluid rounded">
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url('assets/img/productos/prod_01_b.jpg') ?>"
                                    class="img-fluid rounded">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="<?= base_url('assets/docs/ficha_prod_01.pdf') ?>" class="btn btn-outline-secondary"
                            target="_blank">
                            Ficha técnica
                        </a>
                        <a href="#" class="btn btn-primary">
                            Cotizar
                        </a>
                    </div>

                </div>
            </div>
        </div>



    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Hero Slider JS -->
    <script src="<?= base_url('assets/js/hero-slider.js') ?>"></script>
    <?php require __DIR__ . '/../partials/footer.php'; ?>


</body>

</html>