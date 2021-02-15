<?php
    class chainMethod{
        function cMethod1(){
            echo "Chain Method 01 <br>";
            return $this;
        }
        function cMethod2(){
            echo "Chain Method 02";
        }

    }

    $chain = new chainMethod();
    echo $chain->cMethod1()->cMethod2();
?>