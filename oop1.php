<?php
class calculation{
    public $a, $b, $c;
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
    function mul(){
        $this->c = $this->a * $this->b;
        return $this->c;
    }

}

    $r15 = new calculation();
    $r15->a = 10;
    $r15->b = 20;
    echo $r15->sum();

    $pulser = new calculation();
    $pulser->a = 50;
    $pulser->b = 30;
    echo "<br>";
    echo $pulser->sub();

    $honda = new calculation;
    $honda->a = 20;
    $honda->b = 30;
    echo "<br>";
    echo $honda->mul();
?>