<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    private $storageCapacity;

    private $truckLoad = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity, int $truckLoad)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->storageCapacity = $storageCapacity;
        $this->truckLoad = $truckLoad;
    }

    public function getTruckLoad(): int
    {
        return $this->truckLoad;
    }

    public function isFull(): string
    {
        return $this->storageCapacity === $this->truckLoad ? "full" : "in filling";
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    final public function changeWhell(): void
    {
        return;
    }
}
