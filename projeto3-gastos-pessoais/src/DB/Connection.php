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

            // formatada os dados vindos do bd na view para UTF8
            self::getInstance()->exec('SET NAMES UTF8');
        }

        return self::$instance;
    }

}