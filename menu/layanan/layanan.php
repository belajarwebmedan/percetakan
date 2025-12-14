<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');

$query = "
    SELECT 
        layanan.id_layanan,
        layanan.nama_layanan,
        layanan.harga_dasar,
        layanan.satuan,
        layanan.keterangan,
        kategori_layanan.nama_kategori
    FROM layanan
    LEFT JOIN kategori_layanan 
        ON layanan.id_kategori = kategori_layanan.id_kategori
";

$hasil = mysqli_query($koneksi, $query);
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<h5 class="judul-form">Data Layanan</h5>

<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">

  <a href="http://localhost/percetakan/index.php?halaman=tambah_layanan">
    <button class="btn btn-primary btn-sm mb-4">
      <i class="fa fa-plus-circle"></i> Tambah
    </button>
  </a>

  <table id="tabelUsers" class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Layanan</th>
        <th>Kategori</th>
        <th>Harga Dasar</th>
        <th>Satuan</th>
        <th>Keterangan</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>
      <?php
      $no = 1;
      while ($row = mysqli_fetch_assoc($hasil)) {
      ?>
      <tr>
        <td><?= $no ?></td>
        <td><?= $row['nama_layanan'] ?></td>
        <td><?= $row['nama_kategori'] ?? '-' ?></td>
        <td>Rp <?= number_format($row['harga_dasar'], 0, ',', '.') ?></td>
        <td><?= $row['satuan'] ?></td>
        <td><?= $row['keterangan'] ?></td>
        <td>
          <a href="http://localhost/percetakan/index.php?halaman=edit_layanan&id_layanan=<?= $row['id_layanan'] ?>">
            <button class="btn btn-sm btn-warning">
              <i class="fa fa-edit"></i>
            </button>
          </a>

          <button class="btn btn-sm btn-danger"
            onclick="hapusData(<?= $row['id_layanan']; ?>)">
            <i class="fa fa-trash"></i>
          </button>
        </td>
      </tr>
      <?php
        $no++;
      }
      ?>
    </tbody>
  </table>
</div>

<script>
function hapusData(id) {
    Swal.fire({
        title: "Hapus data?",
        text: "Data layanan akan dihapus permanen!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Ya, hapus!",
        cancelButtonText: "Batal"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location =
              "http://localhost/percetakan/menu/layanan/aksi_hapus_layanan.php?id_layanan=" + id;
        }
    });
}
</script>
