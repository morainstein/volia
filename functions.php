<?php 

function rootPath(string $path): string {
  include_once __DIR__ . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "config.php";

  return PATH_ROOT . str_replace("/",DIRECTORY_SEPARATOR,$path);
}

function requireRootPath(string $path, bool $returnString = false){
  switch($returnString){
    case false:
      require_once rootPath($path);
    break;
    case true:
      return rootPath($path);
    break;
  }
}

function echoPre($vardump){
  echo "<pre>";
  var_dump($vardump);
  echo "</pre>";
}

function verifySession(){
  session_start();
  
  if(!isset($_SESSION)){
   $login_path = rootPath("public/login.php");
   header("Location: $login_path");
  }

  if(isset($_SESSION['id'])){
    $index_path = rootPath("public/index.php");
    header("Location: $index_path");
  }
}

?>