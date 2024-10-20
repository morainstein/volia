<?php 
require_once __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR .'dependencies.php';
require_once rootPath("src/Entity/Produto.php");
require_once rootPath("src/Repository/Produto.php");

use Volia\Repository\Cliente as RepoCliente;
use Volia\Entity\Cliente;
use Volia\Repository\Produto as RepoProduto;
use Volia\Entity\Produto;

$RepoCliente = new RepoCliente($PDO);
$cliente = new Cliente($RepoCliente);

$RepoProduto = new RepoProduto($PDO);
$Produto = new Produto($RepoProduto);

// echoPre($_SERVER);
// $_SERVER["REQUEST_METHOD"]
// $_SERVER["REQUEST_URI"]
// $_SERVER["PATH_INFO"]

if(str_starts_with($_SERVER['REQUEST_URI'], "/product")){
  include_once rootPath("public/view/product.php");
}
else if(str_starts_with($_SERVER['REQUEST_URI'], "/login")){

  

}
else if(str_starts_with($_SERVER['REQUEST_URI'], "/")){
  include_once rootPath("public/view/dashboard.php");
}
// include_once rootPath("public/view/product.php");



?>