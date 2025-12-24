<?php

/**
 * Sección: Catálogo / Productos (Inovatie)
 * Requisitos asumidos:
 * - Bootstrap 5 CSS + JS ya cargados globalmente.
 * - Esta sección se incrusta donde corresponda en tu MVC.
 */
?>
<section class="container-fluid py-3" id="inovatieCatalogoSection">
    <div class="row g-3">
        <!-- Sidebar fijo -->
        <aside class="col-12 col-lg-3">
            <div class="catalogo-sidebar card shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <div class="small text-muted">INOVATIE</div>
                            <div class="fw-semibold">Catálogo</div>
                        </div>
                    </div>

                    <div class="d-grid gap-2" id="catalogoMenuFamilias">
                        <!-- Botones generados por JS -->
                    </div>

                    <hr class="my-3" />

                    <div class="small text-muted">
                        Consejo: usa el buscador del lado derecho para encontrar un producto por nombre (SKU).
                    </div>
                </div>
            </div>
        </aside>

        <!-- Contenido derecho -->
        <main class="col-12 col-lg-9">
            <!-- Buscador (siempre visible) -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row g-2 align-items-center">
                        <div class="col-12 col-md">
                            <label for="catalogoBuscador" class="form-label mb-1">Buscar por nombre del producto</label>
                            <input type="text" class="form-control" id="catalogoBuscador"
                                placeholder="Escribe para ver sugerencias..." list="productSuggestions"
                                autocomplete="off" />
                            <datalist id="productSuggestions"></datalist>
                        </div>
                        <div class="col-12 col-md-auto">
                            <label class="form-label mb-1 d-none d-md-block">&nbsp;</label>
                            <button class="btn btn-primary w-100" id="btnBuscarProducto" type="button">Buscar</button>
                        </div>
                    </div>
                    <div class="form-text mt-2">
                        Selecciona una sugerencia y presiona “Buscar” para mostrar únicamente ese producto.
                    </div>
                </div>
            </div>

            <!-- Resultados -->
            <div class="mt-3" id="catalogoResultados">
                <!-- Por requisito: al inicio puede quedar en blanco -->
            </div>
        </main>
    </div>
</section>

<!-- Modal Detalle (XL) -->
<div class="modal fade" id="productDetailModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title mb-0" id="detailTitle">Detalle del producto</h5>
                    <div class="small text-muted" id="detailSubtitle"></div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12 col-lg-5">
                        <div class="ratio ratio-4x3 bg-light rounded overflow-hidden">
                            <img id="detailImage" src="" alt="Imagen del producto"
                                style="object-fit: cover; width:100%; height:100%;">
                        </div>

                        <div class="d-grid gap-2 mt-3">
                            <a class="btn btn-danger" id="btnFichaTecnica"
                                href="<?= base_url('assets/docs/ficha_tecnica_generica.pdf') ?>" target="_blank"
                                rel="noopener">
                                Ficha técnica
                            </a>
                            <button class="btn btn-outline-primary" id="btnCotizarDesdeDetalle" type="button">
                                Cotizar
                            </button>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7">
                        <div class="mb-3">
                            <div class="small text-muted">SKU</div>
                            <div class="fw-semibold" id="detailSKU"></div>
                        </div>

                        <div class="mb-3">
                            <div class="small text-muted">Nombre del producto</div>
                            <div class="fw-semibold" id="detailNombre"></div>
                        </div>

                        <div class="mb-3">
                            <div class="small text-muted">Categoría</div>
                            <div id="detailCategoria"></div>
                        </div>

                        <div class="mb-3">
                            <div class="small text-muted">Portafolio</div>
                            <div id="detailPortafolio"></div>
                        </div>

                        <hr />

                        <div class="mb-3">
                            <div class="small text-muted">Descripción</div>
                            <div id="detailDescripcion" style="white-space: pre-wrap;"></div>
                        </div>

                        <div class="mb-3" id="detailDescripcionGraficaWrap" style="display:none;">
                            <div class="small text-muted">DESCRIPCION Grafica</div>
                            <div id="detailDescripcionGrafica" style="white-space: pre-wrap;"></div>
                        </div>

                        <div class="mb-3" id="detailAmbienteWrap" style="display:none;">
                            <div class="small text-muted">AMBIENTE</div>
                            <div id="detailAmbiente"></div>
                        </div>

                        <div class="mb-3" id="detailImagenSugeridaWrap" style="display:none;">
                            <div class="small text-muted">IMAGEN SUGERIDA</div>
                            <div id="detailImagenSugerida" style="white-space: pre-wrap;"></div>
                        </div>

                        <hr />

                        <div class="mb-3">
                            <div class="small text-muted" id="extra1Label"></div>
                            <div id="extra1Value" style="white-space: pre-wrap;"></div>
                        </div>

                        <div class="mb-3">
                            <div class="small text-muted" id="extra2Label"></div>
                            <div id="extra2Value" style="white-space: pre-wrap;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="btnCotizarFooter">Cotizar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Cotizar -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <form id="quoteForm" method="post" action="<?= base_url('app/views/pages/cotizar_simulador.php') ?>"
                target="_blank">

                <div class="modal-header">
                    <div>
                        <h5 class="modal-title mb-0">Cotizar</h5>
                        <div class="small text-muted" id="quoteProductHeading"></div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="sku" id="quoteSKU" value="">
                    <input type="hidden" name="producto" id="quoteProducto" value="">
                    <input type="hidden" name="portafolio" id="quotePortafolio" value="">
                    <input type="hidden" name="categoria" id="quoteCategoria" value="">

                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="qNombre">Nombre</label>
                            <input class="form-control" type="text" id="qNombre" name="nombre" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="qEmpresa">Empresa</label>
                            <input class="form-control" type="text" id="qEmpresa" name="empresa">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="qCorreo">Correo</label>
                            <input class="form-control" type="email" id="qCorreo" name="correo" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="qTelefono">Teléfono</label>
                            <input class="form-control" type="tel" id="qTelefono" name="telefono" inputmode="numeric">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="qMensaje">Mensaje</label>
                            <textarea class="form-control" id="qMensaje" name="mensaje" rows="4"
                                placeholder="Cuéntanos cantidad, proyecto, ubicación, etc."></textarea>
                        </div>
                    </div>

                    <div class="alert alert-info mt-3 mb-0">
                        Envío simulado: este formulario no envía correo real; mostrará una vista tipo Gmail con la
                        información capturada.
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Enviar solicitud</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
/* Estilo discreto y profesional; no altera tu paleta institucional global */
.catalogo-sidebar {
    position: sticky;
    top: 1rem;
}

.catalogo-btn-family {
    border-radius: .75rem;
    padding: .9rem 1rem;
    font-weight: 600;
}

.catalogo-card {
    border-radius: 1rem;
    overflow: hidden;
}

.catalogo-card .card-img-top {
    height: 160px;
    object-fit: cover;
}
</style>

<script src="assets/js/catalogo_section.js"></script>