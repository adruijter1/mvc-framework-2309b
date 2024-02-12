<?php

class Instructeur
{

    public function __construct()
    {
    }

    public function index($firstname = NULL)
    {
        echo "Mijn naam is: " . $firstname;
    }
}