<?php
    class bankacc
    {
        private $name;
        private $accno;
        private $balance;
        private $pin;

        public function __construct($name, $accno, $balance, $pin)
        {
            $this->name = $name;
            $this-> accno = $accno;
            $this->balance = $balance;
            $this -> pin = $pin;
        }
        public function get_balance()
        {
            return $this->balance;
        }
        public function deposit($amount)
        {
            $this->balance += $amount;
            print("Balance after deposit: ". $this->balance . "<br>");
        }
        public function withdraw($amount)
        {
            if ($amount > $this->balance)
            {
                echo "Insufficient balance";
            }
            else
            {
                $this->balance -= $amount;
                print("Balance after withdrawal: " . $this->balance . "<br>");
            }
        }
    }
    $user = new bankacc("John Doe", 12345, 1000, 1234);
    $user->deposit(500);
    $user ->withdraw(200);
    $user ->withdraw(1500);
    $user->get_balance();
    // extend ... $permission_level
?>