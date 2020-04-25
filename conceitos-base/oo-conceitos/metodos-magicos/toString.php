<?php

class Product {
    private $props = [];

    public function __set($name, $value)
    {
        $this->props[$name] = $value;
    }

    public function __toString()
    {
        return json_encode($this->props);
    }
}

$produto = new Product();
$produto->name = 'Produto 1';
$produto->price = 19.99;

print $produto;