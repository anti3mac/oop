<?php
abstract class Abs{
    abstract function applyBr();

    function car (){
        echo "This is a car";
    }
}
class Car extends Abs{
    function applyBr()
    {
        echo "This is ApplyBR";
    }
}
class Car1 extends Abs{
    function applyBr()
    {
        echo "This is ApplyBR 001";
    }
}

$car = new Car();
$car1 = new Car1();
$car->car();
$car->applyBr();
$car1->applyBr();

//NOTE Cannot be decleared object for abstruct class
$ab = new Abs();
$ab->applyBr();
//NOTE Cannot be decleared object for abstruct class
?>