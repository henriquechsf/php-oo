<?php
namespace Code\DB;

use \PDO;

abstract class Entity
{
    /**
     * @var PDO
     */
    private $conn;

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function findAll()
    {
        $sql = 'SELECT * FROM products';
        $get = $this->conn->query($sql);

        return $get->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find()
    {
        return 'SELECT * FROM products WHERE id = 10';
    }
}