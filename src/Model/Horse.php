<?php

namespace App\Model;

class Horse extends Equine
{
    public function __construct(string $id, string $color, int $water, Rider $rider)
    {
        parent::__construct($id, $color, $water, $rider, new HorseCategorie());
    }

}