<?php
namespace Code\Controller;

use Code\DB\Connection;
use Code\Entity\Product;
use Code\View\View;

class ProductController
{
    public function index($id)
    {
        // passa o id recebido da url para int
        //$id = (int) $id;

        // instanciando o PDO
        $pdo = Connection::getInstance();

        var_dump((new Product($pdo))->find(10));

//        $view = new View('site/single.phtml');
//
//        $view->product = (new Product($pdo))->find($id);
//
//        return $view->render();
    }
}