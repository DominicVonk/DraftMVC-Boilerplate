<?php
class DB extends \PDO
{
    public function __construct()
    {
        $dbConfig = Config::get('db');
        parent::__construct('mysql:host=' . $dbConfig['host'].';dbname=' . $dbConfig['db'], $dbConfig['user'], $dbConfig['password']);
    }
}
