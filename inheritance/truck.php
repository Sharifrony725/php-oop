<?php 
    include "inheritance.php";
   class Truck extends Vehicle {
    public function message(){
        parent::message();
       // echo "Welcome to Vehicle";
        echo "<br>";
        echo "Welcome to Truck";
    }
   }
   $truck = new Truck();
   $truck->message();