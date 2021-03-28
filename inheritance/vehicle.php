<?php 
    class Vehicle{
        public $capacity = 15;
        public function fuelAmount( ){
            return 10;
        }
        public function capacity( ){
            return $this-> capacity;
        }
        public function Brakes( ){
            return "Breaked";
        }
        // public function message(){
        //     echo "Welcome to Vehicle";
        // }
    }

?>