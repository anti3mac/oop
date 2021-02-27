<?php

class post1{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
}

$post = new post1("Fist post <br>");

echo $post->name;
//NOTE Without using clone tag
$postClone01 = $post;
echo "First Mod : ".$post->name ='First Mod '."<br> ";
echo $post->name;
echo $postClone01->name."<br><br>";

$post1 = new post1("Fist post <br>");
echo $post1->name;
//NOTE using clone tag
$postClone02 = clone $post1;
echo "First Mod : ".$post1->name ='First Mod '."<br> ";
echo $post1->name;
echo $postClone02->name;