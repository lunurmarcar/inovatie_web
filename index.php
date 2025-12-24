<?php
// index.php — Router mínimo por querystring (?page=...)

require_once __DIR__ . '/app/config/config.php';

// Autoload muy simple (por si lo necesitas después)
spl_autoload_register(function ($class) {
    $base = __DIR__ . '/app/';
    $paths = [
        "controllers/$class.php",
        "models/$class.php",
        "helpers/$class.php",
    ];

    foreach ($paths as $path) {
        $file = $base . $path;
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// 1) Página solicitada
$page = isset($_GET['page']) ? trim($_GET['page']) : 'home';

// 2) Whitelist (solo páginas permitidas)
$routes = [
    'home'          => __DIR__ . '/app/views/pages/home.php',
    'productos'     => __DIR__ . '/app/views/pages/productos.php',
    'segmentos'     => __DIR__ . '/app/views/pages/segmentos.php',
    'servicios'     => __DIR__ . '/app/views/pages/servicios.php',
    'alianzas'      => __DIR__ . '/app/views/pages/alianzas.php',
    'quienes_somos' => __DIR__ . '/app/views/pages/quienes_somos.php',
    'contacto'      => __DIR__ . '/app/views/pages/contacto.php',
];

// 3) Resolver contenido (si no existe => home)
$content = $routes[$page] ?? $routes['home'];

// 4) Render layout principal
require __DIR__ . '/app/views/layouts/main.php';