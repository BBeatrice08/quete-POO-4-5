<?php

require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';
require_once 'RechargeableInterface.php';
require_once 'ElectricBike.php';
require_once 'ChargingStation.php';
require_once 'LightableInterface.php';
require_once 'Speedometer.php';

/* ---------------- POO Static -------------- */

echo Speedometer::convertKmToMiles('10 kms');
echo "<br>";
echo Speedometer::milesToKm('2 miles');


/* ------------- Homer is driving ! (quête POO 5) ---------------- */

/*
$homerCar = new Car('pink',6,"fuel");
$margeCar = new Car('yellow', 4, 'gas oil');

$margeCar->setParkBrake();

var_dump($homerCar);
var_dump($margeCar);

try {
    echo $homerCar->start();
} catch (Exception $e){
    echo $e->getMessage() . "<br>";
    $homerCar->setParkBrake();
} finally {
    echo "Ma voiture roule comme un donut";
}
var_dump($homerCar);
*/

/* ------------ On the MotorWay ---------- */
/*
$MotorWay1 = new MotorWay();
$Car1 = new Car("blue", 4, "fuel");
$Car2 = new Car("red", 6, "electric");

var_dump($MotorWay1->getmaxSpeed());
var_dump($MotorWay1);


$MotorWay1->addVehicle($Car1); // ajoute une nouvelle voiture sur l'autoroute
$MotorWay1->addVehicle($Car2); // ajoute une 2nde nouvelle voiture sur l'autoroute

var_dump($MotorWay1->currentVehicles()); // Car1 et Car2 apparaissent dans la liste des véhicules autorisés sur l'autoroute

*/


/* ----------------- On the ResidentialWay -------------------- */
/*
$ResidentialWay1 = new ResidentialWay();
$Bike2 = new Bicycle("green", 8);
$Car2 = new Car("pink", 12, "water");

$ResidentialWay1->addVehicle($Bike2); // ajoute un nouveau vélo en ville
$ResidentialWay1->addVehicle($Car2); // ajoute une nouvelle voiture en ville

var_dump($ResidentialWay1); // Le vélo Bike2 et la voiture Car2 apparaissent dans la liste des véhicules autorisés en ville


*/


/* ------------------- On the pedestrian Way -------------------- */
/*
$PedestrianWay1 = new PedestrianWay();
$Bike1 = new Bicycle("yellow", 3);


$PedestrianWay1->addVehicle($Bike1); // ajoute un nouveau vélo sur la route piétonne
$PedestrianWay1->addVehicle($Car2); // ajoute une nouvelle voiture sur la route piétonne
*/

//$Skate1 = new Skateboard("grey", 1);
//$PedestrianWay1->addVehicle($Skate1); // ajoute un nouveau skateboard sur la route piétonne

//var_dump($PedestrianWay1->currentVehicles()); // seuls le vélo et le skate sont ajoutés au tableau, la voiture n'étant pas autorisée sur la route piétonne



/* -------------- Loading function --------------- */
/*
$ElectricBike1 = new ElectricBike("purple", 2);
$ElectricBike1->setCurrentSpeed(9);

$ElectricBike2 = new ElectricBike("pink", 6);
$ElectricBike2->setCurrentSpeed(27);
*/

//echo 'le niveau de charge est de ' . $ElectricBike1->charge(2) .'%.';
//echo $ElectricBike1->unLoad(10);




/* --------------------- Light on the vehicle ------------------------- */

/*
var_dump($ElectricBike1->switchOn());
var_dump($ElectricBike2->switchOn());
var_dump($Car2->switchOn());
var_dump($Skate1->switchOn()); //undefined
*/
