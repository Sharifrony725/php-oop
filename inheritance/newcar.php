<?php 
include "car.php";
class NewCar extends Car{

}
$newCar = new NewCar();
 echo $newCar->fuelAmount(); 
?>