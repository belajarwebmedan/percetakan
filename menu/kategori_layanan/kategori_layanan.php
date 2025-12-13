<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');
$hasil = mysqli_query($koneksi, "SELECT * FROM kategori_layanan");
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<h5 class="judul-form">Data Kategori Layanan</h5>

<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
  <a href="http://localhost/percetakan/index.php?halaman=tambah_kategori_layanan">
    <button class="btn btn-primary btn-sm mb-4">
      <i class="fa fa-plus-circle"></i> Tambah
    </button>
  </a>

  <table id="tabelUsers" class="table table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Kategori</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>
      <?php
      $no = 1;
      while ($row = mysqli_fetch_array($hasil)) {
      ?>
      <tr>
        <td><?= $no ?></td>
        <td><?= $row['nama_kategori'] ?></td>
        <td><?= $row['deskripsi'] ?></td>
        <td>
          <a href="http://localhost/percetakan/index.php?halaman=edit_kategori_layanan&id_kategori=<?= $row['id_kategori'] ?>">
            <button class="btn btn-sm btn-warning">
              <i class="fa fa-edit"></i>
            </button>
          </a>

          <button class="btn btn-sm btn-danger" onclick="hapusData(<?= $row['id_kategori']; ?>)">
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
        text: "Data akan dihapus permanen!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Ya, hapus!",
        cancelButtonText: "Batal"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location =
              "http://localhost/percetakan/menu/kategori_layanan/aksi_hapus_kategori_layanan.php?id_kategori=" + id;
        }
    });
}
</script>
