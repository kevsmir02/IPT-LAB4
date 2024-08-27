<?php
class ATM {
    private $location;
    private $managedBy;

    public function __construct($location, Bank $managedBy) {
        $this->location = $location;
        $this->managedBy = $managedBy;
    }

    public function identifies() {
        return false; // Placeholder
    }

    public function transactions() {
        return false; // Placeholder
    }

    public function getLocation() {
        return $this->location;
    }

    public function getManagedBy() {
        return $this->managedBy;
    }
}
?>
