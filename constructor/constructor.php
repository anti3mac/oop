<?php
    class cons{
        public $name;
        function __construct($name="")
        {
            echo "Hello".PHP_EOL.$this->name=$name."Thank you";
        }
    }
    $cons = new cons();
    echo $cons->name = PHP_EOL."OOOVI";
    
?>