<?php
abstract class Database{
    public $connection;
    public $connectionActive = false;
    abstract function setConnection($connection,$connectionActive);
    abstract function getConnection();
}
class DBconnection extends Database{
    function setConnection($connection, $connectionActive)
    {
        $this->connection = $connection;
        $this->connectionActive = $connectionActive;
    }
    function getConnection()
    {
        echo "Your Connection is : ".$this->connection."<br>Activition : ";
        if($this->connectionActive){
            echo "Active <br>";
        }else{
            echo "Offline <br>";
        }
    }
}
//FIXME  Watch full video of this example.
$dbCon = new DBconnection();
$dbCon->setConnection(1,true);
$dbCon->getConnection();
$dbCon->setConnection(2,false);
$dbCon->getConnection();
?>