<?php 
class Person{
    public static $name = 'Rony';
    public static function display(){
        echo "Welcome to Dhaka";
    } 
    public function getName(){
        return self:: $name;
    }
    // public function test(){
    //     echo "Hello World";
    // }
}
// $person = new Person();
// echo  $person->test();
// echo "<br   >";
Person::display();
echo "<br>";
echo Person::$name;
echo "<br>";
$obj = new Person();
echo 'From object 1: ' . $obj->getName();
$obj2 = new Person();
echo "<br>";
echo 'From Object 2 :' . $obj2->getName();
Person::$name = "Sharif";
echo "<br>";
echo 'From object 1: ' . $obj->getName();
echo "<br>";
echo 'From Object 2 :' . $obj2->getName();

?>