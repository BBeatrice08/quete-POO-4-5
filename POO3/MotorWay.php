<?php

require_once 'HighWay.php';
require_once  'Car.php';

class MotorWay extends HighWay
{
    protected $nbLane = 4;

    protected $maxSpeed = 130;

    public $currentVehicles = [];


    public function addVehicle($vehicle) :string
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;

        }
        return 'ok';
    }

}

