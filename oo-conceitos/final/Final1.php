<?php

final class User {
    private $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

class Administrator extends User {

}

$adm = new Administrator();
$adm->setName('Administrador');

print $adm->getName();