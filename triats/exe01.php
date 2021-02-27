<?php
trait File{
    public $fileSize;
    function Size($file){
        return filesize($file);
    }
}
class Postss{
    use File;

    function checkSize($fileName){
        return $this->Size($fileName);
    }
}
$post = new Postss();
echo $post->checkSize("file.txt");
?>