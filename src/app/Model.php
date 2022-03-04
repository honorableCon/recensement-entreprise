<?php

    
  require('Connect.php');
  
  // dotenv();

  abstract class Model{
    protected $table;
    protected Connect $db;

    public function __construct(){
      $this->db = Connect::getInstance();
    }

    
    public function findAll(){
      $requete = $this->db->getConnection()->prepare("select * from $this->table");
      $requete->execute();
      return $requete->fetchAll();
    }
    
    public function find(int $id){
      $idLabel = "id".ucfirst($this->table);
      $requete = $this->db->getConnection()->prepare("select * from $this->table where $idLabel=$id");
      $requete->execute();
      return $requete->fetchAll();
    }

    public function insert(array $data){
      [$label, $labelValues] = parseDataToUsableRequete($data);
      
      $insertRequete = $this->db->getConnection()->prepare("insert into $this->table($label) values ($labelValues)");
      $insertRequete->execute($data) or die(print_r($this->db->getConnection()->errorInfo()));
    }

    public function delete(int $id){
      $idLabel = "id".ucfirst($this->table);
      $requete = $this->db->getConnection()->prepare("delete from $this->table where $idLabel=$id");
      return $requete->execute();
    }
  }
?>