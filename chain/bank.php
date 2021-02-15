<?php
    class Bank{
        public $accNo;
        public $name;
        public $balance;

        function __construct($accNo,$name){
            $this->accNo = $accNo;
            $this->name = $name;
        }

        function depositeAmount($amt){
            $this->balance = $this->balance+$amt;
            return $this;
        }

        function deductAmount($amt){
            if($this->balance < $amt){
                echo "insufficient Balance. You can't withdraw";
                return $this;
            }else{
                $this->balance = $this->balance - $amt;
                return $this;
            }
        }

        function checkAmount(){
            echo "your current balance :". $this->balance."<br>";
            return $this->balance;
        }

    }

    $bank = new Bank(1,"Taraq");
    $balance = $bank->balance = 500;
    echo "Account No: $bank->accNo<br>".
        "Name : $bank->name<br>".
        "Amount : ".$bank->depositeAmount(500)->balance."<br>".
        "Amount : ".$bank->deductAmount(200)->balance."<br>".
        "Amount : ".$bank->deductAmount(900)->balance."<br>".
        "Amount : ".$bank->checkAmount()." Thank you<br>";
?>