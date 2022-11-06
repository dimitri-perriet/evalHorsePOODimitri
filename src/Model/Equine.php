<?php

namespace App\Model;

use Exception;

abstract class Equine
{
    private string $id;
    private string $color;
    private int $water;
    private Rider $rider;
    private Categorie $category;
    private string $nom;
    static private int $nbHorse = 1;


    public function __construct(string $nom, string $color, int $water, Rider $rider, Categorie $category)
    {
        $this->setNom($nom)
            ->setColor($color)
            ->setWater($water)
            ->setRider($rider)
            ->setCategory($category)
            ->setId($color,$nom);
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
    private function setId(string $color, string $nom): Equine
    {
        $this->id = "000-" . $nom[0] . "-" . $color[0] . "-" . $this->getnbHorse();
        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Equine
     */
    private function setColor(string $color): Equine
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
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Equine
     */
    private function setNom(string $nom): Equine
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return int
     */
    public static function getNbHorse(): int
    {
        return self::$nbHorse;
    }

    /**
     * @param int $nbHorse
     */
    private static function setNbHorse(int $nbHorse): void
    {
        self::$nbHorse = $nbHorse;
    }




    public function __toString(): string
    {
        return "Détail de l'Equin :\n
         ID : {$this->getId()}\n
         Nom : {$this->getNom()}\n
         Couleur : {$this->getColor()}\n
         Niveau d'eau : {$this->getWater()}\n
         Cavalier : {$this->getRider()->getName()}\n
         Catégorie : {$this->getCategory()->getNom()}\n";
    }


}