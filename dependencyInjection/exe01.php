<?php
class Univ{
    public $name;
    public $date;

    function __construct($name,$date)
    {
        $this->name = $name;
        $this->date = $date;
    }
    function showAll(){
        echo $this->name."<br>".$this->date;
    }
}
class Stud extends Univ{
    public $stuName;
    public $stuRoll;

    function __construct($stuName,$stuRoll,Univ $uni)
    {
        $this->stuName = $stuName;
        $this->stuRoll = $stuRoll;
        $this->name = $uni->name;
        $this->date = $uni->date;
    }
    function showAll1(){
        echo 
        "Stud : ".$this->stuName."<br> Stud : ".$this->stuRoll."<br> Stud : ".
        $this->name."<br> Stud : ".
        $this->date;
    }
}
$uni = new Univ("BUBT",2017);
$stu = new Stud("ovi",1,$uni);
echo $stu->showAll1()."<br>";
echo $stu->name."<br>";
echo $stu->stuName."<br>";
