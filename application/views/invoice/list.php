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
          Data Invoice
          <a href="<?php echo site_url("invoices/add") ?>" class="fs-5"><i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <!-- <th scope="col">ID</th> -->
                <th scope="col">Tanggal Invoice</th>
                <th scope="col">Nama Material</th>
                <th scope="col">No Faktur</th>
                <th scope="col">Total</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($invoices as $invoice): ?>
              <tr>
                <!-- <th scope="row"><?php echo $invoice->invoice_id ?></th> -->
                <td><?php echo $invoice->tgl_invoice ?></td>
                <td><?php echo $invoice->nm_material ?></td>
                <td><?php echo $invoice->no_faktur ?></td>
                <td><?php echo $invoice->total ?></td>
                <td>
                  <a href="<?php echo site_url("invoices/edit/".$invoice->invoice_id) ?>" class="btn btn-primary">Ubah</a>
                  <a onclick="showModal('<?php echo site_url('invoices/delete/'.$invoice->invoice_id) ?>')" class="btn btn-danger">Hapus</a>

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
