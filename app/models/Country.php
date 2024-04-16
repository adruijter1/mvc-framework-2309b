<?php

class Country
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCountries()
    {
        /**
         * Deze sql-query selecteert alle records uit de tabel countries
         * in de database
         */
        $sql = 'SELECT  Id
                       ,Name
                       ,CapitalCity
                       ,Continent
                       ,Population
                FROM   Country';

        /**
         * We gaan de sql-query gereed maken voor de PDO class om mee te werken
         */
        $this->db->query($sql); 

        /**
         * Met de method resultSet voeren we de query uit en stoppen we de objecten in 
         * een array $result
         */
        $result = $this->db->resultSet();

        /**
         * We geven $result terug aan de controller method
         */
        return $result;
    }

    public function createCountry($postDataArray)
    {
        /**
         * We maken een insert-query voor het invoegen van een nieuw record
         */
        $sql = "INSERT INTO Country (Name
                                    ,CapitalCity
                                    ,Continent
                                    ,Population)
                VALUES              (:name
                                    ,:capitalCity
                                    ,:continent
                                    ,:population)";

        $this->db->query($sql);

        /**
         * We binden de waarden aan de query
         */
        $this->db->bind(':name', $postDataArray['country'], PDO::PARAM_STR);
        $this->db->bind(':capitalCity', $postDataArray['capitalCity'], PDO::PARAM_STR);
        $this->db->bind(':continent', $postDataArray['continent'], PDO::PARAM_STR);
        $this->db->bind(':population', $postDataArray['population'], PDO::PARAM_INT);

        /**
         * We voeren de query uit
         */
        return $this->db->execute();
    }


}