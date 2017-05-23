<?php

include_once('core/BaseController.php');
include_once('controllers/Home.php');
include_once('controllers/Error.php');
include_once('controllers/CreatePet.php');
include_once('controllers/CreateClient.php');
include_once('controllers/CreateFamily.php');
include_once('controllers/MedicalAppointment.php');

class Run {

    public function __construct()
    {

    }

    public function run(){
        if (isset($_GET['page']))
        {
            $page = $_GET['page'];
            if (file_exists('controllers/'. ucfirst($page) . '.php'))
            {
                if (isset($_GET['action']))
                {
                    $action = $_GET['action'];
                    if (method_exists($page,$action)){
                        $controller = new $page(null,$page);
                        $controller->$action();
                    }else {
                        $controller = new Error(404, 'La acción que trata de ejecutar no está disponible');
                        $controller->render();
                    }
                }else {
                    $controller = new $page(null,$page);
                    $controller->render();
                }
            }else{
                $controller = new Error(404, 'Esta página no existe');
                $controller->render();
            }
        }else{
            $controller = new Home(null, "Home");
            $controller->render();
        }
    }
}