<?php
class a{
    public $aid;
    function __construct($aid)
    {
        $this->aid == $aid;
    }
}
class b extends a{
    public $bid;
    function __construct($bid , a $a)
    {
        $this->bid == $bid;
        $this->aid = $a->aid;
        echo $this->bid.$this->aid;
    }
}
class c extends b{
    public $cid;
    function __construct($cid,b $b)
    {
        $this->cid == $cid;
        $this->bid = $b->bid;
    }
}
$a = new a(10);
$b = new b(11,$a);
?>