<div class="formulir">
<form action="menu/layanan/aksi_tambah_layanan.php" method="POST">

<h5 class="judul-form">Form Tambah Layanan</h5>

<style>
.label-col{width:150px;white-space:nowrap;padding-right:5px;}
</style>

<table width="100%">
<tr>
<td class="label-col">Kategori</td>
<td>
<select name="id_kategori" class="form-control" required>
<option value="">-- Pilih Kategori --</option>
<?php
$koneksi = mysqli_connect('localhost','root','','db_percetakan');
$q = mysqli_query($koneksi,"SELECT * FROM kategori_layanan");
while($k = mysqli_fetch_array($q)){
    echo "<option value='$k[id_kategori]'>$k[nama_kategori]</option>";
}
?>
</select>
</td>
</tr>

<tr>
<td class="label-col">Nama Layanan</td>
<td><input required type="text" name="nama_layanan" class="form-control"></td>
</tr>

<tr>
<td class="label-col">Harga Dasar</td>
<td><input required type="number" name="harga_dasar" class="form-control"></td>
</tr>

<tr>
<td class="label-col">Satuan</td>
<td><input type="text" name="satuan" class="form-control"></td>
</tr>

<tr>
<td class="label-col">Keterangan</td>
<td><textarea name="keterangan" class="form-control" rows="4"></textarea></td>
</tr>

<tr>
<td colspan="2">
<button class="btn btn-primary mt-3" type="submit">Simpan</button>
<a href="http://localhost/percetakan/index.php?halaman=layanan">
<button class="btn btn-success mt-3" type="button">Cancel</button>
</a>
</td>
</tr>
</table>

</form>
</div>
