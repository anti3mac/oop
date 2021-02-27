<?php
declare(strict_types=1);
class Posts{
    private $Post = "";
    
    function savePost($Post) : bool{
        $flag = false;
        $this->setPost($Post);
        if($this->getPost() == null){
            $flag = false;
        }else{
            $flag = true;
        }
        return $flag;
    }

    function fetchPost(int $id) : array{
        $posts = [];
        echo "Retriving Data <br>";
        $posts = [1,"this is $id",2,"This is 2"];
        return $posts;
    } 

    public function getPost() : string
    {
        return $this->Post;
    }
    public function setPost(string $Post) : void
    {
        $this->Post = $Post;
    }
}
$post = new Posts();
if($post->savePost("Hy")){
    echo "Awesome <br>";
}else{
    echo "No data";
}
var_dump($post->fetchPost(10));
?>