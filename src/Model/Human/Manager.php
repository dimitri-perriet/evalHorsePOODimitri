<?php

namespace App\Model\Human;

use App\Model\Categorie\ManagerCategorie;

class Manager extends Human
{
    public function __construct(string $name, string $address, string $street, string $postcode, string $city)
    {
        parent::__construct($name, $address, $street, $postcode, $city, new ManagerCategorie());
    }

}