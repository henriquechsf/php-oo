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

        var_dump((new Product($pdo))->where(
            ['id' => '12']
        ));

//        var_dump((new Product($pdo))->insert(
//            ['name' => 'teste', 'price' => '19.90', 'amount' => 10, 'description' => 'teste', 'slug' => 'slug']
//        ));

//        $view = new View('site/single.phtml');
//
//        $view->product = (new Product($pdo))->find($id);
//
//        return $view->render();
    }
}