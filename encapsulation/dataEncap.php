<?php
class post1{
    private $post = "";

    public function setPost($post){
        return $this->post = $post;
    }
    public function getPost(){
        return $this->post;
    }
}

$post = new post1();
$post->setPost("ovi is a good boy");
echo $post->getPost();
?>