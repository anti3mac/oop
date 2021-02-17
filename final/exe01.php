<?php
class WindowsDriver{
    final function winError(){
        echo "Win Error 404";
    } 
}

$win = new WindowsDriver();
$win->winError();
?>