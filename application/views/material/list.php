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
          Data Material
          <a href="<?php echo site_url("materials/add") ?>" class="fs-5"><i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <!-- <th scope="col">ID</th> -->
                <th scope="col">Nama Material</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tanggal Pemakaian</th>
                <th scope="col">Gambar Material</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($materials as $material): ?>
              <tr>
                <!-- <th scope="row"><?php echo $material->material_id ?></th> -->
                <td><?php echo $material->nama ?></td>
                <td><?php echo $material->jumlah ?></td>
                <td><?php echo $material->tgl_pemakaian ?></td>
                <!-- <td><?php echo $material->gbr_material ?></td> -->
                <td>
                  <a onclick="showImage('<?php echo base_url('upload/material/'.$material->gbr_material) ?>')" >
                    <img style="cursor: pointer" src="<?php echo base_url('upload/material/'.$material->gbr_material) ?>" width="64" class="img-thumbnail" />
                  </a>
              <!-- Modal Image -->
              <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gambar Material</h5>
                      <button type="button" class="btn-close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                      </button>
                    </div>
                    <div class="modal-body">
                      <img class="show-image rounded p-3 img-fluid" src="#" />
                    </div>
                  </div>
                </div>
              </div>
            <!-- Modal Image End -->
                </td>
                <td>
                  <a href="<?php echo site_url("materials/edit/".$material->material_id) ?>" class="btn btn-primary">Ubah</a>
                  <a onclick="showModal('<?php echo site_url('materials/delete/'.$material->material_id) ?>')" class="btn btn-danger">Hapus</a>
                  <!-- <a onclick="showModal()" class="btn btn-danger" id="btn-delete">Hapus</a> -->
                  <!-- <a href="<?php echo site_url('materials/delete/'.$material->material_id) ?>" onclick="deleteConfirm(url)" class="btn btn-danger btn-delete">Hapus</a> -->

            <!-- Modal Delete -->
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
            <!-- End of Modal Delete -->
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
    function showImage(url) {
        $("#imageModal").modal("show");
        $(".show-image").attr("src", url)
    }
    </script>
    <!-- End of Javascript -->
  </body>
</html>
