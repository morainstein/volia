<?php include_once "head.php";?>

<main>

<section class="container-fluid mt-2 d-flex-column">
    <h2 class="text-center container p-3">Produtos: </h2>

    <div class="container d-flex flex-wrap justify-content-center gap-4 p-3">
      <?php for($i = 0; $i < 10; $i++) { ?>
        <div class="card" style="width: 18rem;">
          <img src="/imgs/exp.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="product.php" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

</section>

</main>

<?php include_once "footer.php";?>