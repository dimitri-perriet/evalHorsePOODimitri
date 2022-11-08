<?php

namespace App\Model\Event;

use App\Model\Equine\Equine;
use Exception;

abstract class Event
{
    private int $MaxCommitments;
    private int $MaxWater;
    private array $commitments = [];
    private int $tmpWater;

    public function __construct(int $MaxCommitments, int $MaxWater)
    {
        $this->setMaxCommitments($MaxCommitments)
            ->setMaxWater($MaxWater);
    }


    /**
     * Subscribe a horse to the event, check if the horse is already subscribed, if the event is full and if the event has enough water
     * @param Equine $horse
     * @return void
     * @throws Exception
     */
    public function subscribeHorse(Equine $horse): void
    {
        $this->setTmpWater(0);
        if (count($this->commitments) < $this->MaxCommitments) {
            foreach ($this->commitments as $commitment) {
                if ($commitment->getId() === $horse->getId()) {
                    throw new Exception("Le cheval " . $horse->getId() . " est déjà inscrit.");
                }
                $this->tmpWater += $commitment->getWater();
                if ($this->tmpWater + $horse->getWater() > $this->MaxWater) {
                    throw new Exception("Le cheval " . $horse->getId() . " ne peut pas être inscrit car l'évenement ne dispose pas de suffisament d'eau.");
                }
            }
            $this->commitments[] = $horse;
            echo  "Le cheval " . $horse->getId() . " portant le nom " . $horse->getNom() . " a été inscrit à l'évenement avec succès. \n";
        } else {
            throw new Exception("Le nombre maximum de chevaux admis à l'évenement est atteint.");
        }
    }

    /**
     * @return int
     */
    public function getMaxCommitments(): int
    {
        return $this->MaxCommitments;
    }

    /**
     * @param int $MaxCommitments
     * @return Event
     */
    public function setMaxCommitments(int $MaxCommitments): Event
    {
        $this->MaxCommitments = $MaxCommitments;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxWater(): int
    {
        return $this->MaxWater;
    }

    /**
     * @param int $MaxWater
     * @return Event
     */
    public function setMaxWater(int $MaxWater): Event
    {
        $this->MaxWater = $MaxWater;
        return $this;
    }

    /**
     * @return array
     */
    public function getCommitments(): array
    {
        return $this->commitments;
    }


    /**
     * @return int
     */
    public function getTmpWater(): int
    {
        return $this->tmpWater;
    }

    /**
     * @param int $tmpWater
     * @return Event
     */
    public function setTmpWater(int $tmpWater): Event
    {
        $this->tmpWater = $tmpWater;
        return $this;
    }

    public function __ToString(): string
    {
        $string = "L'évenement dispose de " . $this->MaxCommitments . " places et de " . $this->MaxWater . " litres d'eau. \n";
        if (count($this->commitments) > 0) {
            $string .= "Les chevaux inscrits sont : \n";
            foreach ($this->commitments as $commitment) {
                $string .= $commitment->getId() . " dit " . $commitment->getNom() . "\n";
            }
        } else {
            $string .= "Il n'y a aucun cheval inscrit à l'évenement. \n";
        }
        return $string;
    }


}