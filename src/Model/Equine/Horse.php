<?php

namespace App\Model\Equine;

use App\Model\Categorie\HorseCategorie;
use App\Model\Human\Rider;

class Horse extends Equine
{
    public function __construct(string $id, string $color, int $water, Rider $rider)
    {
        parent::__construct($id, $color, $water, $rider, new HorseCategorie());
    }

}