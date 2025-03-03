
<?php
require_once 'views/nav.view.php';
    ?>
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
<?php 
require_once 'views/footer.view.php';
?>

<script src="https://cdn.jsdelivr.net/npm/boosted@5.3.3/dist/js/boosted.bundle.min.js" integrity="sha384-3RoJImQ+Yz4jAyP6xW29kJhqJOE3rdjuu9wkNycjCuDnGAtC/crm79mLcwj1w2o/" crossorigin="anonymous"></script>
</body>
</html>
