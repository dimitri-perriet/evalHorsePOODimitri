<?php

namespace App\Model;

class Testevent extends Event
{
    public function __construct(int $MaxCommitments, int $MaxWater)
    {
        parent::__construct($MaxCommitments, $MaxWater);
    }

}