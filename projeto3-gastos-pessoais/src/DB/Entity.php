<?php
namespace Code\DB;

use \PDO;

abstract class Entity
{
    /**
     * @var PDO
     */
    private $conn;
    protected $table;

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function findAll($fields = '*')
    {
        $sql = 'SELECT ' . $fields . ' FROM ' . $this->table;
        $get = $this->conn->query($sql);

        return $get->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(int $id, $fields = '*')
    {
        // traz somente um elemento de acordo com a query
        return current($this->where(['id' => $id], '', $fields));
    }

    // funcao que gera sql com where
    public function where(array $conditions, $operator = ' AND ', $fields = '*')
    {
        $sql = 'SELECT ' . $fields . ' FROM ' . $this->table . ' WHERE ';

        $binds = array_keys($conditions);

        $where = null;
        foreach ($binds as $v) {
            if (is_null($where)) {
                $where .= $v . ' = :' . $v;
            } else {
                $where .= $operator . $v . ' = :' . $v;
            }
        }

        $sql .= $where;

        $get = $this->conn->prepare($sql);

        foreach ($conditions as $k => $v) {
            gettype($v) == 'int' ? $get->bindValue(':' . $k, $v, \PDO::PARAM_INT)
                                : $get->bindValue(':' . $k, $v, \PDO::PARAM_STR);
        }

        $get->execute();

        return $get->fetchAll(\PDO::FETCH_ASSOC);
    }
}