<?php

class Instructeur
{

    public function __construct()
    {
    }

    public function index($firstname)
    {
        echo "Mijn naam is: " . $firstname;
    }
}