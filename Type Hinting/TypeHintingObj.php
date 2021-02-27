<?php
declare(strict_types = 1);
class Uni{
    private $name;
    function getName() : string{
        return $this->name;
    }
    function setName(string $name){
        $this->name = $name;
    }
}

class Stu extends Uni{
    private $studentId = "";
    private $studentName = "";

    function setDetails(array $students,Uni $uni) : void{
        $this->studentId = $students['id'];
        $this->studentName = $students['name'];
        $this->setName($uni->getName());
    }
}

$u = new Uni();
$u->setName("ovi <br>");
echo $u->getName();
$s = new Stu();
$student = ['id' => 1, 'name'=>'Taraq'];
$s->setDetails($student,$u);
var_dump($s);
?>