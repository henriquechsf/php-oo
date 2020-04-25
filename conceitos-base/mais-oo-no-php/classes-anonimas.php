<?php

$classAnonimous = new class {
    public function log($message) {
        return $message;
    }
};

class BankAccount {
    public function withdraw($value, $classAnonimous) {
        return $classAnonimous->log('Logging withdraw...');
    }
}

$bkAccount = new BankAccount();
print $bkAccount->withdraw(19, $classAnonimous);