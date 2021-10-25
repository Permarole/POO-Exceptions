<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle
{



    public function __construct(string $color)

    {
        parent::__construct($color, 1);
    }

    final public function changeWhell(): void
    {
        return;
    }

    public function forward(): string

    {

        $this->currentSpeed = 15;


        return "Go !";
    }


    public function brake(): string

    {

        $sentence = "";

        while ($this->currentSpeed > 0) {

            $this->currentSpeed--;

            $sentence .= "Brake !!!";
        }

        $sentence .= "I'm stopped !";

        return $sentence;
    }

    public function getColor(): string

    {

        return $this->color;
    }

    public function getCurrentSpeed(): int

    {

        return $this->currentSpeed;
    }


    public function setCurrentSpeed(int $currentSpeed): void

    {

        if ($currentSpeed >= 0) {

            $this->currentSpeed = $currentSpeed;
        }
    }
}
