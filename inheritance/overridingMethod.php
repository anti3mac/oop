<?php 
class univ{
    function hello(){
        echo "this is university";
    }
}
class tea extends univ{
    function hello(){
        echo "this is teacher";
        parent::hello();
    }
}

$teacher = new tea();
echo $teacher->hello();
?>