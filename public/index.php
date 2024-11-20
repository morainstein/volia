<?php 
session_start();

require_once __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR .'dependencies.php';
require_once rootPath("src/Entity/Produto.php");
require_once rootPath("src/Repository/Produto.php");
require_once rootPath("src/Entity/Adm.php");

use Volia\Repository\Cliente as RepoCliente;
use Volia\Entity\Cliente;
use Volia\Repository\Produto as RepoProduto;
use Volia\Entity\Produto;
use Volia\Entity\Adm;

$RepoCliente = new RepoCliente($PDO);
$cliente = new Cliente($RepoCliente);

$RepoProduto = new RepoProduto($PDO);
$Produto = new Produto($RepoProduto);

$Adm = new Adm($PDO);

if(str_starts_with($_SERVER['REQUEST_URI'], "/product")){
  include_once rootPath("public/view/head.php");
  if(@$_SESSION['acesso'] === "adm"){
    include_once rootPath("public/view/edita.php");
  }
  include_once rootPath("public/view/product.php");
  include_once rootPath("public/view/footer.php");
}
else if(str_starts_with($_SERVER['REQUEST_URI'], "/admin")){  
  include_once rootPath("public/view/loginADM.php");
}
else if(str_starts_with($_SERVER['REQUEST_URI'], "/logout")){
  session_destroy();
  header("Location: /");  
}
else if(str_starts_with($_SERVER['REQUEST_URI'], "/")){
  include_once rootPath("public/view/head.php");
  if(@$_SESSION['acesso'] === "adm"){
    include_once rootPath("public/view/cadastra.php");
  }
  include_once rootPath("public/view/dashboard.php");
  include_once rootPath("public/view/footer.php");
}
?>