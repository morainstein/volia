<?php

namespace Volia\Repository;

use Exception;

class Cliente
{
  private \PDO $conn;

  public function __construct($conn)
  {
    $this->conn = $conn;
  }

  public function login(Entity\Cliente $EntCliente){
    $SQL = "SELECT * FROM cliente WHERE email = :email AND senha = :senha";
    $stmt = $this->conn->prepare($SQL);
    $stmt->bindValue(':email', $EntCliente->email);
    $stmt->bindValue(':senha', $EntCliente->senha);
    $stmt->execute();
    return $stmt->fetch(\PDO::FETCH_ASSOC);
  }
}