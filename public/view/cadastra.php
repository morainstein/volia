<?php 
$Produto->registerProduct();

?>

<form class="container-fluid mt-2 d-flex-column" action="" method="post" enctype="multipart/form-data">
  <label> Nome do produto:
    <input type="text"
      name="nome"
      required
      placeholder="Nome do produto">
  </label>
  <label> Quantidade em ml:
    <input type="number"
      name="volume"
      required
      placeholder="Quantidade em ml">
  </label>
  <label> Valor do produto:
    <input type="text"
      name="valor"
      required
      placeholder="Valor do produto">
  </label>
  <label> Descrição do produto:
    <textarea
      name="descricao"
      required
      placeholder="Descrição do produto"></textarea>
  </label>
  <label> Imagem do produto:
    <input type="file"
      name="img"
      required
      accept="image/*">
  </label>
  <input type="submit" value="Cadastrar">
</form>

