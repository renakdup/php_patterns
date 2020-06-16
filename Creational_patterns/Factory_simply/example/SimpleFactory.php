<?php

class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}

class Bicycle
{
    public function driveTo(string $destination)
    {
        // TODO:: something
    }
}

$factory = new SimpleFactory();
$bicycle = $factory->createBicycle();
$bicycle->driveTo('Paris');
