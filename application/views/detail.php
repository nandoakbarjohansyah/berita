<div class="container-fluid">
    <div class="card mb-3">
        <img height="700" class="card-img-top" src="<?= base_url(); ?>assets/img/<?= $postingan->foto ?>" alt="Card image cap">
        <div class="card-body">
            <h3 style="color:black" class="text-capitalize card-title text-center"><?= $postingan->judul ?></h3>
            <p class="card-text"><?= $postingan->caption ?></p>
        </div>
    </div>
</div>