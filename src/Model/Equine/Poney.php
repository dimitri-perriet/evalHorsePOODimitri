<?php

namespace App\Model\Equine;

use App\Model\Capabilitie\Capabilitie;
use App\Model\Categorie\PoneyCategorie;
use App\Model\Color\Color;
use App\Model\Human\Rider;

class Poney extends Equine
{
    public function __construct(string $id, Color $color, int $water, Rider $rider, Capabilitie $capabilitie)
    {
        parent::__construct($id, $color, $water, $rider, new PoneyCategorie(), $capabilitie);
    }

}