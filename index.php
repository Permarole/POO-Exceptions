<?php

require_once __DIR__ . '/HighWay/MotorWay.php';
require_once __DIR__ . '/HighWay/PedestrianWay.php';
require_once __DIR__ . '/HighWay/ResidentialWay.php';

require_once __DIR__ . '/Vehicle/Bicycle.php';
require_once __DIR__ . '/Vehicle/Car.php';
require_once __DIR__ . '/Vehicle/Truck.php';

$car1 = new Car(4, "blue", "fuel");
$car2 = new Car(4, "red", "electic");

$bike = new Bicycle('red');


$truck = new Truck("green", 3, "fuel", 300, 50);


// echo $truck->forward();

// echo '<br> First truck is ' . $truck->isFull();

// echo '<br>' . $truck->brake();

$otherTruck = new Truck("red", 3, "electric", 300, 300);

// echo '<br>' . $otherTruck->forward();

// echo '<br> Second Truk load : ' . $otherTruck->getTruckLoad();

// echo '<br> Second Truck capacity : ' . $otherTruck->getStorageCapacity();

// echo '<br> So this truck is ' . $otherTruck->isFull();

// echo '<br>' . $otherTruck->brake();
$road = new MotorWay();
$pedestrianRoad = new PedestrianWay();
$residentialRoad = new Residentialway();


// $road->addVehicle($car1);
// var_dump($road->getCurrentVehicles());
// echo '<br><br>';
// $road->addVehicle($bike);
// var_dump($road->getCurrentVehicles());
// echo '<br><br>';
// $road->addVehicle($car2);
// var_dump($road->getCurrentVehicles());


$car1->addFuel(50);

try {
    echo $car1->start();
} catch (Exception $e) {
    echo 'Excpetion received : ' . $e . '<br><br>';
    $car1->setParkBrake();
} finally {
    echo 'Ma voiture roule comme un donut';
}
