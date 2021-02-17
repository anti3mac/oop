<?php 
    class Bank{
        private $balance;
        private $name;

        function __construct($name,$balance)
        {
            $this->name = $name;
            $this->balance = $balance;
        }

        public function getName(){
            return $this->name;
        }
        public function getBalance(){
            return $this->balance;
        }
        public function depositAmount($amt){
            $this->balance += $amt;
            return $this;
        }
        public function deductAmount($amt){
            $this->balance-=$amt;
            return $this;
        }

        public function showBalance(){
            return $this->balance;
        }
    }

    $bank = new Bank("Taraq",500);
    echo $bank->getName().", Your balance is was :  ".$bank->getBalance()."<br>Deposite : ".$bank->depositAmount(300)->showBalance()
    ."<br> Deduct : ".$bank->deductAmount(100)->showBalance()
    ;
?>