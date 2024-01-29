<?php
/**
 * Maak de Core-Class
 */
Class Core 
{


    /**
     * Bij het maken van een Core-Class object wordt altijd de
     * constructor aangeroepen
     */
    public function __construct()
    {
        // $url is een array 
        $url = $this->getURL();
        echo $url;

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

            
        }
    }
}