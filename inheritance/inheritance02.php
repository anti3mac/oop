<?php
    class uni{
        public $a;
        public $b;
        protected $c = "Nishu";

    }
    class te extends uni{
        function ab(){
            return $this->a;
        }
    }
    class stu extends te{
        function getC(){
            return $this->c;
        }
    }

    $stu = new stu();
    $te = new te();
    // echo $te->getC();
    echo $stu->getC();
?>