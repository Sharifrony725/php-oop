<?php 
    class Vehicle{
        public $capacity;
        public $fuelAmount;
        public function __construct($capacity ,$fuelAmount)
        {
             $this->capacity = $capacity;
             $this->fuelAmount = $fuelAmount;
        }
        public function fuelAmount( ){
          return  $this->fuelAmount;
        }
        public function capacity( ){
            return $this-> capacity;
        }
        public function Brakes( ){
            return "Breaked";
        }
   
    }