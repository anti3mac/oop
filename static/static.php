<?php
//NOTE  when using static then use the propartice we have use self keyword , not this;
class Calculator{
    static public $name;
    static public $result;
    static function add($a,$b){
        self::$result = $a+$b;
    }
    public $id = 10;
    static public $AB = "TEST <br>";

}
class Student extends Calculator{

}
Calculator::$name = "ovi";
echo Student::$AB;
echo Calculator::$name."<br>";
Calculator::add(3,4);
echo Calculator::$result."<br>";
$cal = new Calculator();
echo $cal->id;
?>