<?php 

function rootPath(string $path): string {
  return str_replace("/",DIRECTORY_SEPARATOR,$path);
}

function requireRootPath(string $path, bool $returnString = false){
  switch($returnString){
    case false:
      require_once __DIR__ . rootPath($path);
    break;
    case true:
      return __DIR__ . rootPath($path);
    break;
  }
}

function echoPre($vardump){
  echo "<pre>";
  var_dump($vardump);
  echo "</pre>";
}

?>