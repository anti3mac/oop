<?php
class Doctor{
    public $fee;
    function calculateFees($fee){
        echo "This is Doctor Fee  : $fee <br>";
    }
}
class Specialist extends Doctor{
    function calculateFees($fee){
        echo "This is Specialist Fee  : $fee <br>";
    }
}

$doc = new Doctor();
$doc->calculateFees(200);
$specialist = new Specialist();
$specialist->calculateFees(50);
?>