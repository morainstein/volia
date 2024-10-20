<?php 

namespace Volia\Entity\Cliente;

class Cliente{

  public readonly int $id;  
  public readonly string $name;  
  public readonly string $email;  
  public readonly string $senha;  
  public readonly string $data_nasc;
  private Volia\Repository\Cliente $RepoCliente;
  
  public function __construct(Volia\Repository\Cliente $RepoCliente){
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