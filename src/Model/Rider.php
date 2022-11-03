<?php

namespace App\Model;

class Rider extends Human
{
    private Capabilitie $GameType;
    public function __construct(string $name, string $address, string $street, string $postcode, string $city, Capabilitie $GameType)
    {
        parent::__construct($name, $address, $street, $postcode, $city, new RiderCategorie());
        $this->setGameType($GameType);
    }

    /**
     * @return Capabilitie
     */
    public function getGameType(): Capabilitie
    {
        return $this->GameType;
    }

    /**
     * @param Capabilitie $GameType
     * @return Rider
     */
    public function setGameType(Capabilitie $GameType): Rider
    {
        $this->GameType = $GameType;
        return $this;
    }

}