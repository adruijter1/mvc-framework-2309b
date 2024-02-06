<?php
/**
 * Maak de Core-Class
 */
Class Core 
{
    protected $currentController = 'Homepage';
    protected $currentMethod = 'index';

    /**
     * Bij het maken van een Core-Class object wordt altijd de
     * constructor aangeroepen
     */
    public function __construct()
    {
        // $url is een array 
        $url = $this->getURL();
        // var_dump($url);


        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            /**
             * We zetten de naam van de controller in de class-variabele $currentController
             */ 
            $this->currentController = ucwords($url[0]);

            /**
             * Haal de naam van de controller uit het array
             */
            unset($url[0]);
        }

        /**
         * Sluit het controller class bestand in
         */
        require_once '../app/controllers/' . $this->currentController . '.php';

        /**
         * Maak een nieuw object van de controller class
         */
        $this->currentController = new $this->currentController();

        /**
         * Als er een method naam na de controllernaam is gegeven,
         * kijk dan of de method bestaat in de controller class
         */
        if (isset($url[1])) {
            if ( method_exists($this->currentController, $url[1])) {
                /**
                 * Als de method bestaat dan in de class variabele $currentMethod zetten
                 */
                $this->currentMethod = $url[1];

                /**
                 * Haal de naam van de method uit het $url-array
                 */
                unset($url[1]);
            }
        }

        /**
         * Zet de overblijvende array-waarden in een ander array genaamd params
         */
        $this->params = $url ? array_values($url): [];

        /**
         * Roep de controllermethod met de meegegeven parameters aan
         */
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    /**
     * Deze method gaat de string achter de virtualhostnaam in 
     * een array zetten.
     */
    private function getURL()
    {
        if (isset($_GET['url'])) {
            //Haal de backslash vooraan de url ervanaf
            $url = rtrim($_GET['url'], '/');

            //Maak de url schoon (omdat hackers hiermee willen rommelen)
            $url = filter_var($url, FILTER_SANITIZE_URL);

            /**
             * De string die achter de vhost-naam stond wordt nu in stukjes gebroken
             * en in een array gezet. Het scheidingsteken daarbij is de forward-slash
             */
            $url = explode("/",$url);
            
            /**
             * Geef het array terug met daarin de aparte stringnamen die achter de vhost-naam
             * staan.
             */
            return $url;
        } else {
            /**
             * Wanneer er geen string achter de vhost-naam staat wordt de homepage geladen
             */
            return array('homepage', 'index');
        }
    }
}