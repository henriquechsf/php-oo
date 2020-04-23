<?php

class Product {

    public function __call($name, $params) {
        print_r([$name, $params]);
    }

    public static function __callStatic($name, $params) {
        print_r([$name, $params]);
    }
}

print Product::getConnection();

$produto = new Product();
$produto->save('Produto 1', 19.50);