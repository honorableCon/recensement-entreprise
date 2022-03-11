<?php


class Controller{
    protected $model;
    protected $modelInstance;
    protected $view;

    function __construct(){
      require_once(__DIR__."/../model/$this->model.php");
      $this->modelInstance = new $this->model();
    }

    function view(string $file, array $data){
      extract($data);
      require_once(__DIR__."/../view/$this->view/$file.php");
    }
  }
?>