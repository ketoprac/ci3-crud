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
    <!-- Form Input -->
    <div class="form-input">
      <div class="container">
      <!-- Alert -->
      <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success mt-3" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
      <!-- Alert end -->
        <div class="card bg-light mx-auto my-3">
          <div class="card-header">
          <a href="<?php echo site_url('material') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
          <form action="<?php echo site_url('materials/add') ?>" method="post" enctype="multipart/form-data" >
            <h4>Tambah Data Material</h4>
            <div class="mb-3">
              <label class="form-label">Nama Material</label>
              <input
                type="text"
                class="form-control border border-4 border-secondary border-top-0 border-end-0 border-start-0
                <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                name="nama"
              />
              <div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
            </div>
            <div class="mb-3">
              <label class="form-label">Jumlah</label>
              <input
                type="number"
                class="form-control border border-4 border-secondary border-top-0 border-end-0 border-start-0
                <?php echo form_error('jumlah') ? 'is-invalid':'' ?>"
                name="jumlah"
              />
              <div class="invalid-feedback">
									<?php echo form_error('jumlah') ?>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Tanggal pemakaian</label>
              <input
                type="date"
                class="form-control border border-4 border-secondary border-top-0 border-end-0 border-start-0
                <?php echo form_error('tgl_pemakaian') ? 'is-invalid':'' ?>"
                name="tgl_pemakaian"
              />
              <div class="invalid-feedback">
									<?php echo form_error('tgl_pemakaian') ?>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Gambar material</label>
              <input
                type="file"
                class="form-control border border-4 border-secondary border-top-0 border-end-0 border-start-0
                <?php echo form_error('gbr_material') ? 'is-invalid':'' ?>"
                id="inputGroupFile02"
                name="gbr_material"
              />
              <div class="invalid-feedback">
									<?php echo form_error('gbr_material') ?>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </form>
        <!-- logoutModal -->
        <?php $this->load->view("_partials/LogoutModal.php") ?>
        <!-- logoutModal end -->          
        </div>
      </div>
    </div>
    <!-- End of Form Input -->
    <!-- Javascript -->
    <?php $this->load->view("_partials/Javascript.php") ?>
    <!-- End of Javascript -->
  </body>
</html>
