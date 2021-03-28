<?php 
class Student {
    public $id = 10;
    public $name = "Rony";
}

$student = new Student();
echo $student->name;
$student->name = "Sharif";
echo "<br>";
echo $student->name;
?>