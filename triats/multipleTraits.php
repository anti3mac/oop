<?php 
    trait Student{
        public $name;
        function name($name): string{
            return $this->name =  "Welcome : ".$name."<br>";
        }
    }
    trait Teacher{
        public $Tname;
        function Tname($Tname): string{
            return $this->Tname =  "<br>Teacher Name : ".$Tname."<br>";
        }
    }
    class Uni{
        use Student;
        use Teacher;
        public $roll;
        function roll($roll):int{
            return $this->roll = $roll;
        }
    }

    $uni = new Uni();
    $uni->name("ovi");
    $uni->roll(10);
    $uni->Tname("Mostofa");
    echo $uni->name;
    echo "Roll : ".$uni->roll;
    echo $uni->Tname;
?>