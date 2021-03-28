<?php 
include "foo.php";
include "bar.php";
include "parentClass.php";
    class MyClass  extends ParentClass
    {
        use Foo , Bar;
        public function hello(){
            $this->display();
        }
    }
    $obj = new MyClass();
    $obj->display();
    echo "<br>";
    $obj->message();
    echo "<br>";
    $obj->oK();
    echo "<br>";
    $obj->hello();
?>