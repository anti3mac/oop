<?php 
class Course{
    public $cid;
    public $lid;
    function __construct($cid,$lid)
    {
        $this->cid = $cid;
        $this->lid = new Lesson($lid);
    }
}
class Lesson extends Course{
    public $lid;
    function __construct($lid)
    {
        $this->lid = $lid;
    }
    function showCode(){
        echo "show";
    }
}

$course = new Course(1,'1');
echo $course->cid;
echo $course->lid->lid;
echo $course->lid->showCode();

?>