<?php

class ContaBancaria {
    private $saldo = 0;

    public function __construct() {
        $this->saldo = 30;
    }

    public  function deposito($valor) {
        $this->saldo += $valor;
    }

    public function saque($valor) {
        if ($valor > $saldo) {
            return false;
        }
        $this->saldo -= $valor;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$contaBancaria = new ContaBancaria();
$contaBancaria->deposito(10);
$contaBancaria->deposito(20);
print $contaBancaria->getSaldo();