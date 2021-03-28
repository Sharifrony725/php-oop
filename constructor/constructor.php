<?php 
  /*
       class Foo{
        public function __construct()
        {
            echo "Hello Foo";
        }
        public function display(){
            echo "Welcome to Foo";
        }
    }
    $foo = new Foo();
    */
   class Math{
       public function __construct($first , $second){
           $this->a = $first;
           $this->b = $second;
       }
       public function sum(){
        return $this-> a+ $this-> b;
       }
       public function mul(){
        return $this-> a * $this-> b;
       }
       public function display(){
           echo "Welcome boss";
       }
   }
   $math  = new Math(10, 20);
   echo $math->sum();
   echo "<br>";
   $math1  = new Math(30, 20);
   echo $math->sum();   
   echo "<br>";
   echo $math->mul();   
?>