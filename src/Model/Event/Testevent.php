<?php

namespace App\Model\Event;

class Testevent extends Event
{
    public function __construct(int $MaxCommitments, int $MaxWater)
    {
        parent::__construct($MaxCommitments, $MaxWater);
    }

}