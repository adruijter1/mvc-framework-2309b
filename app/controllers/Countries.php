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
            $countries = $this->countryModel->getCountries();
            //var_dump($countries);

            $dataRows = '';
            foreach ($countries as $country) {
                $dataRows .= "<tr>
                                <td>$country->Name</td>
                                <td>$country->CapitalCity</td>
                                <td>$country->Continent</td>
                                <td>$country->Population</td>
                            </tr>";
            }

            /**
             * Maak een $data-array voor het meegeven van info in de view
             */
            $data = [
                'title' => 'Landen van de wereld',
                'dataRows' => $dataRows
            ];

            /**
             * We voegen de view toe met informatie uit het $data-array
             */
            $this->view('countries/index', $data);
        }

        /**
         * Toevoegen van een nieuw record aan de database
         */
        public function create()
        {
            /**
             * Hier plaatsen we alle informatie die in de view
             * moet worden getoond
             */
            $data = [
                'title' => 'Voeg een nieuw land toe'
            ];

            /**
             * Laat de view zien countries/create en geef het $data array mee
             */
            $this->view('countries/create', $data);
        }
    }

?>