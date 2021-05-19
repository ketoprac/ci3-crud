<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Head -->
  <?php $this->load->view("_partials/Head.php") ?>
  <!-- End of Head -->
    <title>Sistem Informasi Konstruksi</title>
  </head>
  <body>
    <!-- Form Input -->
      <div class="container">
      <div class="login-form">
      <div class="container">
        <form action="<?= site_url('login') ?>" method="POST" class="mx-auto bg-dark">
          <h4 class="mb-4">Login</h4>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input
              type="text"
              class="form-control border border-4 border-primary border-top-0 border-end-0 border-start-0"
              name="username"
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >Password</label
            >
            <input
              type="password"
              class="form-control border border-4 border-primary border-top-0 border-end-0 border-start-0"
              id="exampleInputPassword1"
              name="password"
            />
          </div>
          <button type="submit" class="btn btn-primary">Masuk</button>
        </form>
      </div>
    </div>

      <!-- Javascript -->
    <?php $this->load->view("_partials/Javascript.php") ?>
    <!-- End of Javascript -->
  </body>
</html>
