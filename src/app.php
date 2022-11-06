<?php

// Autoloading, pas besoin de require partout pour charger nos classes et chargement
// automatique de nos librairies

require_once('../vendor/autoload.php');

// Définitions de chemins utiles dans l'application
define('TEMPLATES_DIR', __DIR__ . '/../templates/');
define('SRC_DIR', __DIR__ . '/');
define('PUBLIC_DIR', __DIR__ . '/../public/');

use App\Controller\ExecWithMaxCommitments;
use App\Controller\ExecWithNoMoreWater;
use App\Controller\ExecWithoutError;
use App\Controller\ExecWithSameHorseEvent;


$test1= new ExecWithoutError();
$test1->execute();


//echo "Nous allons maintenant tester l'erreur de réinscription d'un cheval à un événement \n";
//$test2= new ExecWithSameHorseEvent();
//$test2->execute();

//echo "Nous allons maintenant tester l'erreur de dépassement du nombre de chevaux inscrits à un événement \n";
//$test3= new ExecWithMaxCommitments();
//$test3->execute();

echo "Nous allons maintenant tester l'erreur de dépassement du l'eau disponible à l'évenement \n";
$test4= new ExecWithNoMoreWater();
$test4->execute();








