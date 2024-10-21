<?php

$log_option = "<button onclick='LoginOn()'>Logar</button>";

if(!empty($_SESSION)){
  $nome = $_SESSION['nome'];
  $log_option = "<h5>Bem vindo, $nome</h5> <a id='sair' href='/logout'>Sair</a>";

  if($_SESSION['acesso'] == 'adm'){
    $log_option .= "<a href='/admin'>Admin</a>";
  }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/style.css">
  <style>
  </style>
  <title>Vó lia produtos</title>
</head>
<body class="bg-light">
  <header>
    <h1>Vó Lia - Produtos artesanais</h1>
    <div id="log_option">
      <?= $log_option ?>
    </div>
  </header>

  <section id="login">
    <button onclick="LoginOff()">Fechar</button>
    <form action="/login" method="post">
      <input type="text" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" value="Login">
    </form>

  </section>