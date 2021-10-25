<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(4, 130);
    }

    public function addVehicle(Vehicle $car): void
    {
        if (get_parent_class($car) === 'Car' || $car instanceof Car)
            $this->setCurrentVehicles([$car]);
    }
}
