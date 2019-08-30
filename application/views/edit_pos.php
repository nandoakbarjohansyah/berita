<div class="container-fluid">
    <div class="content-wrapper">
        <div class="content">


            <?= form_open_multipart("Pos/edit"); ?>
            <div class=" form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $list['judul']; ?>">

            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <img src="<?= base_url(); ?>assets/img/<?= $list['foto'] ?>">
                <input type="text" class="form-control" name="foto" id="foto" value="<?= $list['foto']; ?>">
            </div>
            <div class="form-group">
                <label for="caption">Caption</label>
                <textarea class="form-control" name="caption" rows="3" id="caption"></textarea>
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Edit data</button>
            </form>
        </div>
    </div>
</div>