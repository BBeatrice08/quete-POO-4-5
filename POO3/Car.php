<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        'gas oil'gi

    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    private $hasParkBrake = true;

    protected $start;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn(): bool
    {
        return 1;
    }

    public function switchOff(): bool
    {
        return 0;
    }

    public function getParkBrake()
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake()
    {
        $this->hasParkBrake = false;
    }

    public function start()
    {
        if ($this->hasParkBrake) {
            throw new Exception("park brake is on");
        }

    }
}


