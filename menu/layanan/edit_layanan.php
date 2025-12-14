<?php
$id_layanan = $_GET['id_layanan'];
$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');

$hasil = mysqli_query($koneksi,
    "SELECT layanan.*, kategori_layanan.nama_kategori
     FROM layanan
     LEFT JOIN kategori_layanan ON layanan.id_kategori = kategori_layanan.id_kategori
     WHERE id_layanan = '$id_layanan'"
);

$row = mysqli_fetch_array($hasil);
$kategori = mysqli_query($koneksi, "SELECT * FROM kategori_layanan");
?>

<div class="formulir">
<form action="menu/layanan/aksi_edit_layanan.php" method="POST">
<h5 class="judul-form">Form Edit Layanan</h5>

<style>
.label-col{width:150px;white-space:nowrap;padding-right:5px;}
</style>

<table width="100%">
<tr>
<td class="label-col">Kategori</td>
<td>
<select name="id_kategori" class="form-control" required>
<?php while($k = mysqli_fetch_array($kategori)){ ?>
<option value="<?= $k['id_kategori'] ?>" <?= $k['id_kategori']==$row['id_kategori']?'selected':'' ?>>
<?= $k['nama_kategori'] ?>
</option>
<?php } ?>
</select>
</td>
</tr>

<tr>
<td class="label-col">Nama Layanan</td>
<td>
<input type="text" name="nama_layanan" value="<?= $row['nama_layanan'] ?>" class="form-control" required>
</td>
</tr>

<tr>
<td class="label-col">Harga Dasar</td>
<td>
<input type="number" name="harga_dasar" value="<?= $row['harga_dasar'] ?>" class="form-control" required>
</td>
</tr>

<tr>
<td class="label-col">Satuan</td>
<td>
<input type="text" name="satuan" value="<?= $row['satuan'] ?>" class="form-control">
</td>
</tr>

<tr>
<td class="label-col">Keterangan</td>
<td>
<textarea name="keterangan" class="form-control" rows="4"><?= $row['keterangan'] ?></textarea>
</td>
</tr>

<tr>
<td colspan="2">
<button class="btn btn-primary mt-3" type="submit">Simpan</button>
<a href="http://localhost/percetakan/index.php?halaman=layanan">
<button class="btn btn-success mt-3" type="button">Cancel</button>
</a>
</td>
</tr>

<input type="hidden" name="id_layanan" value="<?= $id_layanan ?>">
</table>
</form>
</div>
