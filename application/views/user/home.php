<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Berita hari ini</h1>
    <p class="mb-4">Berita terbagus ya di web ini saja</p>
    <div class="row">
        <?php foreach ($postingan as $pos) { ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img width="300" height="300" class="card-img-top" src="<?= base_url(); ?>assets/img/<?= $pos['foto']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h3 style="color:black" class="text-capitalize card-title text-center"><?= $pos['judul']; ?></h3>
                        <!-- <p class="card-text"><?= $pos['caption']; ?></p> -->
                        <td><?= anchor('pos/detail/' . $pos['id'], '<div class="btn btn-primary">Baca lebih</div>') ?>
                        </td>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>