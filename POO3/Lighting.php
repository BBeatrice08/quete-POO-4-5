<?php


class Lighting
{
    public function light(LightableInterface $vehicle)
    {
        if ($vehicle->switchOn()) {
            return 1;
        } else {
            return 0;
        }

    }

    public function noLight(LightableInterface $vehicle)
    {
        $vehicle->switchOff();
        return 0;
    }

}