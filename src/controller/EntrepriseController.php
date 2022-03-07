<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/src/app/Controller.php');


class EntrepriseController extends Controller{
    protected $model = "Entreprise";
    protected $view = "entreprise";


    function index(){
        session_start();
        if(isset($_SESSION['auth']) || !$_SESSION['logout'] == true){
            $name = $_SESSION['auth']['firstname'];
            $entreprise = $this->modelInstance->findAll();
            $this->view("index", ["entreprise"=>$entreprise, "name" => $name]);
        }else{
            
            header('Location: /login');
        }
    }
    
}

?>