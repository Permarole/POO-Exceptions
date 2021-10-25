<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    protected int $nbWheels = 4;

    protected int $currentEnergyLevel = 0;

    private string $energy;

    protected bool $started = false;

    private bool $hasParkBrake = true;

    public function __construct(int $nbSeats, string $color, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    final public function changeWhell(): void
    {
        return;
    }

    public function setParkBrake(): void
    {
        $this->hasParkBrake = !$this->hasParkBrake;
    }

    public function forward(): string
    {
        if ($this->started) {
            $this->currentSpeed = 50;
            return "Go";
        }
        return "Start the car prior driving";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped";
        return $sentence;
    }

    public function start(): string
    {
        if ($this->hasParkBrake) {
            throw new Exception('Park brake is on');
        }
        if ($this->started){
            throw new Exception('Already Vrouming !');
        }
        if ($this->currentEnergyLevel <= 0){
            throw new Exception('Fuel needed to start');
        }
        return 'Vroum';
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->currentEnergyLevel;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function addFuel(int $quantityOffuel): void
    {
        $this->currentEnergyLevel += $quantityOffuel;
    }
}
