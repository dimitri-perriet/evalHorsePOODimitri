<?php

namespace App\Model\Equine;

use App\Model\Categorie\Categorie;
use App\Model\Color\Color;
use App\Model\Human\Rider;
use Exception;

abstract class Equine
{
    private string $id;
    private Color $color;
    private int $water;
    private Rider $rider;
    private Categorie $category;
    private string $name;
    static private int $nbHorse = 1;


    public function __construct(string $name, Color $color, int $water, Rider $rider, Categorie $category)
    {
        $this->setName($name)
            ->setColor($color)
            ->setWater($water)
            ->setRider($rider)
            ->setCategory($category)
            ->setId($color,$name);
        self::$nbHorse++;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Generate an id for the horse
     * @param string $color, string $nom
     * @return Equine
     */
    private function setId(Color $color, string $nom): Equine
    {
        $this->id = "000-" . $nom[0] . "-" . $color->getName()[0] . "-" . $this->getnbHorse();
        return $this;
    }

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return $this->color;
    }

    /**
     * @param Color $color
     * @return Equine
     */
    private function setColor(Color $color): Equine
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return int
     */
    public function getWater(): int
    {
        return $this->water;
    }

    /**
     * @param int $water
     * @return Equine
     */
    private function setWater(int $water): Equine
    {
        $this->water = $water;
        return $this;
    }

    /**
     * @return Rider
     */
    public function getRider(): Rider
    {
        return $this->rider;
    }

    /**
     * Set a Rider and check if the rider has already 5 horse
     * @param Rider $rider
     * @return Equine
     */
    private function setRider(Rider $rider): Equine
    {
        if ($rider->getNbEquine() < 5) {
            $this->rider = $rider;
            $rider->setnbEquine($rider->getNbEquine() + 1);
            return $this;
        } else {
            throw new Exception("Le cavalier a déjà 5 chevaux");
        }
    }

    /**
     * @return Categorie
     */
    public function getCategory(): Categorie
    {
        return $this->category;
    }

    /**
     * @param Categorie $category
     * @return Equine
     */
    private function setCategory(Categorie $category): Equine
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $nom
     * @return Equine
     */
    private function setName(string $name): Equine
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public static function getNbHorse(): int
    {
        return self::$nbHorse;
    }

    public function __toString(): string
    {
        return "Détail de l'Equin :\n
         ID : {$this->getId()}\n
         Nom : {$this->getName()}\n
         Couleur : {$this->getColor()->getName()}\n
         Niveau d'eau : {$this->getWater()}\n
         Cavalier : {$this->getRider()->getName()}\n
         Catégorie : {$this->getCategory()->getName()}\n";
    }


}