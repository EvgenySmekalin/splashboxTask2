<?php

use App\Pets\Cat;
use App\Pets\Dog;
use App\PetOwners\Person;

require "vendor/autoload.php";

$cat = new Cat('Cat1');
$dog = new Dog('Dog1');

$person = new Person();
$person->commandToPetSit();
$person->commandToPetMakeNoise();

$person->haveNewPet($cat);
$person->commandToPetSit();
$person->commandToPetMakeNoise();

$person->haveNewPet($dog);
$person->commandToPetSit();
$person->commandToPetMakeNoise();