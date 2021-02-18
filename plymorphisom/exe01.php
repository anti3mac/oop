<?php
interface Animal{
    public function makeSound();
}
class Dog1 implements Animal{
    function makeSound()
    {
        echo "Gr! <br>";
    }
}
class Cat1 implements Animal{
    function makeSound()
    {
        echo "Meaow ! <br>";
    }
}

$dog = new Dog1();
$dog->makeSound();
$cat = new Cat1();
$cat->makeSound();
?>