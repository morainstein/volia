<?php 
$Produto->deleteProduct();
$Produto->editProduct();
$p = $Produto->produtoById($_GET['id']);
?>

<form class="container-fluid mt-2 d-flex-column" action="" method="post" enctype="multipart/form-data">
  <label> Nome do produto:
    <input type="text"
      name="nome"
      required
      placeholder="<?=$p['nome']?>"
      value="<?=$p['nome']?>">
  </label>
  <label> Quantidade em ml:
    <input type="number"
      name="volume"
      required
      placeholder="<?=$p['volume']?>"
      value="<?=$p['volume']?>">
  </label>
  <label> Valor do produto:
    <input type="text"
      name="valor"
      required
      placeholder="<?=$p['valor']?>"
      value="<?=$p['valor']?>">
  </label>
  <label> Descrição do produto:
    <textarea
      name="descricao"
      placeholder="<?=$p['descricao']?>"><?=$p['descricao']?></textarea>
  </label>
  <label> Imagem do produto:
    <input type="file"
      name="img"
      accept="image/*">
  </label>
  <input type="submit" value="Editar">
</form>

<form action="" method="post">
  <input type="hidden" name="del" value="<?=$p['id']?>">
  <input type="submit" value="Apagar">
</form>