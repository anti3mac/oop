<?php 
    trait Student{
        public $name;
        function name($name): string{
            return $this->name =  "Welcome : ".$name."<br>";
        }
    }
    class Uni{
        use Student;
        public $roll;
        function roll($roll):int{
            return $this->roll = $roll;
        }
    }

    $uni = new Uni();
    $uni->name("ovi");
    $uni->roll(10);
    echo $uni->name;
    echo "Roll : ".$uni->roll;
?>