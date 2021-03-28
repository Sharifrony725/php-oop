<?php 
class Student{
    public $id = 10;
    public $roll = 01;
} 
$sakib = new Student();
$rakib = new Student();
$sakib->id = 12;
    echo $sakib->id;
    echo "<br>";
    echo $rakib->id;
?>