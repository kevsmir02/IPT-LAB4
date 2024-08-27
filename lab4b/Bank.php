<?php
class Bank {
    private $code;
    private $address;

    public function __construct($code, $address) {
        $this->code = $code;
        $this->address = $address;
    }

    public function manages() {
        return false; // Placeholder
    }

    public function maintains() {
        return false; // Placeholder
    }

    public function getCode() {
        return $this->code;
    }

    public function getAddress() {
        return $this->address;
    }
}
?>
