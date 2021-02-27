<?php

class post1{
    public $name;
    public $has = true;

    function __construct($name)
    {
        $this->name = $name;
    }
    
}
function copyObj(post1 $obj, post1 $obj2){
    $obj->name = $obj2->name;
    $obj2->has = $obj->has;
}
$post = new post1("<br>ovi<br>");
$post1 = new post1("<br>ovi 2<br>");
echo $post->name;
echo $post1->name;
echo $post1->has;
copyObj($post,$post1);
echo $post->name;
echo $post->has;
?>