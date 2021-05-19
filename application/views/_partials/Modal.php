<?php foreach ($pekerjas as $pekerja): ?>
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
        <a type="button" class="btn btn-danger" href="<?php echo site_url('pekerjas/delete/'.$pekerja->pekerja_id) ?>">Hapus data</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>