<?php
    class File{
        public $fileHandler;
        public $fileName;
        public $fileSize;
        public $content;
        public $fileFound;

        function __construct($filename)
        {
            $this->fileHandler = null;
            $this->fileFound = false;

            //IF the file exist
            if(file_exists($filename)){
                if(is_file($filename)){
                    $this->fileFound = true;
                }
            }

            if($this->fileFound){
                $this->fileHandler = fopen($filename,'r');
                $this->filesize = filesize($filename);

            }
        }

        function getContent(){
            if($this->fileFound){
                $content = fread($this->fileHandler,$this->filesize);
                return $content;
            }else{
                echo "File Dose Note Exist";
            }
        }

        function __destruct()
        {
            if($this->fileFound){
                fclose($this->fileHandler);
                echo PHP_EOL."File Closed";
            }
        }
    }
    $file = new File('text.txt');
    echo $file->getContent();
?>