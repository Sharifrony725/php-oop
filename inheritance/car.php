<?php 
    include "inheritance.php";
   class Car extends Vehicle {
    public function display(){
        echo "Welcome to Car";
    }
    public function fuelAmount()
    {
            return 20;
    }
   }
//    $car = new Car();
//    echo  $car->Brakes();
//    echo "<br>";
//    $car->display();
//    ?>