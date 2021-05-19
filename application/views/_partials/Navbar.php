<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url("") ?>">Sistem Administrasi</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url("") ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link active dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Data
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo site_url("pekerja") ?>">Pekerja</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url("material") ?>">Material</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url("dokumentasi") ?>">Dokumentasi</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url("invoice") ?>">Invoice</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <button type="button" data-bs-toggle="modal" data-bs-target="#logoutModal" class="btn btn-outline-primary" type="submit">Logout</a>
      </form>
    </div>
  </div>
</nav>