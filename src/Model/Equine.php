<?php

namespace App\Model;

abstract class Equine
{
    private string $id;
    private string $color;
    private int $water;
    private Rider $rider;
    private Categorie $category;


    public function __construct(string $id, string $color, int $water, Rider $rider, Categorie $category)
    {
        $this->setId($id)
            ->setColor($color)
            ->setWater($water)
            ->setRider($rider)
            ->setCategory($category);
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Equine
     */
    public function setId(string $id): Equine
    {
        $this->id = $id;
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
    public function setColor(string $color): Equine
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
    public function setWater(int $water): Equine
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
    public function setRider(Rider $rider): Equine
    {
        $this->rider = $rider;
        return $this;
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
    public function setCategory(Categorie $category): Equine
    {
        $this->category = $category;
        return $this;
    }

    public function __toString(): string
    {
        return "Détail de l'Equin :\n
         ID : {$this->getId()}\n
         Couleur : {$this->getColor()}\n
         Niveau d'eau : {$this->getWater()}\n
         Cavalier : {$this->getRider()->getName()}\n
         Catégorie : {$this->getCategory()->getNom()}\n";
    }


}