<?php 
include "vehicle2.php";
//interface er object creat kora jabe na
class Bus implements Vehicle{
    public function display()
    {
        return "Welcome";
    } 

    public function capacity(){
        return 15;
    }
    public function fuelAmount(){
        return 25;
    }
    public function applyBreak(){
        return "Break";
    }
}

 $bus = new Bus();
 echo $bus->capacity();
 echo "<br>";
 echo $bus->fuelAmount();
 echo "<br>";
 echo $bus->applyBreak();
?>