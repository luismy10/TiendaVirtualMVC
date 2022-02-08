<?php

namespace SysSoftIntegra\Core;

use SysSoftIntegra\Core\Views;

class Controllers
{
    public function __construct()
    {
        $this->views = new Views();
        // $this->loadModel();
    }

    // public function loadModel()
    // {
    //     //HomeModel
    //     $modelClass = get_class($this) . "Model";
    //     $routClass = "Models/" . $modelClass . ".php";

    //     if (file_exists($routClass)) {
    //         require_once($routClass);
    //         $this->model = new $modelClass();
    //     }
    // }
}
