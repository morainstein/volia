<?php 
// session_start();

require_once __DIR__ . DIRECTORY_SEPARATOR . "functions.php";
requireRootPath("/config/config.php");

requireRootPath("/src/Entity/Cliente.php");
requireRootPath("/src/Entity/Produto.php");
requireRootPath("/src/Repository/Cliente.php");
requireRootPath("/src/Repository/Produto.php");

try{
  $PDO = new PDO(DSN,USER,PASSWORD);
  
  }catch(PDOException $e){
    echo "DEU RUIM NA CONEXÃO :( ". $e->getMessage();
}


?>