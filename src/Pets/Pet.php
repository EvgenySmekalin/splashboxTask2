<?php

namespace App\Pets;

abstract class Pet
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sitCommand()
    {
        echo "{$this->name} is sitting now\n";
    }

}