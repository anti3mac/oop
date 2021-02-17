<?php
class Teacher extends Univercity{
    public $teacherName;
    public $teacherAge;
    public $sub;
    

    function __construct($teacherName,$teacherAge,$sub, Univercity $univercity)
    {
        $this->teacherName = $teacherName;
        $this->teacherAge = $teacherAge;
        $this->sub = $sub;
        $this->uniName = $univercity->uniName;
        $this->uniAdd = $univercity->uniAdd;
        $this->subj = $univercity->subj;
    }
    function getName(){
        return $this->name;
    }

    function teacherDetails(){
        echo
        $this->teacherName."<br>".
        $this->teacherAge."<br>".
        $this->sub."<br>";
    }
}
?>