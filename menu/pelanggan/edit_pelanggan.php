<?php
$id_pelanggan = $_GET['id_pelanggan'];
$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');

$hasil = mysqli_query($koneksi,
    "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'"
);
$row = mysqli_fetch_array($hasil);
?>

<div class="formulir">
<form action="menu/pelanggan/aksi_edit_pelanggan.php" method="POST">
<h5 class="judul-form">Form Edit Pelanggan</h5>

<style>
.label-col{width:150px;white-space:nowrap;padding-right:5px;}
</style>

<table width="100%">
<tr>
<td class="label-col">Nama Pelanggan</td>
<td>
<input type="text" name="nama" value="<?= $row['nama'] ?>" class="form-control" required>
</td>
</tr>

<tr>
<td class="label-col">No. Telepon</td>
<td>
<input type="text" name="telp" value="<?= $row['telp'] ?>" class="form-control" required>
</td>
</tr>

<tr>
<td class="label-col">Alamat</td>
<td>
<textarea name="alamat" class="form-control" rows="4"><?= $row['alamat'] ?></textarea>
</td>
</tr>

<tr>
<td colspan="2">
<button class="btn btn-primary mt-3" type="submit">Simpan</button>
<a href="http://localhost/percetakan/index.php?halaman=pelanggan">
<button class="btn btn-success mt-3" type="button">Cancel</button>
</a>
</td>
</tr>

<input type="hidden" name="id_pelanggan" value="<?= $id_pelanggan ?>">
</table>
</form>
</div>
