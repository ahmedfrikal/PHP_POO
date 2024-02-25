<?php

class Espresso extends CoffeeMaker
{
    public function makeEspresso():string
    {
        return static::class .'fait un Espresso';
    }

}