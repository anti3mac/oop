<?php
    class Bank{
        public $accNo;
        public $name;
        public $balance;

        function depositeAmount($amt):int{
            $this->balance = $this->balance+$amt;
            return $this->balance;
        }

        function deductAmount($amt){
            if($this->balance < $amt){
                echo "insufficient Balance. You can't withdraw";
            
            }else{
                $this->balance = $this->balance - $amt;
                return $this->balance;
            }
        }

        function checkAmount(){
            $this->balance = $this->balance;
            return $this->balance;
        }

    }

    $bank = new Bank();
    $accNo = $bank->accNo = 1;
    $name = $bank->name ="Taraq";
    $balance = $bank->balance = 500;
    echo "Account No: $accNo<br>".
        "Name : $name<br>".
        "Amount : ".$bank->depositeAmount(500)."<br>".
        "Amount : ".$bank->deductAmount(200)."<br>".
        "Amount : ".$bank->checkAmount()."<br>";
?>