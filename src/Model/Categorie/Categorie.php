<?php

namespace App\Model\Categorie;

abstract class Categorie
{

    // Propriétés
    protected string $nom;

    public function __construct(string $nom)
    {
        $this->setNom($nom);
    }

    /**
     * Get the value of nom
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    protected function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}