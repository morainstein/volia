<?php 

namespace Volia\Entity;
use Volia\Repository\Cliente as RepoCliente;

class Cliente{

  public readonly int $id;  
  public readonly string $name;  
  public readonly string $email;  
  public readonly string $senha;  
  public readonly string $data_nasc;
  private RepoCliente $RepoCliente;
  
  public function __construct(RepoCliente $RepoCliente){
    $this->RepoCliente = $RepoCliente;
  }

  public function fazLogin(){
    $query = $this->RepoCliente->login($this);
    if($query){
      return true;
    }else{
      return false;
    }
  }

}