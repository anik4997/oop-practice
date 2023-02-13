<?php
class factorial{
    public $num;
    function __construct($num){
        $this->num = $num;
    }
    function calculation(){
        $mul=1;
        for($i=1; $i<=$this->num;$i++){
           $mul= $mul*$i;
        }
        return $mul;
    }
}
$obj = new factorial(5);
echo $obj->calculation();
?>