<?php

class Produto {
    public $props = [];

    // metodo __set cria atributos que não existe
    public function __set($name, $value) {
        // array associativo
        $this->props[$name] = $value;
    }

    // metodo __get acessa estes atributos
    public function __get($name) {
        return $this->props[$name];
    }
}

$produto = new Produto();

$produto->name = 'Nome do produto';
$produto->price = 19.99;

//var_dump($produto->props);
print $produto->price;