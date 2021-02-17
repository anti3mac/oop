<?php
include('univercity.php');
include('teacher.php');

$uni = new Univercity("BUBT","Rupnagar","All");
$uni1 = new Univercity("BUBT111","Rupnagar111","All111");
$tech = new Teacher("ovi",22,"CSE",$uni);
$tech1 = new Teacher("ovi1",21,"CSE1",$uni1);

echo $tech->teacherDetails().$tech->ShowUni()."<br>";
echo $tech1->teacherDetails().$tech1->ShowUni()."<br>";
echo $tech->getName();
?>