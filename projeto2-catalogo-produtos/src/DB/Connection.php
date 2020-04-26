<?php
namespace Code\DB;

class Connection
{
    // padrão de projeto Singleton

    private static $instance = null;

    private function __construct() {
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new \PDO('mysql:dbname=formacao_php;host=localhost', 'admin', '123');
        }

        return self::$instance;
    }

}