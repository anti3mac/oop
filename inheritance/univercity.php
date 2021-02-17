<?php
class Univercity{
    public $uniName;
    public $uniAdd;
    public $subj;
    protected $name = "BBC";

    function __construct($uniName,$uniAdd,$subj)
    {
        $this->uniName = $uniName;
        $this->uniAdd = $uniAdd;
        $this->subj = $subj;
    }
    function ShowUni(){
        echo $this->uniName."<br>".
        $this->uniAdd."<br>".
        $this->subj;
    }
    
}
?>