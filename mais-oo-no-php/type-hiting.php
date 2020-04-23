<?php
// declara os erros forçando o typehint
declare(strict_types = 1);

// Typehint usado para tipar variáveis PHP

class Product {
    private $name;
    private $price;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

}

class Cart {
    private $items = [];

    public function addProduct(Product $product) {
        $this->items[] = $product;
    }

    // : array -> garante que o retorno será um array
    public function getItems(): array {
        return $this->items;
    }
}

$product = new Product();
$product->setName('Notebook Dell');
$product->setPrice(3200.90);

$product2 = new Product();
$product2->setName('Monitor Samsung');
$product2->setPrice(599.90);

$cart = new Cart();
$cart->addProduct($product);
$cart->addProduct($product2);

var_dump($cart->getItems());
//print 'Produto ' . $product->getName() . ' custa ' . $product->getPrice();