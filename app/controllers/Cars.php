<?php

class Cars extends BaseController
{

    public function index()
    {
        /**
         * Data-array met info voor de view cars/index
         */
        $data = [
            'title' => "Cars pagina"
        ];

        /**
         * Hier wordt de view aangeroepen en wordt er $data meegegeven
         * met het $data-array
         */
        $this->view('cars/index', $data);
    }
}