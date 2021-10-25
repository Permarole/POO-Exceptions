<?php

require_once __DIR__ . '/../Vehicle/Bicycle.php';
require_once __DIR__ . '/../Vehicle/Car.php';
require_once __DIR__ . '/../Vehicle/Truck.php';

abstract class HighWay
{

    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed, array $currentVehicles = [])
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
        $this->currentVehicles = $currentVehicles;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $vehicles): void
    {
        if (empty($this->currentVehicles)) {
            $this->currentVehicles = $vehicles;
        } else {
            foreach ($vehicles as $vehicle) {
                $this->currentVehicles[] = $vehicle;
            }
        }
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);
}
