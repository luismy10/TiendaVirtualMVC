<?php

namespace Libraries\Core;

use PDO;

class Conexion
{
    private $conection = null;

    public function __construct()
    {
        if ($this->conection == null) {
            $this->conection = new PDO(
                "sqlsrv:Server=" . DB_HOST . "," . DB_PORT . ";Database=" . DB_NAME,
                DB_USER,
                DB_PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            $this->conection->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    public function getConnection()
    {
        return $this->conection;
    }
}
