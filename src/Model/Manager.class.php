<?php

namespace App\Model;

class Manager extends Human
{
    public function __construct(string $name, string $address, string $street, string $postcode, string $city, Categorie $categorie)
    {
        parent::__construct($name, $address, $street, $postcode, $city, new ManagerCategorie());
    }


}