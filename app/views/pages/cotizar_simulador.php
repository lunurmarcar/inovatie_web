<?php
// cotizar_simulador.php
// Simula la recepción de un correo (vista tipo Gmail). No envía email real.

function h($s)
{
    return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}

$sku       = $_POST['sku'] ?? '';
$producto  = $_POST['producto'] ?? '';
$portafolio = $_POST['portafolio'] ?? '';
$categoria = $_POST['categoria'] ?? '';

$nombre  = $_POST['nombre'] ?? '';
$empresa = $_POST['empresa'] ?? '';
$correo  = $_POST['correo'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$mensaje = $_POST['mensaje'] ?? '';

$asunto = "Cotización – " . ($producto ?: 'Producto') . ($sku ? " ($sku)" : '');
$fecha  = date('Y-m-d H:i:s');

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Correo simulado – Cotización</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f6f8fc;
        }

        .mail-shell {
            max-width: 980px;
            margin: 24px auto;
        }

        .gmail-left {
            width: 260px;
        }

        .gmail-card {
            border-radius: 16px;
        }

        .pill {
            border-radius: 999px;
            padding: .15rem .6rem;
            font-size: .8rem;
        }

        pre {
            white-space: pre-wrap;
        }
    </style>
</head>

<body>
    <div class="mail-shell">
        <div class="row g-3">
            <div class="col-12 col-lg-3">
                <div class="card gmail-card shadow-sm">
                    <div class="card-body">
                        <div class="fw-semibold mb-2">Correo (simulado)</div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button" disabled>Recibidos</button>
                            <button class="btn btn-outline-secondary" type="button" disabled>Enviados</button>
                            <button class="btn btn-outline-secondary" type="button" disabled>Borradores</button>
                        </div>
                        <hr>
                        <div class="small text-muted">
                            Esta pantalla simula un correo recibido, sin salida real por SMTP.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-9">
                <div class="card gmail-card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                                <div class="h5 mb-1"><?= h($asunto) ?></div>
                                <div class="text-muted small">
                                    Recibido: <?= h($fecha) ?> <span class="pill bg-success-subtle text-success">Simulado</span>
                                </div>
                            </div>
                            <a class="btn btn-outline-primary" href="javascript:history.back()">Regresar</a>
                        </div>

                        <hr>

                        <div class="row g-3">
                            <div class="col-12">
                                <div class="small text-muted">De</div>
                                <div class="fw-semibold"><?= h($nombre) ?><?= $correo ? " <span class='text-muted fw-normal'>&lt;" . h($correo) . "&gt;</span>" : "" ?></div>
                            </div>

                            <div class="col-12">
                                <div class="small text-muted">Producto</div>
                                <div class="fw-semibold"><?= h($producto) ?> <span class="text-muted fw-normal"><?= $sku ? "(" . h($sku) . ")" : "" ?></span></div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="small text-muted">Portafolio</div>
                                <div><?= h($portafolio) ?></div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="small text-muted">Categoría</div>
                                <div><?= h($categoria) ?></div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="small text-muted">Empresa</div>
                                <div><?= h($empresa) ?></div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="small text-muted">Teléfono</div>
                                <div><?= h($telefono) ?></div>
                            </div>

                            <div class="col-12">
                                <div class="small text-muted">Mensaje</div>
                                <pre class="mb-0"><?= h($mensaje) ?></pre>
                            </div>
                        </div>

                        <hr>

                        <div class="alert alert-success mb-0">
                            Correo simulado recibido correctamente. (No se realizó envío real.)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>