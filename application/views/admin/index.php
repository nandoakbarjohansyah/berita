<!-- Page Wrapper -->


      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data postingan</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-plus"> Tambah data</i>
        </button>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Caption</th>
                    <th>Delete</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Caption</th>
                    <th>Delete</th>
                    <th>Edit</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php foreach ($postingan as $pos) { ?>
                  <tr>
                    <td><?= $pos['id']; ?></td>
                    <td><?= $pos['judul']; ?></td>
                    <td><?= $pos['foto']; ?></td>
                    <td><?= $pos['caption']; ?></td>
                    <td onclick="javascript: return confirm('anda yakin hapus ?') ">
                      <?= anchor('pos/hapus/' . $pos['id'], '<button class="btn btn-danger"><i class="fa fa-trash"></i></button>') ?>
                    </td>
                    <td>
                      <?= anchor('pos/edit/' . $pos['id'], ' <button class="btn btn-success"><i class="fa fa-edit"></i></button>') ?>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Your Website 2019</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->


<!-- Modal tambah-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form input data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('pos/tambah'); ?>
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul">
          </div>
          <div class="form-group">
            <label for="foto">Gambar</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
          </div>
          <div class="form-group">
            <label for="caption">Caption</label>
            <textarea class="form-control" id="caption" name="caption" rows="5"></textarea>
          </div>
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Tambah data</button>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>
