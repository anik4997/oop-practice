<?php
class employee{
    public $name, $salary;
    function __construct($n, $s){
        $this->name = $n;
        $this->salary = $s;
    }
    function info(){
        echo $this->name. "=" .$this->salary;
    }
}
$person = new employee("Oli Ahammed", 30000);
$person->info();

?>