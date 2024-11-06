<?php 

namespace Volia\Repository;

class Produto
{
  private \PDO $conn;

  public function __construct($conn)
  {
    $this->conn = $conn;
  }

  public function selectAll()
  {
    $stmt = $this->conn->query("SELECT * FROM produtos");
    $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    return $resultado;
  }

  public function selectById(int $id){
    $stmt = $this->conn->query("SELECT * FROM produtos WHERE id = $id");
    $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $resultado;
  }

  public function insert(string $nome, int $volume, float $valor, string $descricao, string $img_nome){
    $stmt = $this->conn->prepare("INSERT INTO produtos (nome, volume, valor, descricao, img) VALUES (:nome, :volume, :valor, :descricao, :img_nome)");
    $stmt->bindValue(':nome',$nome);
    $stmt->bindValue(':volume',$volume);
    $stmt->bindValue(':valor',$valor);
    $stmt->bindValue(':descricao',$descricao);
    $stmt->bindValue(':img_nome',$img_nome);
    return $stmt->execute();
  }

  public function edit(int $id, array $values){

    $chaves = [];

    foreach($values as $key => $value){
      if($value !== null){
        array_push($chaves,"$key = :$key");
      }
    }

    $colunas = implode(", ", $chaves);

    $stmt = $this->conn->prepare("UPDATE produtos SET $colunas WHERE id = :id");
    
    foreach($values as $key => $value){
      if($value !== null){
        $stmt->bindValue(":$key", $value);
      }
    }
    $stmt->bindValue(':id',$id);
    return $stmt->execute();
  }

  public function delete(int $id){
    $stmt = $this->conn->prepare("DELETE FROM produtos WHERE id = :id");
    $stmt->bindValue(':id',$id);
    return $stmt->execute();
  }
}