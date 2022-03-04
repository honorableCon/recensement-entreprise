<?php

    
require('utils.php');

dotenv();


// Singleton to connect db.
class Connect {
    // Hold the class instance.
    private static $instance = null;
    private $conn;
    
    private $host = DB_SERVER;
    private $user = DB_USERNAME;
    private $pass = DB_PASSWORD;
    private $name = DB_DATABASE;
     
    // The db connection is established in the private constructor.
    private function __construct(){
      $this->conn = new PDO("mysql:host={$this->host};
      dbname={$this->name}", $this->user,$this->pass,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    
    public static function getInstance(){
      if(!self::$instance){
        self::$instance = new Connect();
      }
     
      return self::$instance;
    }
    
    public function getConnection(){
      return $this->conn;
    }
  }


?>

