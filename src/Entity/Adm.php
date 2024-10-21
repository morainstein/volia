<?php 

namespace Volia\Entity;

class Adm{

  private \PDO $conn;
  
  public function __construct($conn){
    $this->conn = $conn;
  }

  public function fazLogin(){
    if(!empty($_POST)){

      $query = "SELECT * FROM administradores WHERE email = :email AND senha = :senha";
      
      $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
      $password = filter_input(INPUT_POST, "password", FILTER_DEFAULT);
      
      $stmt = $this->conn->prepare($query);
      $stmt->bindValue(':email', $email);
      $stmt->bindValue(':senha', $password);
      $stmt->execute();
      
      if($stmt->rowCount() == 1){
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        $_SESSION['id'] = $result['id'];
        $_SESSION['nome'] = $result['nome'];
        $_SESSION['acesso'] = 'adm';
        header("Location: /");
      }elseif($stmt->rowCount() == 0){
        header("Location: /admin?msg=lginvld");
      }
    }
  }
}