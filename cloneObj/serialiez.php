<?php

class post1{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
}

$post = new post1("ovii");
$serialized = serialize($post);
echo $post->name;
file_put_contents("s.txt",$serialized);

$post1 = new post1("ovii123123123");
$serialized1 = serialize($post1);
echo $post1->name;
file_put_contents("s.txt",$serialized1);

$unSerialized = file_get_contents("s.txt");
echo "<br>".$unSerialized."<br>";
unserialize($unSerialized);
echo $unSerialized."<br>";
?>