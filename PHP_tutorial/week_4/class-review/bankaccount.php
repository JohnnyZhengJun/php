<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class BankAccount
    {
        private $balance = 0;
        private $accountNumber = "";
        private $amount = 0;

        public function __construct($accountNumber, $amount)//constructor
        {
            $this->accountNumber = $accountNumber;
            $this->amount = $amount;
        }

        public function deposit($amount)
        {
            $this->balance += $amount;
        }

        public function withdraw($amount)
        {
            if($amount < $this->balance)
            {
                $this->balance -= $amount;
            }
            else
            {
                print("Insufficient balance."); 
            }
        }

        public function getBalance()
        {
            return $this->balance;
        }
    }

    $account = new BankAccount("123456789", 1000); //creating an obj
    $account->deposit(500);
    $account->withdraw(200);
    print($account->getBalance());
    ?>
</body>
</html>