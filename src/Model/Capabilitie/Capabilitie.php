<?php

namespace App\Model\Capabilitie;

abstract class Capabilitie
{
    // Propriétés
    protected string $name;

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    protected function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

}