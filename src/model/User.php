<?php

    require(__DIR__."/../app/Model.php");

    class User extends Model{
        protected $table = "user";

        public function login($email){
            $sql = "select * from $this->table where (email='$email')";
            $requete = $this->db->getConnection()->prepare($sql);
            $requete->execute();
            return $requete->fetch();
        }
    } 
?>