<?php

// Autoloading, pas besoin de require partout pour charger nos classes et chargement
// automatique de nos librairies

require_once('../vendor/autoload.php');

// Définitions de chemins utiles dans l'application
define('TEMPLATES_DIR', __DIR__ . '/../templates/');
define('SRC_DIR', __DIR__ . '/');
define('PUBLIC_DIR', __DIR__ . '/../public/');

use App\Controller\ExecWithHorsePoneyGames;
use App\Controller\ExecWithMaxCommitments;
use App\Controller\ExecWithNoMoreWater;
use App\Controller\ExecWithoutError;
use App\Controller\ExecWithSameHorseEvent;


//Il est prévu dans ce test qu'aucun soucis d'initilisation ne se produise et qu'un évenement soit lancé
$test1= new ExecWithoutError();
$test1->execute();

//Il est prévu dans ce test qu'un soucis d'initilisation se produise en raison qu'un cheval fasse du PoneyGames
//$test2= new ExecWithHorsePoneyGames();
//$test2->execute();

//Il est prévu dans ce test qu'un soucis d'initilisation se produise en raison de la réinscription d'un cheval
//$test3= new ExecWithSameHorseEvent();
//$test3->execute();

//Il est prévu dans ce test qu'un soucis d'initilisation se produise en raison d'un autre de participation maximal atteint
//$test4= new ExecWithMaxCommitments();
//$test4->execute();

//Il est prévu dans ce test qu'un soucis d'initilisation se produise en raison d'une incapacité par l'évenement à fournir de l'eau
//$test5= new ExecWithNoMoreWater();
//$test5->execute();








