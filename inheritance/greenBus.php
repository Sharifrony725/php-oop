<?php 
include "bus.php";
class GreenBus extends Bus{
    //  public function fuelAmount()
    //     {

    //      }
}
$greenBus = new GreenBus();
echo "<br>";
 echo "Welcome to Green Bus Class";
 $greenBus = new GreenBus();
 echo "<br>";
  echo $greenBus->fuelAmount();

?>