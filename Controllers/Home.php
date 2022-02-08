<?php

use SysSoftIntegra\Core\Controllers;
use SysSoftIntegra\Model\HomeModel;

class Home extends Controllers
{
    private $homeModel;

    public function __construct()
    {
        parent::__construct();
        $this->homeModel = new HomeModel();        
    }

    public function home($params)
    {       
        $data["title-page"] = "Mi Empresa";
        $data["empresa"] =  $this->homeModel->loadEmpresa();
        $this->views->getView($this, "home", $data);
    }

    // Insertar
    public function addUser()
    {
        echo "perro";
    }
}
