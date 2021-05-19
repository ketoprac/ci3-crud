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
          Selamat datang di Sistem Informasi Konstruksi!
        </div>
        <div class="card-body d-flex justify-content-center p-5">
				<!-- Card Table -->
				<div class="card text-white bg-primary mb-3 me-4 text-center" style="width: 12rem; height: 18rem;">
					<div class="card-body">
						<h5 class="card-title mt-5">Pekerja</h5>
						<h1 class="card-text"><i class="fas fa-users"></i></h1>
						<a class="btn btn-light" href="<?php echo site_url('pekerja') ?>">Lihat Data</a>
					</div>
				</div>
				<div class="card text-white bg-secondary mb-3 me-4 text-center" style="width: 12rem; height: 18rem;">
					<div class="card-body">
						<h5 class="card-title mt-5">Material</h5>
						<h1 class="card-text"><i class="fas fa-hammer"></i></h1>
						<a class="btn btn-light" href="<?php echo site_url('material') ?>">Lihat Data</a>
					</div>
				</div>
				<div class="card text-white bg-success mb-3 me-4 text-center" style="width: 12rem; height: 18rem;">
					<div class="card-body">
						<h5 class="card-title mt-5">Dokumentasi</h5>
						<h1 class="card-text"><i class="fas fa-file-image"></i></h1>
						<a class="btn btn-light" href="<?php echo site_url('dokumentasi') ?>">Lihat Data</a>
					</div>
				</div>
				<div class="card text-white bg-danger mb-3 text-center" style="width: 12rem; height: 18rem;">
					<div class="card-body">
						<h5 class="card-title mt-5">Invoice</h5>
						<h1 class="card-text"><i class="fas fa-file-invoice"></i></h1>
						<a class="btn btn-light" href="<?php echo site_url('invoice') ?>">Lihat Data</a>
					</div>
				</div>

        <!-- logoutModal -->
        <?php $this->load->view("_partials/LogoutModal.php") ?>
        <!-- logoutModal end -->

				<!-- Card Table End -->
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
