<?php 
    abstract class Vehicle {
        public function display(){
            return "Welcome";
        }
        abstract  public function capacity();
        abstract  public function fuelAmount();
}
?>