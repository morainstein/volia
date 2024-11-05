<?php 
$p = $Produto->ProdutoById($_GET['id']);
?>

  <section class="container mt-5 d-flex-column justify-content-center">
  <h2 class="text-center"><?=$p['nome']?></h2>
    <div class="card mb-3" style="width: auto; height: auto">
      <div class="row g-0">
        <div class="col-md-5">
          <img src="/imgs/<?=$p['img']?>" id="img_product" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-6">
          <div class="card-body text-center">
            <h3 class="card-title"><?="R$".$p['valor']?> - <?=$p['volume']."ml"?></h3>
            <p class="card-text"><?=$p['descricao']?></p>
          </div>
        </div>
      </div>
    </div>

  </div>
  </section>