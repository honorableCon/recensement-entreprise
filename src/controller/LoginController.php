<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/src/app/Controller.php');


class LoginController extends Controller{
    protected $model = "User";
    protected $view = "login";

    private $errors = [];

    function index(){
        session_start();
        if(isset($_SESSION['auth']) ){
            header('Location: /dashboard');
        }else{
            $this->view("index", $this->errors);
        }
        
        
    }

    function signup(){
        if(isset($_POST['submit'])){
            $data = [
                "nom" => $_POST['lastname'],
                "prenom" => $_POST['firstname'],
                "email" => $_POST['email'],
                "password" => password_hash($_POST['password'], PASSWORD_BCRYPT),
                "role" => "moderateur"
            ];

            $this->modelInstance->insert($data);
            $this->view("index", []);
            
        }else{
            $this->view("signup", []);
        }
    }
    
    function process(){ 
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $result = $this->modelInstance->login($email);
            
            if($result){
                if(password_verify($password, $result['password'])){
                    session_start();
                    $_SESSION['auth'] = [
                        "firstname" => $result['prenom'],
                        "lastname" => $result['nom']
                    ];
                    
                    header('Location: /dashboard');
                }else{
                    $this->errors['password'] = "Password incorrecte";
    
                    $this->view("index", $this->errors);

                }
            } else {
                $this->errors['email'] = "Email innexistante";
                
                $this->view("index", $this->errors);
            }
        }else{
            // $this->view("index", []);
            header('Location: /login');
        }
    }

    function logout(){
        session_start();
        unset($_SESSION['auth']);

        $_SESSION['logout'] = true;
        header('Location: /login');
    }
    
}

?>