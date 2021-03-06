<?php

namespace App;

abstract class Spice
{
    private string $name;

    public abstract function getWeight(): float;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
