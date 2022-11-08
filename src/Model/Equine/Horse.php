<?php

namespace App\Model\Equine;

use App\Model\Capabilitie\Capabilitie;
use App\Model\Capabilitie\PoneyGames;
use App\Model\Categorie\HorseCategorie;
use App\Model\Color\Color;
use App\Model\Human\Rider;
use Exception;

class Horse extends Equine
{
    public function __construct(string $id, Color $color, int $water, Rider $rider, Capabilitie $capabilitie)
    {
        parent::__construct($id, $color, $water, $rider, new HorseCategorie() , $this->checkCapabilitie($capabilitie));
    }

    /**
     * Check if the capabilitie is not PoneyGames for a horse
     * @param Capabilitie $capabilitie
     * @return Capabilitie
     */
    protected function checkCapabilitie(Capabilitie $capabilitie): Capabilitie
    {
        if ($capabilitie instanceof PoneyGames) {
            throw new Exception("Un cheval ne peux pas faire du PoneyGames");

        } else {
            return $capabilitie;
        }
    }


}