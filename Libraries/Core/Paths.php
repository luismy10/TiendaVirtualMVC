<?php

class Paths
{
    public static function files()
    {
        return array(
            'SysSoftIntegra\\Core\\Controllers' => __DIR__  . '/Controllers.php',
            'SysSoftIntegra\\Core\\Views' => __DIR__  . '/Views.php',
            'SysSoftIntegra\\Core\\Conexion' => __DIR__  . '/Conexion.php',
            'SysSoftIntegra\\Core\\Database' => __DIR__  . '/Database.php',
            'SysSoftIntegra\\Core\\BaseController' => __DIR__  . '/BaseController.php',
            'SysSoftIntegra\\Model\\HomeModel' => __DIR__  . '/../../Models/HomeModel.php',
            'SysSoftIntegra\\Model\\EmpresaADO' => __DIR__  . '/../../Models/EmpresaADO.php',
        );
    }
}
