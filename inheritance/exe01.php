<?php
class Animal{
    protected $name;
    protected $isHunting = false;

    function doseHunting(){
        if($this->isHunting){
            echo "Yes, is hunting<br>";
        }else{
            echo "No, is not hunting <br>";
        }
    }  
}
class Dog extends Animal{
    function __construct($name,$isHunting)
    {
        $this->name = $name;
        $this->isHunting = $isHunting;
    }
    function makeSound(){
        echo "Brrrr ! Brrrr<br>";
    }
    function getName(){
        return $this->name;
    }
    
}
class Tiger extends Animal{
    function __construct($name,$isHunting)
    {
        $this->name = $name;
        $this->isHunting = $isHunting;
    }
    function makeSound(){
        echo "Grrrr! Grrr<br>";
    }
    function getName(){
        return $this->name;
    }
}
$dog = new Dog("Dog",false);
$dog->makeSound();
echo $dog->getName()." ";
$dog->doseHunting();
$tiger = new Tiger("Tiger",true);
$tiger->makeSound();
echo $tiger->getName()." ";
$tiger->doseHunting();




?>