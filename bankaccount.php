<?php
// Write a PHP a class called "BankAccount" with properties like "accountNumber" and "balance". Implement methods to deposit and withdraw money from the account.
class BankAccount
{
    private $accountNumber;
    private $balance = 0;

    function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    function deposite($balance)
    {
        $this->balance = $this->balance + $balance;
        echo $balance . " balance deposited <br>";
        echo "your current balance is " . $this->balance . "<br>";
    }

    function withdraw($balance)
    {
        $this->balance = $this->balance - $balance;
        echo $balance . " balance withdrawn <br>";
        echo "your current balance is " . $this->balance . "<br>";
    }

    function showBalance()
    {
        echo "Your balance is " . $this->balance;
    }
}

$account1 = new BankAccount(123456789, 10000);
$account1->showBalance();
echo "<br>";

$account1->deposite(20000);

$account1->withdraw(10000);



?>