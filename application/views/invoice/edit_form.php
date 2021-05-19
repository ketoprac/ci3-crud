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
						<a href="<?php echo site_url('invoice') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
          <form action="" method="post" enctype="multipart/form-data" >
            <h4>Ubah Data Invoice</h4>
            <input type="hidden" name="id" value="<?php echo $invoice->invoice_id?>" />
            <div class="mb-3">
              <label class="form-label">Tanggal Invoice</label>
              <input
                type="date"
                class="form-control border border-4 border-secondary border-top-0 border-end-0 border-start-0
                <?php echo form_error('tgl_invoice') ? 'is-invalid':'' ?>"
                name="tgl_invoice"
                value="<?php echo $invoice->tgl_invoice ?>"
              />
              <div class="invalid-feedback">
									<?php echo form_error('tgl_invoice') ?>
								</div>
            </div>
            <div class="mb-3">
              <label class="form-label">Nama Material</label>
              <input
                type="text"
                class="form-control border border-4 border-secondary border-top-0 border-end-0 border-start-0
                <?php echo form_error('nm_material') ? 'is-invalid':'' ?>"
                name="nm_material"
                value="<?php echo $invoice->nm_material ?>"
              />
              <div class="invalid-feedback">
									<?php echo form_error('nm_material') ?>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">No Faktur</label>
              <input
                type="number"
                class="form-control border border-4 border-secondary border-top-0 border-end-0 border-start-0
                <?php echo form_error('no_faktur') ? 'is-invalid':'' ?>"
                name="no_faktur"
                value="<?php echo $invoice->no_faktur ?>"
              />
              <div class="invalid-feedback">
									<?php echo form_error('no_faktur') ?>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Total</label>
              <input
                type="number"
                class="form-control border border-4 border-secondary border-top-0 border-end-0 border-start-0
                <?php echo form_error('total') ? 'is-invalid':'' ?>"
                name="total"
                value="<?php echo $invoice->total ?>"
              />
              <div class="invalid-feedback">
									<?php echo form_error('total') ?>
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
