<!DOCTYPE html>
<html lang="en">
  <head>
   <!-- Head -->
    <?php $this->load->view("_partials/Head.php") ?>
   <!-- End of Head -->
    <title>Sistem Informasi Konstruksi</title>
  </head>
  <body>
    <!-- Navbar -->
    <?php $this->load->view("_partials/Navbar.php") ?>
    <!-- End of Navbar -->
    <!-- List -->
    <div class="container">
      <div class="card mt-5">
        <div class="card-header fs-3">
          Data Pekerja
          <a href="<?php echo site_url("pekerjas/add") ?>" class="fs-5"><i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <!-- <th scope="col">ID</th> -->
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kontrak Mulai</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($pekerjas as $pekerja): ?>
              <tr>
                <!-- <th scope="row"><?php echo $pekerja->pekerja_id ?></th> -->
                <td><?php echo $pekerja->nama ?></td>
                <td><?php echo $pekerja->jabatan ?></td>
                <td><?php echo $pekerja->alamat ?></td>
                <td><?php echo $pekerja->kontrak ?></td>
                <td>
                  <a href="<?php echo site_url("pekerjas/edit/".$pekerja->pekerja_id) ?>" class="btn btn-primary">Ubah</a>
                  <a onclick="showModal('<?php echo site_url('pekerjas/delete/'.$pekerja->pekerja_id) ?>')" class="btn btn-danger">Hapus</a>
                  <!-- <a onclick="showModal()" class="btn btn-danger" id="btn-delete">Hapus</a> -->
                  <!-- <a href="<?php echo site_url('pekerjas/delete/'.$pekerja->pekerja_id) ?>" onclick="deleteConfirm(url)" class="btn btn-danger btn-delete">Hapus</a> -->
            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Apakah anda yakin ingin menghapus data?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                    <a type="button" class="btn btn-danger" id="btn-delete" href="#">Hapus data</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Modal -->
        <!-- logoutModal -->
        <?php $this->load->view("_partials/LogoutModal.php") ?>
        <!-- logoutModal end -->
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- End of List -->
    <!-- Javascript -->
    <?php $this->load->view("_partials/Javascript.php") ?>
    <script>
    function showModal(url) {
        $("#deleteModal").modal("show");
        $("#btn-delete").attr('href', url); 
    }
    </script>
    <!-- End of Javascript -->
  </body>
</html>
