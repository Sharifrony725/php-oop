<?php 
class Math{
    public $a = 10;
    public $b = 20;
    public function sum(){
        $c = $this->a + $this->b;
        return $c;
    }
    public function sum_result(){
        $this->a = 15;
        echo 'Sum is ' . $this->sum();
    }
}

$math = new Math();
 echo $math->sum();
echo "<br>";
$math->b = 30;
$math->sum_result();
echo "<br>";
echo $math->a;
//instantof

?>