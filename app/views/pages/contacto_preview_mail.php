<?php
// contacto_preview_mail.php

// 1) Bloqueo simple por honeypot
$honeypot = isset($_POST['empresa']) ? trim($_POST['empresa']) : '';
if ($honeypot !== '') {
    http_response_code(200);
    echo '<!doctype html><html lang="es"><head><meta charset="utf-8"><title>Bloqueado</title></head><body>';
    echo '<h3>Solicitud bloqueada</h3><p>Detección de envío automatizado (honeypot).</p>';
    echo '</body></html>';
    exit;
}

// 2) Helpers de sanitización (para no ejecutar HTML)
function safe_text($v)
{
    $v = is_string($v) ? $v : '';
    $v = trim($v);
    // Quitar caracteres de control raros
    $v = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', $v);
    // Escapar HTML
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
}

$nombre   = safe_text($_POST['nombre'] ?? '');
$email    = safe_text($_POST['email'] ?? '');
$telefono = safe_text($_POST['telefono'] ?? '');
$mensaje  = safe_text($_POST['mensaje'] ?? '');

// Para mostrar saltos de línea en HTML
$mensaje_html = nl2br($mensaje);

// 3) Simulación de metadatos de correo
$asunto = 'Contacto recibido – Inovatie';
$fecha  = date('Y-m-d H:i:s'); // si quieres formato MX más bonito, lo cambiamos luego
$para   = 'contacto@inovatie.com'; // solo simulación
$de     = ($email !== '') ? $email : 'no-reply@inovatie.com';
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vista previa de correo</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f5f7;
            color: #111827;
        }

        .wrap {
            max-width: 900px;
            margin: 24px auto;
            padding: 0 16px;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 12px;
        }

        .badge {
            display: inline-block;
            background: #eef2ff;
            border: 1px solid #c7d2fe;
            color: #1e3a8a;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
        }

        .card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 24px rgba(0, 0, 0, .06);
        }

        .header {
            padding: 18px 20px;
            border-bottom: 1px solid #e5e7eb;
            background: linear-gradient(180deg, #0b1f3a 0%, #0b1f3a 55%, #0f2a4b 100%);
            color: #ffffff;
        }

        .header h1 {
            margin: 0 0 6px 0;
            font-size: 18px;
            font-weight: 800;
            letter-spacing: .2px;
        }

        .header .meta {
            margin: 0;
            font-size: 12px;
            opacity: .9;
            line-height: 1.6;
        }

        .content {
            padding: 18px 20px;
        }

        .row {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 14px;
        }

        .field {
            flex: 1 1 220px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 12px 12px;
            background: #fafafa;
        }

        .field .lbl {
            font-size: 12px;
            color: #6b7280;
            margin-bottom: 6px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .field .val {
            font-size: 14px;
            color: #111827;
            font-weight: 600;
            word-break: break-word;
        }

        .message {
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 14px 14px;
            background: #ffffff;
        }

        .message .lbl {
            font-size: 12px;
            color: #6b7280;
            margin-bottom: 8px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .message .val {
            font-size: 14px;
            line-height: 1.7;
            color: #111827;
            white-space: normal;
            word-break: break-word;
        }

        .footer {
            padding: 14px 20px;
            border-top: 1px solid #e5e7eb;
            background: #fafafa;
            font-size: 12px;
            color: #6b7280;
            display: flex;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            background: #111827;
            color: #fff;
            padding: 10px 14px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 800;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="topbar">
            <div class="badge">SIMULACIÓN – Vista previa de correo</div>
            <a class="btn" href="javascript:window.print()">Imprimir</a>
        </div>

        <div class="card">
            <div class="header">
                <h1>Asunto: <?= safe_text($asunto); ?></h1>
                <p class="meta">
                    Para: <?= safe_text($para); ?><br>
                    De: <?= safe_text($de); ?><br>
                    Fecha: <?= safe_text($fecha); ?>
                </p>
            </div>

            <div class="content">
                <div class="row">
                    <div class="field">
                        <div class="lbl">Nombre</div>
                        <div class="val"><?= $nombre !== '' ? $nombre : '—'; ?></div>
                    </div>

                    <div class="field">
                        <div class="lbl">Correo</div>
                        <div class="val"><?= $email !== '' ? $email : '—'; ?></div>
                    </div>

                    <div class="field">
                        <div class="lbl">Teléfono</div>
                        <div class="val"><?= $telefono !== '' ? $telefono : '—'; ?></div>
                    </div>
                </div>

                <div class="message">
                    <div class="lbl">Mensaje</div>
                    <div class="val"><?= $mensaje !== '' ? $mensaje_html : '—'; ?></div>
                </div>
            </div>

            <div class="footer">
                <div>Este correo es una simulación de vista previa. No se realizó envío real.</div>
                <div>Inovatie – Formulario de contacto</div>
            </div>
        </div>
    </div>
</body>

</html>