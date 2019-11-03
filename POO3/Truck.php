<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

     protected $StockageCapacity;
    protected $load = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockageCapacity)
    {

        parent::__construct($color, $nbSeats);
        $this->energy =$energy;
        $this->stockageCapacity = $stockageCapacity;

    }
    // Get the stockage capacity of the truck

    public function getStorageCapacity(): int
    {
        return $this->stockageCapacity;
    }

    public function setStorageCapacity(int $stockageCapacity): void
    {
        $this->stockageCapacity = $stockageCapacity;
    }

    // Get the energy of the truck

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    // Get the truck loading

    public function load(): string
    {
        $sentence = "";
        while($this->load < $this->stockageCapacity){
            $this->load += 10;
            $sentence .= "in filling !" . "<br>";
        }
        $sentence .= "full !";
        return $sentence;
    }
}


