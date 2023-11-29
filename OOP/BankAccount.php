<?php

class BankAccount
{
    private $accountNumber;
    private $balance;
    private $ownerNumber;

    public $sum = 0;

    public function __construct($accountNumber, $balance, $ownerNumber)
    {
        if (!isset($this->accountNumber)) {
            $this->accountNumber = $accountNumber;
//            throw new Exception("AccountNumber '$accountNumber' qo'shilgan.");
        }
        $this->balance = $balance;
        $this->ownerNumber = $ownerNumber;
        $this->sum += $this->accountNumber;
    }
    public function __toString()
    {
        return "Account Number: " . $this->accountNumber . ", Balance: " . $this->balance . ", Owner: " . $this->ownerNumber;
    }
    public function deposit($amount)
    {
        $this->balance += $amount;
    }
    public function yechibOlish($amount)
    {
        if ($this->balance < $amount) {
            throw new Exception("Sizda yetarli mablag' mavjud emas.");
        }
        $this->balance -= $amount;
    }
}

class SavingAccount extends BankAccount
{
    public function deposit($amount)
    {
        $amount += $amount * 0.1;
        parent::deposit($amount);
    }
}

try {
    $account = new BankAccount("123456789", 1000, "Abdulloh");
    $account->deposit(1000);
    $account->yechibOlish(200);
    echo $account;
    echo "<br>";
    $savingAccount = new SavingAccount("987654321", 5000, "Abdulloh");
    $savingAccount->deposit(1000);
    $savingAccount->yechibOlish(200);
    echo $savingAccount;
} catch (Exception $e) {
    echo "Xato: " . $e->getMessage();
}