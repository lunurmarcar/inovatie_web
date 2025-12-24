<?php

/**
 * Footer global Inovatie
 * Incluye botón flotante de WhatsApp
 */
?>

<footer class="footer-inovatie">
    <div class="container">

        <div class="row g-4 align-items-start">

            <!-- Columna: Contacto -->
            <div class="col-12 col-lg-5 footer-contacto">
                <h4>Contacto</h4>

                <p>
                    <i class="bi bi-envelope"></i>
                    <a href="mailto:contacto@inovatie.mx">contacto@inovatie.mx</a>
                </p>

                <p>
                    <i class="bi bi-telephone"></i>
                    +52 55 1363 5838
                </p>

                <p class="mb-0">
                    <i class="bi bi-geo-alt"></i>
                    Av. Insurgentes Sur 1248<br>
                    Col. del Valle Sur, Benito Juárez<br>
                    Ciudad de México, CDMX
                </p>

                <div class="footer-links mt-3">
                    <a class="footer-link" href="<?= base_url('assets/docs/aviso_privacidad.pdf') ?>" target="_blank"
                        rel="noopener">
                        <i class="bi bi-file-earmark-text"></i>
                        Aviso de privacidad (PDF)
                    </a>
                </div>
            </div>

            <!-- Columna: Mapa -->
            <div class="col-12 col-lg-7 footer-mapa">
                <div class="map-wrap" aria-label="Ubicación en Google Maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.8587785578607!2d-99.17814100000001!3d19.3752666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffc49d2b294f%3A0x668a567a79f250e6!2sCentral%20W%20Insurgentes%20Sur!5e0!3m2!1ses-419!2smx!4v1766525878098!5m2!1ses-419!2smx"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen
                        title="Mapa Inovatie">
                    </iframe>
                </div>
            </div>

        </div>

        <hr class="footer-divider">

        <div class="footer-legal d-flex justify-content-between flex-wrap gap-2">
            <div>
                © <?= date('Y') ?> Inovatie. Todos los derechos reservados.
            </div>
            <div>
                Hecho para ingeniería y obra civil
            </div>
        </div>

    </div>
</footer>

<!-- ==============================
     BOTÓN FLOTANTE WHATSAPP
     ============================== -->
<a href="https://wa.me/525513635838?text=Hola%20Inovatie,%20me%20gustaría%20recibir%20información."
    class="whatsapp-float" target="_blank" rel="noopener" aria-label="Contactar por WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>