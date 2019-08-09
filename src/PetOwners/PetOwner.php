<?php

namespace App\PetOwners;

use App\Pets\PetInterface;

abstract class PetOwner
{
    private $pet;

    public function __construct(PetInterface $pet = null)
    {
        $this->pet = $pet;
    }

    public function commandToPetMakeNoise()
    {
        if ( ! ($this->pet instanceof PetInterface)) {
            echo "There is no pet. Add one and command it to make sound again\n";
            return;
        }

        $this->pet->makeNoise();
    }

    public function commandToPetSit()
    {
        if ( ! ($this->pet instanceof PetInterface)) {
            echo "There is no pet. Add one and command it to sit again\n";
            return;
        }

        $this->pet->sitCommand();
    }
    
    public function haveNewPet (PetInterface $pet)
    {
        $this->pet = $pet;
    }
}
