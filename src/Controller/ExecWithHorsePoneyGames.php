<?php

namespace App\Controller;

use App\Model\Capabilitie\Cross;
use App\Model\Capabilitie\Dressage;
use App\Model\Capabilitie\PoneyGames;
use App\Model\Human\Manager;
use App\Model\Stable;

class ExecWithHorsePoneyGames
{
    /**
     * Execute the program
     */
    public function execute() : void
    {
        // On instancie notre application

        //Création d'un manager
        $manager= new Manager("Cémoi","49 Avenue de la côte de Nacre","Cote","14000","Caen");
        echo $manager;

        //Création d'un stable
        $ecurie= new Stable("Ecurie de la Plaine", "Rue de la Plaine", "1", "75000", "Paris", $manager);
        echo $ecurie;

        //Création d'un cavalier
        $rider=new \App\Model\Human\Rider("Julien","Rue de la Plaine","1","75000","Paris", new \App\Model\Capabilitie\Saut());
        echo $rider;

        //Création des couleurs
        $Alzan = new \App\Model\Color\Alzan();
        $Bai = new \App\Model\Color\Bai();
        $Grey = new \App\Model\Color\Grey();
        $Pie = new \App\Model\Color\Pie();
        $White = new \App\Model\Color\White();


        //Création de chevaux, poney et Shetiland
        $cheval1 = new \App\Model\Equine\Horse("Lesla", $White, 500, $rider, new PoneyGames());
        $cheval2 = new \App\Model\Equine\Poney("Tesla", $Grey, 200, $rider, new PoneyGames());
        $cheval3 = new \App\Model\Equine\Sheitland("Simbo", $Pie, 501, $rider, new Dressage());

        echo $cheval1;
        echo $cheval2;
        echo $cheval3;

        //Création d'un événement
        $event1 = new \App\Model\Event\Testevent(2, 1000);
        echo $event1;

        //Inscription d'un cheval à un événement
        $event1->subscribeHorse($cheval1);
        echo $event1;
        $event1->subscribeHorse($cheval2);
        echo $event1;
    }

}