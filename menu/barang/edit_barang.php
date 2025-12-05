<?php
$id_barang=$_GET['id_brg'];
$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');
$hasil= mysqli_query($koneksi,"select * from barang where id_barang='$id_barang'");
$row= mysqli_fetch_array($hasil);
// var_dump($row);
?>

<!-- <link rel="stylesheet" href="../style.css"> -->
<div class="formulir">
<form action="menu/barang/aksi_edit_barang.php" method="POST">
    <h5 class="judul-form"> Form Edit Barang</h5>
    <style>
        .label-col {
            width: 120px;        /* atur lebarnya agar pas */
            white-space: nowrap; /* biar tidak turun baris */
            padding-right: 5px;  /* jarak minimal dengan input */
        }
    </style>
    <table width="100%">
        <tr>
            <td class="label-col">Nama Barang</td>
            <td><input placeholder="Nama Barang" value="<?=$row['nama_barang']?>" type="text" name='namaBrg' class="form-control col-12" ></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td><input placeholder="Satuan" value="<?=$row['satuan']?>" type="text" name='satuan' class="form-control" ></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input placeholder="Stok" value="<?=$row['stok']?>" type="text" name='stok' class="form-control" ></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input placeholder="Harga" value="<?=$row['harga']?>" type="text" name='harga' class="form-control" ></td>
        </tr>
        <tr>
            <td colspan=2>
                <button class="btn btn-primary mt-3" type="submit">Simpan</button>
                <a href="http://localhost/percetakan/index.php?halaman=barang"><button class="btn btn-success mt-3" type="button">Cancel</button></a>
            </td>
        </tr>
         <input type="hidden" name="id_barang" value="<?=$id_barang?>" >
    </table>   
</form>
</div>