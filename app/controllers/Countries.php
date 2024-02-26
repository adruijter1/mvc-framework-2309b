<?php
    class Countries extends BaseController
    {
        /**
         * In de class variable $countryModel stoppen we 
         * het object van de country class
         */
        private $countryModel;

        /**
         * De constructor maakt een nieuw object van 
         * de country class
         */
        public function __construct()
        {
            /**
             * Bij het aanroepen van de model Country wordt er
             * een nieuw object gemaakt van deze class
             */
            $this->countryModel = $this->model('Country');
        }

        /**
         * Dit is de index method voor de Countries controller
         */
        public function index()
        {
            /**
             * We roepen de model method getCountries() aan
             */
            $this->countryModel->getCountries();

            /**
             * Maak een $data-array voor het meegeven van info in de view
             */
            $data = [
                'title' => 'Landen van de wereld'
            ];

            /**
             * We voegen de view toe met informatie uit het $data-array
             */
            $this->view('countries/index', $data);
        }
    }

?>