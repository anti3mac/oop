<?php
class Employee{
    public $id;
    public $name;
    public $workingHourPerDay = 8;
    public $hourlyRate = 100;
    public $totalLeaveTaken;
    public $workingDays;

//NOTE After adding constructor
    function __construct($id='',$name='',$totalLeaveTaken='',$workingDays='')
    {
        $this->id = $id;
        $this->name = $name;
        $this->totalLeaveTaken = $totalLeaveTaken;
        $this->workingDays = $workingDays;
    }
    public function getSalary($totalDay):int{
        $this->workingDays = $totalDay-$this->totalLeaveTaken;
        $salary = $this->workingDays*($this->workingHourPerDay*$this->hourlyRate);
        return $salary;
    }
}
//NOTE Before add constructor
$emp = new Employee();
$emp->id = 1;
$emp->name ="Taraq";
$emp->totalLeaveTaken = 10;
$emp->workingDays = 15; 
echo $emp->getSalary($emp->workingDays).PHP_EOL;

//NOTE After added constructor
$empCons = new Employee(2,"Ovi","10",15);
echo $empCons->getSalary($empCons->workingDays);
?>