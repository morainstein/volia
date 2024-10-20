<?php 

namespace Volia\Repository;

class Produto
{
  private \PDO $conn;

  public function __construct($conn)
  {
    $this->conn = $conn;
  }

  public function SelectAll()
  {
    $stmt = $this->conn->query("SELECT * FROM produtos");
    $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    return $resultado;
  }

  public function SelectById($id){
    $stmt = $this->conn->query("SELECT * FROM produtos WHERE id = $id");
    $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $resultado;
  }

}