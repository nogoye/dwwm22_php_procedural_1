<div class="container py-5">

    <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
            <div class="card">
                <img class="imageCard" src="<?= $staff['imagePath'] ?>" class="card-img-top" alt="...">
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><strong><?= $staff['name'] ?></strong></h5>
                    <h5 class="card-title"><?= $staff['poste'] ?></h5>
                    <p class="card-text"><?= $staff['telephone'] ?></p>
                </div>
            </div>
        </div>

    </div>

</div>