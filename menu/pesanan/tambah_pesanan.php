<div class="card">
  <div class="card-header">
    <h5>Form Pesanan</h5>
  </div>

  <div class="card-body">
    <form method="POST" action="menu/pesanan/aksi_tambah_pesanan.php">

      <div class="row mb-3">
        <div class="col-md-6">
          <label>Pelanggan</label>
          <select name="id_pelanggan" class="form-control" required>
            <option value="">-- Pilih Pelanggan --</option>
            <!-- loop pelanggan -->
          </select>
        </div>

        <div class="col-md-6">
          <label>Tanggal Pesanan</label>
          <input type="datetime-local" name="tanggal_pesanan" class="form-control" required>
        </div>
      </div>

      <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
          <option value="pending">Pending</option>
          <option value="proses">Proses</option>
          <option value="selesai">Selesai</option>
          <option value="diambil">Diambil</option>
        </select>
      </div>

      <div class="mb-3">
        <label>Catatan</label>
        <textarea name="catatan" class="form-control" rows="3"></textarea>
      </div>

      <button class="btn btn-primary">Simpan & Tambah Detail</button>
      <a href="index.php?halaman=pesanan" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
