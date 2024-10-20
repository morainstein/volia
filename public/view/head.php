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
    <button onclick="LoginOn()">Logar</button>
  </header>

  <section id="login">
    <button onclick="LoginOff()">Fechar</button>
    <form action="/login" method="post">
      <input type="text" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" value="Login">
    </form>

  </section>