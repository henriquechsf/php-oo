<?php
namespace Code\Controller;

use Code\Entity\Product;
use Code\View\View;

class ProductController
{
    public function index($id)
    {
        print $id;
//        // instanciando o PDO
//        $pdo = new \PDO('mysql:dbname=formacao_php;host=localhost', 'admin', '123');
//
//        $view = new View('site/index.phtml');
//
//        $view->products = ($products = new Product($pdo))->findAll();
//
//        return $view->render();
    }
}