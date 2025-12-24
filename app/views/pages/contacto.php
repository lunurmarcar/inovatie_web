<main class="container my-5" style="max-width: 720px;">
    <h3 class="mb-3">Contáctanos</h3>

    <form id="formContacto" method="POST" action="<?= base_url('app/views/pages/contacto_preview_mail.php'); ?>">

        <div class="mb-3">
            <label class="form-label" for="nombre">Nombre completo</label>
            <input id="nombre" class="form-control" name="nombre" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="email">Correo electrónico</label>
            <input id="email" class="form-control" name="email" type="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="telefono">Teléfono</label>
            <input id="telefono" class="form-control" name="telefono" placeholder="+5255..." required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="mensaje">Mensaje</label>
            <textarea id="mensaje" class="form-control" name="mensaje" rows="4" required></textarea>
        </div>

        <input type="text" name="empresa" class="d-none"> <!-- honeypot -->

        <button class="btn btn-primary">Enviar</button>
    </form>
</main>