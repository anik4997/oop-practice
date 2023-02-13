<?php
class calculator{
    public $int1, $int2;
    function __construct($num1,$num2){
        $this->int1 = $num1;
        $this->int2 = $num2;
    }
    function sum(){
        $sum = $this->int1 + $this->int2;
        return $sum;
    }
    function sub(){
        $sum = $this->int1 - $this->int2;
        return $sum;
    }
    function mul(){
        $sum = $this->int1 * $this->int2;
        return $sum;
    }
    function div(){
        $sum = $this->int1 / $this->int2;
        return $sum;
    }
}
$obj = new calculator(20,10);
echo $obj->sum();
echo "<br>";
echo $obj->sub();
echo "<br>";
echo $obj->mul();
echo "<br>";
echo $obj->div();
?>