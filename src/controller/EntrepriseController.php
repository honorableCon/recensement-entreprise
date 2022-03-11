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

    function signup(){
        session_start();
        if(isset($_SESSION['auth']) || !$_SESSION['logout'] == true){
            $name = $_SESSION['auth']['firstname'];
            
            $this->view("signup", []);
        }else{
            header('Location: /entreprise');
        }
    }

    function process(){
        var_dump($_POST);
        die();
        if(isset($_POST['submit'])){
            $repondant = [
                "nom" => $_POST['lastname'],
                "prenom" => $_POST['firstname'],
                "couriel" => $_POST['emailRepondant'],
                "fonction" => $_POST['fonction'],
                "numero" => $_POST["numberRepondant"],
                "idEntreprise" => "1"
            ];

            $quartierVillage = [
                "label" => $_POST['quartier'],
                "type" => "quartier",
                "idCommune" => ""
            ];

            $commune = [
                "label" => $_POST['quartier'],
                "idDepartement" => ""
            ];

            $regimeJuridique = [
                "label" => $_POST[""]
            ];

            $domaine = [
                "label" => $_POST[""]
            ];

            $entreprise = [
                "nom" => $_POST['fullname'],
                "siege" => $_POST['siege'],
                "registre" => $_POST['register'],
                "NINEA" => $_POST['ninea'],
                "pageWeb" => $_POST["siteweb"],
                "dateDeCreation" => $_POST["datecreation"],
                "idQuartierVillage" => $_POST["quartier"],
                "idRegimeJuridique" => "1",
                "idDomaine" => "1",
                "idResourceHumaine" => "1"
            ];

            // $this->modelInstance->insert($data);
            $this->view("index", []);
            
        }else{
            $this->view("signup", []);
        }
    }
    
}

?>