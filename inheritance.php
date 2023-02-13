<?php
    class teacher{
        public $name, $salary;
        function __construct($n,$s){
            $this->name = $n;
            $this->salary = $s;
        }
        function info(){
            echo "<h3>Teacher's info:</h3>";
            echo "Name:".$this->name."<br>";
            echo "Salary:".$this->salary. "<br>";
        }
    }
    class headmaster extends teacher{
        public $extra=10000;
        function info(){
            $this->extra += $this->salary;
            echo "<h3>Headmaster's info:</h3>";
            echo "Name:".$this->name."<br>";
            echo "Salary:".$this->extra. "<br>";
        }
    }
$t = new teacher("Oli Ahammed", 20000);
$t->info();
$h = new headmaster("Nurul islam", 25000);
$h->info();

?>