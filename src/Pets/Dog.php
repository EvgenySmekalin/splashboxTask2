<?php

namespace App\Pets;

class Dog extends Pet implements PetInterface 
{
    public function makeNoise()
    {
        echo $this->getName() . " says bark\n";
    }
}
