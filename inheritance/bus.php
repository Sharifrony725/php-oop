<?php 
    include "inheritance.php";
   class Bus extends Vehicle {
    public function display(){
        echo "Welcome to Bus";
        echo "<br>";
        echo "Capacity is : $this->capacity ";
    }
      final public function fuelAmount()
        {
        return 50;
         }
   }
   $bus = new Bus();
   echo  $bus->Brakes();
   echo "<br>";
   $bus->display();
   echo "<br>";
   echo  $bus->capacity();
 
   ?>