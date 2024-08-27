<?php
class Account {
    protected $number;
    protected $balance;

    public function __construct($number, $balance) {
        $this->number = $number;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        return false; // Placeholder
    }

    public function withdraw($amount) {
        return false; // Placeholder
    }

    public function createTransaction() {
        return false; // Placeholder
    }

    public function getAccountNumber() {
        return $this->number;
    }

    public function getBalance() {
        return $this->balance;
    }
}
?>
