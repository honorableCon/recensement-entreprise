<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/src/app/Controller.php');


class DashboardController extends Controller{
    protected $model = "User";
    protected $view = "dashboard";


    function index(){
        session_start();
        // var_dump($_SESSION);
        // die();
        if(isset($_SESSION['auth']) || !$_SESSION['logout'] == true){
            $name = $_SESSION['auth']['firstname'];
            $this->view("index", ["name" => $name]);
        }else{
            // $dashboard = "doo";
            header('Location: /login');
        }
    }
    
}

?>