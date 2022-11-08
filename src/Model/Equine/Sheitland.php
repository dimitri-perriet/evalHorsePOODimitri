<?php

namespace App\Model\Equine;

use App\Model\Categorie\SheitlandCategorie;
use App\Model\Human\Rider;

class Sheitland extends Equine
{
    public function __construct(string $id, string $color, int $water, Rider $rider)
    {
        parent::__construct($id, $color, $water, $rider, new SheitlandCategorie());
    }

}