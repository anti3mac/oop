<?php
class Helper{
    static public $content;
    static function help($fileName){
        if(file_exists($fileName)){
            return true;
        }else{
            return false;
        }
        $content = file_get_contents($fileName);
        if(!empty($content)){
            self::$content = $content;
        }else{
            self::$content = "Nothing";
        }
    }
}
//NOTE  there is no text.txt file; So it should print File not Found;
if(Helper::help("text.txt")){
    echo "File Founded<br>";
    echo Helper::$content." Here";
}else{
    echo "File Not Found";
    echo Helper::$content;
}


?>