<?php

namespace App\Models\DAO;

use App\Libs\Connection;

abstract class BaseDAO
{
    private $connection;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    public function select($sql) 
    {
        if(!empty($sql))
        {
            return $this->connection->query($sql);
        }
    }

    public function insert($table, $cols, $values) 
    {
        if(!empty($table) && !empty($cols) && !empty($values))
        {
            $parameters = $cols;
            $columns    = str_replace(":", "", $cols);
            
            $stmt = $this->connection->prepare("INSERT INTO $table ($columns) VALUES ($parameters)");
            $stmt->execute($values);

            return $stmt->rowCount();
        }else{
            return false;
        }
    }
}
