<?php 


class Produto
{
  private \PDO $conn;

  public function __construct($conn)
  {
    $this->conn = $conn;
  }

  public function all()
  {
    $stmt = $this->conn->query("SELECT * FROM produtos");
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
  }

}