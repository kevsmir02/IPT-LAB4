<?php
class Customer {
    private $name;
    private $address;
    private $dob;
    private $cardNumber;
    private $pin;
    private $accounts = [];

    public function __construct($name, $address, $dob, $cardNumber, $pin) {
        $this->name = $name;
        $this->address = $address;
        $this->dob = $dob;
        $this->cardNumber = $cardNumber;
        $this->pin = $pin;
    }

    public function verifyPassword($inputPin) {
        return $this->pin === $inputPin;
    }

    public function addAccount(Account $account) {
        $this->accounts[] = $account;
    }

    public function getAccounts() {
        return $this->accounts;
    }
}
?>
