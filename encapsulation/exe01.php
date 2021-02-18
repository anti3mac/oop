<?php

class Student{
    private $id;
    private $name;
    private $class;
    
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function getClass()
    {
        return $this->class;
    } 
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }
}

$student = new Student();
$student->setId(1);
$student->setName("ovi");
$student->setClass("Final year");

$student->getId().$student->getName().$student->getClass();
?>