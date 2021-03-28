<?php 
include "vehicle2.php";
//interface er object creat kora jabe na
class Car implements Vehicle{
    public function display(){
        return "Welcome";
    }
    public function capacity(){
        return 10;
    }
    public function fuelAmount(){
        return 12;;
    }

}

 $car = new Car();
 echo $car->capacity();
 echo "<br>";
 echo $car->fuelAmount();

?>