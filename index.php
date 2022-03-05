<?php

    [,$controller, $action] = explode('/', $_SERVER['PATH_INFO']);

    if ($controller) {
        $controller = ucfirst($controller).'Controller';
        $action = $action ?? "index";
        require_once(__DIR__.'/src/controller/'.$controller.'.php');
        $controller = new $controller();
        if(method_exists($controller, $action)){
            $controller->$action();
        }else{
            http_response_code(404);
            echo "La page $action n'existe pas";
        }
    }else{
        die('jjj');
    }
?>