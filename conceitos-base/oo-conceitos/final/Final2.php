<?php

class User {
    private $name;

    public function getName() {
        return $this->name;
    }

    // metodos final não podem ser sobrescritos
    final public function setName($name) {
        $this->name = $name;
    }
}

class Administrator extends User {
    public function setName($name)
    {
        return 'Teste';
    }
}

$adm = new Administrator();
$adm->setName('Administrador');

print $adm->getName();