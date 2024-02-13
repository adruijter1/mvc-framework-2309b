<?php

class Instructeur extends BaseController
{
    /**
     * De constructor wordt uitgevoerd wanneer er een nieuw object 
     * van de class wordt gemaakt.
     */
    public function __construct()
    {
    }

    public function index($firstname = NULL)
    {
        /**
         * Met het $data-array kun je informatie doorgeven via de controller
         * aan de view.
         */
        $data = [
            'title' => 'Alle Instructeurs',
            'name' => 'Mijn naam is ' . $firstname
        ];

        /**
         * Door de method view aan te roepen uit de BaseController-class
         * kun je het $data-array doorsturen naar de view
         */
        $this->view('instructeur/index', $data);
    }


}