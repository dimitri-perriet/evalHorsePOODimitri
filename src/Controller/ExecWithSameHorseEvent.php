<?php

namespace App\Controller;

use App\Model\Manager;
use App\Model\Stable;

class ExecWithSameHorseEvent
{

    public function execute()
    {
        // On instancie notre application

        //Création d'un manager
        $manager= new Manager("Dimitri","49 Avenue de la côte de Nacre","Cote","14000","Caen");
        echo $manager;

        //Création d'un stable
        $ecurie= new Stable("Ecurie de la Plaine", "Rue de la Plaine", "1", "75000", "Paris", $manager);
        echo $ecurie;

        //Création d'un cavalier
        $rider=new \App\Model\Rider("Julien","Rue de la Plaine","1","75000","Paris", new \App\Model\Saut());
        echo $rider;

        //Création de chevaux, poney et Shetiland
        $cheval1 = new \App\Model\Horse("001-d-B-1", "blanc", 500, $rider);
        $cheval2 = new \App\Model\Poney("002-d-B-2", "blanc", 200, $rider);
        $cheval3 = new \App\Model\Sheitland("003-d-B-3", "blanc", 501, $rider);

        echo $cheval1;
        echo $cheval2;
        echo $cheval3;

        //Création d'un événement
        $event1 = new \App\Model\Testevent(3, 1000);
        echo $event1;

        //Inscription d'un cheval à un événement
        $event1->subscribeHorse($cheval1);
        echo $event1;
        $event1->subscribeHorse($cheval2);
        echo $event1;

        //Tentative de réinscription d'un cheval à un événement : ERREUR
        $event1->subscribeHorse($cheval2);
    }

}