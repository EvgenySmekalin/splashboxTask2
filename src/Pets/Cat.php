<?php

namespace App\Pets;

class Cat extends Pet implements PetInterface
{
    public function makeNoise()
    {
        echo $this->getName() . " says meow\n";
    }
}
