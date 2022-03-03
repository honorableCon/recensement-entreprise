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

?>