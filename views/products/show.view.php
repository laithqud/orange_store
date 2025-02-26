
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.3.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-laZ3JUZ5Ln2YqhfBvadDpNyBo7w5qmWaRnnXuRwNhJeTEFuSdGbzl4ZGHAEnTozR" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="navbar-brand">
      <a class="stretched-link" href="#">
      <img src="https://orange.jo/themes/custom/orange/logo.svg" width="50" height="50" alt="Boosted - Back to Home" loading="lazy">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse align-items-end" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <span class="navbar-text ms-3">
        Navbar text with an inline element
      </span>
    </div>
  </div>
</nav>
    
<div class="container">
    <h1><center class="p-3">Prepaid Plans & Lines</center></h1>
    <p><center class="pb-3">Get exceptional Orange Jordan sim cards and prepaid lines with great offers.</center></p>
    <div class="row">
        <?php foreach($products as $product): ?>
            <div class="col-4">
                <div class="card p-4 rounded-2">
                    <img src="<?php echo $product['img_url']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <p class="card-text"><?php echo $product['price']; ?></p>
                        <a href="#" class="btn btn-primary rounded-4 text-white">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/boosted@5.3.3/dist/js/boosted.bundle.min.js" integrity="sha384-3RoJImQ+Yz4jAyP6xW29kJhqJOE3rdjuu9wkNycjCuDnGAtC/crm79mLcwj1w2o/" crossorigin="anonymous"></script>
</body>
</html>