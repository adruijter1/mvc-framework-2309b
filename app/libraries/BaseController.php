<?php
 class BaseController
 {
    /**
     * We maken een object van de model-class die is meegegeven via 
     * $model.
     */
    public function model($model)
    {
        require_once(APPROOT. '/models/' . $model . '.php');
        return new $model();
    }


    /**
     * Deze method gaat opzoeken of een view-pagina bestaat, en als dat zo is
     * dan gaat deze method de pagina insluiten en maakt tegelijkertijd
     * het $data-array met info beschikbaar voor deze pagina
     */
    public function view($view, $data = [])
    {
        /**
         * Check of de view-pagina bestaat met file_exists()
         */
        if (file_exists('../app/views/' . $view . '.php')) {
            /**
             * Als het bestand bestaat voeg het dan toe aan de pagina
             */
            require_once '../app/views/' . $view . '.php';
        } else {
            /**
             * Als de pagina niet bestaat geef dan deze boodschap
             */
            echo "View bestaat niet";
        }
    }
 }