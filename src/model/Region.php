<?php

    require(__DIR__."/../app/Model.php");

    class Region extends Model{
        protected $table = "region";

    }
    $region =  new Region();
    var_dump($region->findAll());
?>