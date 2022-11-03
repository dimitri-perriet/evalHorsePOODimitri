<?php

// Autoloading, pas besoin de require partout pour charger nos classes et chargement
// automatique de nos librairies

require_once('../vendor/autoload.php');

// Définitions de chemins utiles dans l'application
define('TEMPLATES_DIR', __DIR__ . '/../templates/');
define('SRC_DIR', __DIR__ . '/');
define('PUBLIC_DIR', __DIR__ . '/../public/');

use App\Model\Manager;
use App\Model\Stable;

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
$cheval1 = new \App\Model\Horse("1", "blanc", 500, $rider);
$cheval2 = new \App\Model\Poney("2", "blanc", 200, $rider);
$cheval3 = new \App\Model\Sheitland("3", "blanc", 501, $rider);

echo $cheval1;
echo $cheval2;
echo $cheval3;

//Création d'un événement
$event1 = new \App\Model\Testevent(2, 1000);
echo $event1;

//Inscription d'un cheval à un événement
$event1->subscribeHorse($cheval1);
echo $event1;
$event1->subscribeHorse($cheval2);

//Tentative de réinscription d'un cheval à un événement : ERREUR
//$event1->subscribeHorse($cheval2);

//Tentative d'inscription d'un cheval à un événement alors que le nombre maximum de chevaux est atteint : ERREUR
//$event1->subscribeHorse($cheval3);

$event2 = new \App\Model\Testevent(2, 600);
//Tentative d'inscription alors qu'il n'y a pas assez d'eau : ERREUR
$event2->subscribeHorse($cheval1);
$event2->subscribeHorse($cheval2);




