<?php 
    interface phoneInterface{
        public function makeCall($number);
        public function sendMessage($number,$message);
    }

    class ios implements phoneInterface{
        public function makeCall($number)
        {
            echo "making Call To Number : $number <br>";
        }
        public function sendMessage($number, $message)
        {
            echo "Sending message to : $number & and message is : $message";
        }
    }

    $iphone = new ios();
    $iphone->makeCall(123);
    $iphone->sendMessage(1122,"thank you");
?>