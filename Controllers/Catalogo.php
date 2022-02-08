<?php

use SysSoftIntegra\Core\Controllers;
use SysSoftIntegra\Model\HomeModel;
use SysSoftIntegra\Core\BaseController;

class Catalogo extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function catalogo($params)
    {
        $data["title-page"] = "Mi Empresa";
        $this->views->getView($this, "catalogo", $data);
    }

    public function api()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
        header('Content-Type: application/json; charset=UTF-8');

        $baseController = new BaseController();
        if (strtoupper($baseController->getMethod()) == 'GET') {
            $result = array("asas"=>"!asd","dd"=>"dd");
            if (is_array($result)) {
                $baseController->sendOutput(
                    $result,
                    array($baseController->getContentTypeJson(), $baseController->getStatus200())
                );
            } else {
                $baseController->sendOutput(
                    $result,
                    array($baseController->getContentTypeJson(), $baseController->getStatus500())
                );
            }
        } else {
            $baseController->sendOutput(
                "Method not supported",
                array($baseController->getContentTypeJson(), $baseController->getStatus422())
            );
        }


    }
}
