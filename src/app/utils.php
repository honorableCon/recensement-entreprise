<?php
function parseDataToUsableRequete($data){
    $label = "";
    $labelValues = "" ;
    foreach ($data as $key => $value) {
      $label = ($label === "") ? $key : "$label, $key";
      $labelValues = ($labelValues === "") ? ":$key" : "$labelValues, :$key";
    }

    return [$label, $labelValues];
}

function dotenv(){
  $env = file_get_contents(__DIR__."/../../.env");
  $env = explode("\n", $env);

  foreach ($env as $value) {
      if ($value){
          [$key, $val] = explode("=", $value);
          $val = str_replace('"', '', $val);
          define($key, $val);
      }
  }
}

function validatePassword(string $pass){

  $uppercase = preg_match('@[A-Z]@', $pass);
  $lowercase = preg_match('@[a-z]@', $pass);
  $number    = preg_match('@[0-9]@', $pass);
  $specialChars = preg_match('@[^\w]@', $pass);
  $badlength = strlen($pass) < 8 || strlen($pass) > 25;

  if(!$uppercase || !$lowercase || !$number || !$specialChars || $badlength) {
      return false;
  }else{
      return true;
  }
}

?>