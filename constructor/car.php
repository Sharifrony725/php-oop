<?php 
    include "vehicle.php";
   class Car extends Vehicle {
    public $color;
    public function __construct($capacity , $fuelAmount , $color)
    {
        parent:: __construct($capacity , $fuelAmount);
        $this->color = $color;
    }
   }
   $car = new Car( 20 ,25 , 'red'); 
   echo $car->capacity();
   echo "<br>";
   echo $car->fuelAmount();
   echo "<br>";
   echo 'color is:'  . $car->color;
//Scope Resolution Operator (::)
?>