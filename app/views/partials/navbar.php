<?php

/**
 * Navbar principal sticky con colores institucionales.
 * Debe ir debajo de header.php.
 *
 * Enlaces por querystring (sin router MVC):
 *   index.php?page=home
 *   index.php?page=productos
 *   index.php?page=segmentos
 *   index.php?page=servicios
 *   index.php?page=alianzas
 *   index.php?page=quienes_somos
 *   index.php?page=contacto
 */
?>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top inovatie-navbar">
    <div class="container-fluid px-4">

        <!-- Marca / Logo textual (link a inicio) -->
        <a class="navbar-brand fw-bold text-uppercase" href="<?= base_url('') ?>?page=home">
            Inovatie
        </a>

        <!-- Botón responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nvb" aria-controls="nvb"
            aria-expanded="false" aria-label="Menú">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse justify-content-between" id="nvb">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('') ?>?page=productos">
                        <i class="bi bi-box-seam me-1"></i>Productos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('') ?>?page=segmentos">
                        <i class="bi bi-diagram-3 me-1"></i>Segmentos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('') ?>?page=servicios">
                        <i class="bi bi-gear-wide-connected me-1"></i>Servicios
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('') ?>?page=alianzas">
                        <i class="bi bi-person-lines-fill me-1"></i>Alianzas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('') ?>?page=quienes_somos">
                        <i class="bi bi-people me-1"></i>Quiénes somos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('') ?>?page=contacto">
                        <i class="bi bi-envelope me-1"></i>Contacto
                    </a>
                </li>

            </ul>

            <!-- Buscador (ícono) -->
            <form class="d-flex" role="search" onsubmit="return goSearch(event)">
                <input id="navSearch" class="form-control form-control-sm me-2 search-input" type="search"
                    placeholder="Buscar productos / segmentos / familias" aria-label="Buscar" autocomplete="off">
                <button class="btn btn-link p-0 search-btn" type="submit" title="Buscar">
                    <i class="bi bi-search fs-5"></i>
                </button>
            </form>

        </div>
    </div>
</nav>

<!-- Dropdown de autocompletado (oculto por defecto) -->
<div id="searchDropdown" class="autocomplete-list d-none"></div>