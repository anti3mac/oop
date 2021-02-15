<?php
class post{
    public $content;

    function __construct($content){
        echo "This is from Constructor <br>";
        $this->content = $content;
    }

    function displayCont(){
        echo $this->content." from displaycont() <br>";
        return $this;
    }
    function __destruct()
    {
        echo "Desctructor <br>";
    }

    
}

$post = new post("This is a content");
echo $post->displayCont()->content;
?>