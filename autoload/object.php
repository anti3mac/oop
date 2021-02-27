<?php
include "init.php";
$stu = new Student();
$stu->stu();
echo "<br>";
$tea = new Teachers();
$tea->tea();
echo "<br>";
$uni = new Universitys();
$uni->uni();
?>