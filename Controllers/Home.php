<?php

class Home extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($params)
    {
        $data["title-page"] = "Mi Empresa";
        $this->views->getView($this, "home", $data);
    }

    // Insertar
    public function addUser()
    {
        echo "perro";
    }
}
