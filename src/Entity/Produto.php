<?php 

namespace Volia\Entity;

use \Volia\Repository\Produto as RepoProduto;

class Produto{

  private $RepoProduto;

  public function __construct(RepoProduto $RepoProduto){
    $this->RepoProduto = $RepoProduto;
  }

  function listAll(){
    return $this->RepoProduto->SelectAll();
  }

  function ProdutoById($id){
    return $this->RepoProduto->SelectById($id);
  }

}