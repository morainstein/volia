<?php include_once "head.php";
$produtos = $Produto->listAll();

?>
<main>

<section class="container-fluid mt-2 d-flex-column">
    <h2 class="text-center container p-3">Produtos: </h2>

    <div class="container d-flex flex-wrap justify-content-center gap-4 p-3">
      <?php foreach($produtos as $p) { ?>
        <div class="card" style="width: 18rem;">
          <img src="/imgs/<?=$p['img']?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title"><?=$p['nome']?></h3>
            <h4 class="card-title"><?="R$".$p['valor']?> - <?=$p['volume']."ml"?></h4>
            <p class="card-text"><?=$p['descricao']?></p>
            <a href="/product?id=<?=$p['id']?>" class="btn btn-primary">Página do produto</a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

</section>

</main>

<?php  include_once "footer.php";?>