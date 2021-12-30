<div class="container py-5">
    <div class="row align-items-center justify-space-around">


    <?php foreach($crew as $item) : ?>

        <div class="col-sm-12 col-md-6 col-lg-3 mt-2">
            <div class="card">
                <img class="imageCard" src="<?= $item['imagePath'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><strong><?= $item['name'] ?></strong></h5>
                    <h5 class="card-title"><?= $item['poste'] ?></h5>
                    <p class="card-text"><?= $item['telephone'] ?> </p>
                    <a href="pagestaff.php?id=<?= $item['id'] ?>" class="btn btn-primary w-100">Voir</a>
                </div>
            </div>
        </div>

    <?php endforeach ?>

    </div>
</div>
    

