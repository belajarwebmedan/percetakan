<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');
$hasil = mysqli_query($koneksi, "SELECT * FROM pelanggan");
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<h5 class="judul-form">Data Pelanggan</h5>

<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
<a href="http://localhost/percetakan/index.php?halaman=tambah_pelanggan">
<button class="btn btn-primary btn-sm mb-4">
<i class="fa fa-plus-circle"></i> Tambah
</button>
</a>

<table id="tabelUsers" class="table table-hover">
<thead>
<tr>
<th>No</th>
<th>Nama Pelanggan</th>
<th>Telepon</th>
<th>Alamat</th>
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
<td><?= $row['nama'] ?></td>
<td><?= $row['telp'] ?></td>
<td><?= $row['alamat'] ?></td>
<td>
<a href="http://localhost/percetakan/index.php?halaman=edit_pelanggan&id_pelanggan=<?= $row['id_pelanggan'] ?>">
<button class="btn btn-sm btn-warning">
<i class="fa fa-edit"></i>
</button>
</a>

<button class="btn btn-sm btn-danger" onclick="hapusData(<?= $row['id_pelanggan']; ?>)">
<i class="fa fa-trash"></i>
</button>
</td>
</tr>
<?php $no++; } ?>
</tbody>
</table>
</div>

<script>
function hapusData(id) {
Swal.fire({
title: "Hapus data?",
text: "Data pelanggan akan dihapus permanen!",
icon: "warning",
showCancelButton: true,
confirmButtonColor: "#d33",
cancelButtonColor: "#3085d6",
confirmButtonText: "Ya, hapus!",
cancelButtonText: "Batal"
}).then((result) => {
if (result.isConfirmed) {
window.location =
"http://localhost/percetakan/menu/pelanggan/aksi_hapus_pelanggan.php?id_pelanggan=" + id;
}
});
}
</script>
