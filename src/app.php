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


//Il est prévu dans ce test qu'aucun soucis d'initilisation ne se produise et qu'un évenement soit lancé
//$test1= new ExecWithoutError();
//$test1->execute();


//Il est prévu dans ce test qu'un soucis d'initilisation se produise en raison de la réinscription d'un cheval
//$test2= new ExecWithSameHorseEvent();
//$test2->execute();

//Il est prévu dans ce test qu'un soucis d'initilisation se produise en raison d'un autre de participation maximal atteint
//$test3= new ExecWithMaxCommitments();
//$test3->execute();


//Il est prévu dans ce test qu'un soucis d'initilisation se produise en raison d'une incapacité par l'évenement à fournir de l'eau
$test4= new ExecWithNoMoreWater();
$test4->execute();








