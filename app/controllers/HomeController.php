<?php
class HomeController
{

    public function index()
    {
        // Variables disponibles en la vista
        $content = __DIR__ . '/../views/pages/home.php';

        // Cargar layout principal
        require __DIR__ . '/../views/layouts/main.php';
    }
}