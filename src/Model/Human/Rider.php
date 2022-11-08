<?php

namespace App\Model\Human;

use App\Model\Capabilitie\Capabilitie;
use App\Model\Categorie\RiderCategorie;

class Rider extends Human
{
    private Capabilitie $GameType;
    private int $nbEquine;
    public function __construct(string $name, string $address, string $street, string $postcode, string $city, Capabilitie $GameType)
    {
        parent::__construct($name, $address, $street, $postcode, $city, new RiderCategorie());
        $this->setGameType($GameType)
            ->setNbEquine(0);
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
    private function setGameType(Capabilitie $GameType): Rider
    {
        $this->GameType = $GameType;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbEquine(): int
    {
        return $this->nbEquine;
    }

    /**
     * @param int $nbEquine
     * @return Rider
     */
    public function setNbEquine(int $nbEquine): Rider
    {
        $this->nbEquine = $nbEquine;
        return $this;
    }



    public function __toString(): string
    {
        return "Détail de l'Humain :\n
         Nom : {$this->getName()}\n
         Adresse : {$this->getAddress()}\n
         Rue : {$this->getStreet()}\n
         Code postal : {$this->getPostcode()}\n
         Ville : {$this->getCity()}\n
         Catégorie : {$this->getCategorie()}\n
         Type de jeu : {$this->getGameType()->getNom()}\n";
    }

}