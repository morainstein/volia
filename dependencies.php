<?php 
// session_start();

require_once __DIR__ . DIRECTORY_SEPARATOR . "functions.php";
require_once rootPath("config/config.php");

require_once rootPath("src/Entity/Cliente.php");
require_once rootPath("src/Repository/Cliente.php");
// requireRootPath("/src/Entity/Produto.php");
// requireRootPath("/src/Repository/Produto.php");

try{
  $PDO = new PDO(DSN,USER,PASSWORD);
  
  }catch(PDOException $e){
    echo "DEU RUIM NA CONEXÃO :( ". $e->getMessage();
}


?>