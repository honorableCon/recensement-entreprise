<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/src/app/Controller.php');


class LoginController extends Controller{
    protected $model = "User";

    function index(){
        $listeRegions = $this->modelInstance->findAll();
        var_dump($listeRegions);
    }
    function done(){ 
        echo "done rotation2";
    }

    
}

?>