.<!DOCTYPE html>
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
						<a href="<?php echo site_url('dokumentasi') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
          <form action="<?php echo site_url('dokumentasis/add') ?>" method="post" enctype="multipart/form-data" >
            <h4>Tambah Data Dokumentasi</h4>
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
            <div class="mb-3">
              <label class="form-label">Tanggal Dokumentasi</label>
              <input
                type="date"
                class="form-control border border-4 border-secondary border-top-0 border-end-0 border-start-0
                <?php echo form_error('tgl_dokumentasi') ? 'is-invalid':'' ?>"
                name="tgl_dokumentasi"
              />
              <div class="invalid-feedback">
									<?php echo form_error('tgl_dokumentasi') ?>
								</div>
            </div>
            <div class="mb-3">
              <label class="form-label">Nama Apartemen</label>
              <input
                type="text"
                class="form-control border border-4 border-secondary border-top-0 border-end-0 border-start-0
                <?php echo form_error('nm_apartemen') ? 'is-invalid':'' ?>"
                name="nm_apartemen"
              />
              <div class="invalid-feedback">
									<?php echo form_error('nm_apartemen') ?>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Nama pekerja</label>
              <input
                type="text"
                class="form-control border border-4 border-secondary border-top-0 border-end-0 border-start-0
                <?php echo form_error('nm_pekerja') ? 'is-invalid':'' ?>"
                name="nm_pekerja"
              />
              <div class="invalid-feedback">
									<?php echo form_error('nm_pekerja') ?>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Lokasi</label>
              <input
                type="text"
                class="form-control border border-4 border-secondary border-top-0 border-end-0 border-start-0
                <?php echo form_error('lokasi') ? 'is-invalid':'' ?>"
                name="lokasi"
              />
              <div class="invalid-feedback">
									<?php echo form_error('lokasi') ?>
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
