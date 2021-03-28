<?php 
class Constant{
    const PI = '3.1416';
    public function area( $r ){
        return self::PI * $r *$r;
    }
}
echo Constant::PI;
echo "<br>";
$conn = new Constant();
echo $conn->area(4);
?>