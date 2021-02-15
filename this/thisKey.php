<?php
    class student{
        public $name;
        public $class;

        function setName($name){
            $this->name = $name;
        }
        function getName(){
            return $this->name;
        }
        function setClass($class){
            $this->class = $class;
        }
        function getClass(){
            return $this->class;
        }
        function printDetails(){
            echo $this->name.PHP_EOL.$this->class;
        }


    }

    $stu = new student();
    $stu->setName("ovi");
    $stu->setClass("12");
    $stu->printDetails();
?>