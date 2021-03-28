<?php 
    include "many_class.php";
    $obj = new B();
    // $b = new B();
    if ($obj instanceof A) {
        $obj->welcome();
    }
    ?>