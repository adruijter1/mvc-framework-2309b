<?php
 class BaseController
 {
    /**
     * Deze method gaat opzoeken of een view-pagina bestaat, en als dat zo is
     * dan gaat deze method de pagina insluiten en maakt tegelijkertijd
     * het $data-array met info beschikbaar voor deze pagina
     */
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            echo "View bestaat niet";
        }
    }
 }