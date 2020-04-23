<?php

trait MyTrait {
    public function hello() {
        return 'Hello world';
    }
}

trait MyTrait2 {
    public function showName($name) {
        return 'Hello ' . $name;
    }

    public function hello() {
        return 'Hello World 2';
    }
}

class Client {
    use MyTrait, MyTrait2 {
        // evita colisao de metodos iguais nas Traits
        MyTrait2::hello insteadof MyTrait;

        // renomeando uma Trait
        MyTrait::hello as helloMy;

        // mudando a visibilidade da Trait
        MyTrait::hello as protected;
    }
}

$client = new Client();
print $client->hello();
print "\n";
print $client->showName('Henrique');