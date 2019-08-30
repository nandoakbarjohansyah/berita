<div class="container-fluid">
    <?php foreach ($postingan as $pos) { ?>
    <div class="card mb-3">
        <img width="300" height="500" class="card-img-top" src="<?= base_url(); ?>assets/img/<?= $pos['foto']; ?>" alt="Card image cap">
        <div class="card-body">
            <h3 style="color:black" class="text-capitalize card-title text-center"><?= $pos['judul']; ?></h3>
            <p class="card-text"><?= $pos['caption']; ?></p>
            <td><?= anchor('Detail/detail/' . $pos['id'], '<div class="btn btn-primary">Baca lebih</div>') ?>
            </td>
        </div>
    </div>
    <?php } ?>
</div>