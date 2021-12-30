<div class="container py-5">

    <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
            <div class="card">
                <img class="imageCard" src="<?= $product['imagePath'] ?>" class="card-img-top" alt="...">
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $product['name'] ?></h5>
                    <p class="card-text"><?= formatPriceEuro($product['price']) ?></p>
                    <a href="#" class="btn btn-primary w-100">Ajouter au panier</a>
                </div>
            </div>
        </div>

    </div>

</div>