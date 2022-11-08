<?php

namespace App\Model;

use App\Model\Human\Manager;

class Stable
{
    private string $name;
    private string $address;
    private string $street;
    private string $postcode;
    private string $city;
    private Manager $manager;

    public function __construct(string $name, string $address, string $street, string $postcode, string $city, Manager $manager)
    {
        $this->setName($name)
            ->setAddress($address)
            ->setStreet($street)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setManager($manager);
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
     */
    private function setName(string $name): self
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
     */
    private function setAddress(string $address): self
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
     */
    private function setStreet(string $street): self
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
     */
    private function setPostcode(string $postcode): self
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
     */
    private function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return Manager
     */
    public function getManager(): Manager
    {
        return $this->manager;
    }

    /**
     * @param Manager $manager
     */
    private function setManager(Manager $manager): self
    {
        $this->manager = $manager;
        return $this;
    }

    public function __toString(): string
    {
        return "Détail de l'écurie :\n
        Nom : {$this->getName()}\n
        Adresse : {$this->getAddress()}\n
        Rue : {$this->getStreet()}\n
        Code postal : {$this->getPostcode()}\n
        Ville : {$this->getCity()}\n
        Manager : {$this->getManager()->getName()}\n";
    }
}