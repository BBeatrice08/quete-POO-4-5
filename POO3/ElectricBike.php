<?php

require_once 'Vehicle.php';
require_once 'RechargeableInterface.php';
require_once 'ChargingStation.php';
require_once 'LightableInterface.php';

class ElectricBike extends Vehicle implements LightableInterface
{
    public function charge(int $percentage): int
    {
        return $percentage;

    }

    public function unLoad(int $percentage): int
    {
        return $percentage;

    }

    public function switchOn(): bool
    {
        if($this->currentSpeed > 10)
        {
            return true;

        } else {
            return false;
        }
    }

    public function switchOff() :bool
    {
        return false;
    }

}