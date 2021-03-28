<?php 
class PrivateClass{
    private $result =200;
    public function getResult(){
        return $this->result;
    }
}
$obj = new PrivateClass();
// echo $obj->result;
echo $obj->getResult();

?>