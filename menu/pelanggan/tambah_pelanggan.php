<div class="formulir">
<form action="menu/pelanggan/aksi_tambah_pelanggan.php" method="POST">

<h5 class="judul-form">Form Tambah Pelanggan</h5>

<style>
.label-col{width:150px;white-space:nowrap;padding-right:5px;}
</style>

<table width="100%">
<tr>
<td class="label-col">Nama Pelanggan</td>
<td><input type="text" name="nama" class="form-control" required></td>
</tr>

<tr>
<td class="label-col">No. Telepon</td>
<td><input type="text" name="telp" class="form-control" required></td>
</tr>

<tr>
<td class="label-col">Alamat</td>
<td><textarea name="alamat" class="form-control" rows="4"></textarea></td>
</tr>

<tr>
<td colspan="2">
<button class="btn btn-primary mt-3" type="submit">Simpan</button>
<a href="http://localhost/percetakan/index.php?halaman=pelanggan">
<button class="btn btn-success mt-3" type="button">Cancel</button>
</a>
</td>
</tr>
</table>

</form>
</div>
