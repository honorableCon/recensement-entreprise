<?php

    [,$controller, $action, $id] = explode('/', $_SERVER['PATH_INFO']);

    
    // die(var_dump($_SERVER['PATH_INFO']));
    if ($controller) {
        $controller = ucfirst($controller).'Controller';
        $action = $action ?? "index";
        $realpath = realpath(__DIR__.'/src/controller/'.$controller.'.php');

        if (empty($realpath)) {
            http_response_code(404);
            echo "La page $action n'existe pas";
            die();
        }

        require_once($realpath);
        $controller = new $controller();

        if(method_exists($controller, $action)){
            $controller->$action();
        }else{
            http_response_code(404);
            echo "La page n'existe pas";
        }
    }else{
        header('Location: dashboard');
    }
?>