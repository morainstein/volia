<?php 

namespace Volia\Entity;

use \Volia\Repository\Produto as RepoProduto;

class Produto{

  private $RepoProduto;

  public function __construct(RepoProduto $RepoProduto){
    $this->RepoProduto = $RepoProduto;
  }

  function listAll(){
    return $this->RepoProduto->selectAll();
  }

  function produtoById($id){
    return $this->RepoProduto->selectById($id);
  }

  function registerProduct(){
    $verificaSePostTaCompleto = true;

    foreach($_POST as $value){
      if(empty($value)){
        $verificaSePostTaCompleto = false;
      }
    }
    if(empty($_POST) || empty($_FILES['img']['name'])){
      $verificaSePostTaCompleto = false;
    }

    if($verificaSePostTaCompleto){
      $nome = filter_input(INPUT_POST, "nome", FILTER_DEFAULT);
      $volume = filter_input(INPUT_POST, "volume", FILTER_DEFAULT);
      $valor = filter_input(INPUT_POST, "valor", FILTER_DEFAULT);
      $descricao = filter_input(INPUT_POST, "descricao", FILTER_DEFAULT);
      $img_nome = $_FILES['img']['name'];
      $caminho_temporario = $_FILES['img']['tmp_name'];
      
      $destino = rootPath("public/imgs/$img_nome");

      $query = $this->RepoProduto->insert($nome, $volume, $valor, $descricao, $img_nome);
      if($query){
        move_uploaded_file($caminho_temporario, $destino);
      }

    }else{
      echo "Preencha todos os campos";
    }
  }

  function editProduct(){

    $verificaSePostTaCompleto = true;

    foreach($_POST as $value){
      if(empty($value)){
        $verificaSePostTaCompleto = false;
      }
    }
    if(empty($_POST)){
      $verificaSePostTaCompleto = false;
    }
    
    if($verificaSePostTaCompleto){
      
      $nome = filter_input(INPUT_POST, "nome", FILTER_DEFAULT);
      $volume = filter_input(INPUT_POST, "volume", FILTER_DEFAULT);
      $valor = filter_input(INPUT_POST, "valor", FILTER_DEFAULT);
      $descricao = filter_input(INPUT_POST, "descricao", FILTER_DEFAULT);
      $img_nome = $_FILES['img']['name'] ? $_FILES['img']['name'] : null;
      $caminho_temporario = $_FILES['img']['tmp_name'];
      
      $destino = rootPath("public/imgs/$img_nome");
      
      $values = [
        'nome' => $nome,
        'volume' => $volume,
        'valor' =>  $valor,
        'descricao' =>  $descricao,
        'img' =>  $img_nome
      ];
      
      $query = $this->RepoProduto->edit($_GET['id'], $values);
      if($query){
        move_uploaded_file($caminho_temporario, $destino);
      }
    }else{
      echo "Edição não foi feita";
    }
  }

}