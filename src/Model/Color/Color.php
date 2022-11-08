<?php

namespace App\Model\Color;

abstract class Color
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): Color
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

}