<?php

require_once 'HighWay.php';

final class Residentialway extends HighWay
{
    public function __construct()
    {
        parent::__construct(2, 50);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        if (get_parent_class($vehicle) === 'Vehicle')
            $this->setCurrentVehicles([$vehicle]);
    }
}
