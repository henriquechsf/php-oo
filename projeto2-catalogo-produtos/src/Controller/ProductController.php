<?php
namespace Code\Controller;

use Code\Entity\Product;
use Code\View\View;

class ProductController
{
    public function index($id)
    {
        // passa o id recebido da url para int
        $id = (int) $id;

        // instanciando o PDO
        $pdo = new \PDO('mysql:dbname=formacao_php;host=localhost', 'admin', '123');

        //var_dump((new Product($pdo))->find($id));

        $view = new View('site/single.phtml');

        $view->product = (new Product($pdo))->find($id);

        return $view->render();
    }
}