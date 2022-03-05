<?php


class Controller{
    protected $model;
    protected $modelInstance;

    function __construct(){
        require_once(__DIR__."/../model/$this->model.php");
        $this->modelInstance = new $this->model();
    }

  }
?>