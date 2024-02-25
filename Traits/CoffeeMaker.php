<?php

abstract class CoffeeMaker
{
    public function makeCoffee():string
    {
       return static::class.'fait un café';
    }

}