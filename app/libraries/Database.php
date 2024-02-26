<?php

class Database{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;
    private $dbHandler;
    private $errorMessage;
    private $statement;


    /**
     * Bij het maken van een nieuw Database object wordt er automatisch
     * de contructor aangeroepen en wordt er een verbinding met de database
     * gemaakt.
     */
    public function __construct()
    {
        /**
         * Maak een connectiestring voor het maken van een connectie 
         * met de database
         */
        $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;

        /**
         * Een aantal options die het te maken PDO object nodig heeft.
         */
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        );

        /**
         * We maken een verbinding met de database in een try-catch blok. Als het 
         * maken van de verbinding niet lukt dan wordt er een error-message afgegeven.
         */
        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
        } catch(PDOException $e) {
            $this->$errorMessage = $e->getMessage();
        }
    }

    /**
     * Deze method prepared de query voor het PDO object
     */
    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    /**
     * Het uitvoeren van de query
     */
    public function execute()
    {
        return $this->statement->execute();
    }

    /**
     * Het ophalen van de gegevens en teruggeven aan de model
     */
    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
}