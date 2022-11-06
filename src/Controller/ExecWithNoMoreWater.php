<?php

namespace App\Controller;

use App\Model\Manager;
use App\Model\Stable;

class ExecWithNoMoreWater
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
        $rider=new \App\Model\Rider("Julien","Rue de la Plaine","1","75000","Paris", new \App\Model\Saut());
        echo $rider;

        //Création de chevaux, poney et Shetiland
        $cheval1 = new \App\Model\Horse("Lesla", "White", 500, $rider);
        $cheval2 = new \App\Model\Poney("Tesla", "Grey", 100, $rider);
        $cheval3 = new \App\Model\Sheitland("Simbo", "Pie", 501, $rider);

        echo $cheval1;
        echo $cheval2;
        echo $cheval3;

        $event2 = new \App\Model\Testevent(2, 550);
        //Tentative d'inscription alors qu'il n'y a pas assez d'eau : ERREUR
        $event2->subscribeHorse($cheval1);
        $event2->subscribeHorse($cheval2);
        echo $event2;
    }

}