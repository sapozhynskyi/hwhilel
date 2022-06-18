<?php

interface Car {
    public function getCar($carType);
    public function getPrice($carType);
}

class Economy implements Car {

    public function getCar($carType)
    {
        echo "car - $carType\n";
    }

    public function getPrice($carType)
    {
        echo "price $carType - 100\n";
    }
}
class Standart implements Car {

    public function getCar($carType)
    {
        echo "car - $carType\n";
    }

    public function getPrice($carType)
    {
        echo "price $carType - 200\n";
    }
}
class Luxury implements Car {

    public function getCar($carType)
    {
        echo "car - $carType\n";
    }

    public function getPrice($carType)
    {
        echo "price $carType - 300\n";
    }
}

abstract class Taxi {
    abstract public function getTaxi() : Car;
    public function trip($typeCar) : void{
        $car = $this->getTaxi();
        $car->getCar($typeCar);
        $car->getPrice($typeCar);
    }
}

class EconomyTaxi extends Taxi {

    public function getTaxi(): Car
    {
        return new Economy();
    }
}
class StandartTaxi extends Taxi {

    public function getTaxi(): Car
    {
        return new Standart();
    }
}
class LuxuryTaxi extends Taxi {

    public function getTaxi(): Car
    {
        return new Luxury();
    }
}

function clientCode (Taxi $taxi, string $typeCar){
    $taxi->trip($typeCar);
}

clientCode(new EconomyTaxi(), 'Economy');
clientCode(new LuxuryTaxi(), 'Luxury');