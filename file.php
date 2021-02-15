<?php
    class Files{
        function displayContent($file):string{
            if(!file_exists($file)){
                $content =  "$file no file exist";
                
            }else{
                $content =  file_get_contents($file);

            }
            return $content;
        }
        function getContent($file){
            
        }
    }

    $file = new Files();
    echo $file->displayContent("text1.txt");
?>