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
                                <td>
                                    <a href='" . URLROOT . "/countries/update/$country->Id'>
                                        <i class='bi bi-pencil-square'></i></td>
                                    </a>
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
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {                
                $result = $this->countryModel->createCountry($_POST);

                echo '<div class="alert alert-success" role="alert">
                        Het land is toegevoegd aan de databasetabel
                      </div>';

                header("refresh:6; url=" . URLROOT . "/countries/index");           
            }


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

        public function update($countryId = NULL)
        {
            /**
             * Als er op de submit knop is gedrukt dan...
             */
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                /**
                 * Roep de model method updateCountry() aan
                 */
                $result = $this->countryModel->updateCountry($_POST);
                 
                /**
                 * Geef een melding dat de gegevens zijn gewijzigd
                 */
                echo '<div class="alert alert-success" role="alert">
                        De landgegevens zijn gewijzigd
                      </div>';                

                /**
                 * Stuur de gebruiker terug naar de index pagina
                 */
                header("Refresh:3; url=" . URLROOT . "/countries/index");
            
            }

            /**
             * Roep de model method getCountryById() aan
             */
            $result = $this->countryModel->getCountryById($countryId);

            /**
             * Maak een $data-array voor het meegeven van info in de view
             */
            $data = [
                'title' => 'Wijzig de landgegevens',
                'info' => $result
            ];

            /**
             * Laat de view zien countries/update en geef het $data array mee
             */
            $this->view('countries/update', $data);
        }
    }

?>