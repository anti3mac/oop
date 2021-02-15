<?php
    class chainMethod{
        public $name='Taraq';
        //NOTE call this method first to change the value
        function cMethod1(){
            $this->name = "ovi";
            return $this;
        }
        //NOTE call this method to display the value.
        function cMethod2(){
            echo $this->name;
        }

    }

    $chain = new chainMethod();
    //NOTE this is chain sequence
    echo $chain->cMethod1()->cMethod2();
?>