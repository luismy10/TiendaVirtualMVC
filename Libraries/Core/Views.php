<?php
namespace SysSoftIntegra\Core;

class Views
{

    public function getView($controller, $view, $data = [])
    {
        $controller = get_class($controller);

        if ($controller == "Home") {
            $view = VIEWS . $view . ".php"; //views/home.php
        } else {
            $view = VIEWS . $controller . "/" . $view . ".php"; //views/Contacto/contacto.php
        }
        require_once($view);
    }
}
