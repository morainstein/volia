<?php 

require_once __DIR__ . DIRECTORY_SEPARATOR ."..". DIRECTORY_SEPARATOR ."functions.php";
requireRootPath("/config/config.php");

try{
  $PDO = new PDO(DSN,USER,PASSWORD);
  
  }catch(PDOException $e){
    echo "DEU RUIM NA CONEXÃO :( ". $e->getMessage();
}


?>