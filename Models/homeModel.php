<?php

// use Libraries\Core\Conexion;

class homeModel
{
    public function __construct()
    {
        // parent::__construct();
    }

    // public function loadEmpresa()
    // {
    //     try {
    //         $cmdEmpresa = $this->getConnection()->prepare("SELECT 
    //         Telefono,
    //         Celular,
    //         Domicilio,
    //         Email,
    //         Telefono,
    //         NombreComercial
    //         FROM EmpresaTB");
    //         $cmdEmpresa->execute();

    //         $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
    //         header($protocol . ' ' . 200 . ' ' . "OK");

    //         return $cmdEmpresa->fetch(PDO::FETCH_OBJ);
    //     } catch (Exception $ex) {
    //         $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
    //         header($protocol . ' ' . 500 . ' ' . "Internal Server Error");

    //         return $ex->getMessage();
    //     }
    // }

    // public function listTables()
    // {
    //     try {
    //         $cmdTables = $this->getConnection()->prepare("SELECT TABLE_CATALOG,TABLE_SCHEMA,TABLE_NAME 
    //         FROM INFORMATION_SCHEMA.TABLES ORDER BY TABLE_NAME ASC");
    //         $cmdTables->execute();
    //         $arrayTable = array();
    //         while ($row = $cmdTables->fetch(PDO::FETCH_ASSOC)) {
    //             $cmdColumns = $this->getConnection()->prepare("SELECT COLUMN_NAME,DATA_TYPE
    //             FROM INFORMATION_SCHEMA.COLUMNS
    //             WHERE TABLE_SCHEMA = ?
    //             AND TABLE_NAME = ?
    //             ORDER BY ORDINAL_POSITION");
    //             $cmdColumns->bindParam(1, $row["TABLE_SCHEMA"], PDO::PARAM_STR);
    //             $cmdColumns->bindParam(2, $row["TABLE_NAME"], PDO::PARAM_STR);
    //             $cmdColumns->execute();

    //             array_push($arrayTable,  array($row, $cmdColumns->fetchAll(PDO::FETCH_OBJ)));
    //         }
    //         return $arrayTable;
    //     } catch (Exception $ex) {
    //         return $ex->getMessage();
    //     }
    // }
}
