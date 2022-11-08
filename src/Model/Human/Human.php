<?php

namespace App\Model\Human;

use App\Model\Categorie\Categorie;

abstract class Human
{
    private string $name;
    private string $address;
    private string $street;
    private string $postcode;
    private string $city;
    private Categorie $categorie;


    public function __construct(string $name, string $address, string $street, string $postcode, string $city, Categorie $categorie)
    {
        $this->setName($name)
            ->setAddress($address)
            ->setStreet($street)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setCategorie($categorie);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Human
     */
    private function setName(string $name): Human
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Human
     */
    private function setAddress(string $address): Human
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Human
     */
    private function setStreet(string $street): Human
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return Human
     */
    private function setPostcode(string $postcode): Human
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Human
     */
    private function setCity(string $city): Human
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return Categorie
     */
    public function getCategorie(): Categorie
    {
        return $this->categorie;
    }

    /**
     * @param Categorie $categorie
     * @return Human
     */
    private function setCategorie(Categorie $categorie): Human
    {
        $this->categorie = $categorie;
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
         Catégorie : {$this->getCategorie()->getName()}\n";
    }


}