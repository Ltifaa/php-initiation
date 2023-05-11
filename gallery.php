<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include 'includes/_head.php'; ?>
</head>

<body>

  <?php
  include 'includes/_navbar.php';
  include 'data.php';
  ?>
  <main class="container-xl bg-white py-4">
    <h1><?php echo $title; ?></h1>
    <p> <?php echo $intro; ?></p>

    <div class="row">
      <?php
      foreach ($products as $product) {
      ?>

        <div class="col-12 col-md-3 col-lg-2 mb-3">
          <div class="card">
            <a href="images/<?php echo $product["image"]; ?>" data-lightbox="produit" data-title="<?php echo $product ["name"];?>">
            <img src="images/<?php echo $product["image"]; ?>" class="card-img-top" alt="<?php echo $product["name"];?>">
            </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo $product["name"]; ?></h5>
              <p class="card-text"><?php echo $product["description"]; ?></p>
              <p class="card-text"><?php echo $product["price"]; ?>$</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

      <?php

      }
      ?>

    </div>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js/lightbox.min.js"></script>
</body>

</html>