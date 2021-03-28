<?php 
include "vehicle.php";

class Bus extends Vehicle{
   
    public function capacity(){
        return 15;
    }
    public function fuelAmount(){
        return 25;
    }
    // public function applyBreak(){
    //     return "Break";
    // }
}

 $bus = new Bus();
 echo $bus->capacity();
 echo "<br>";
 echo $bus->fuelAmount();
//  echo "<br>";
//  echo $bus->applyBreak();
?>