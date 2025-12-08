
<!-- <link rel="stylesheet" href="../style.css"> -->
<div class="formulir">
<form action="menu/barang/aksi_tambah_barang.php" method="POST">
    <h5 class="judul-form"> Form Tambah Barang</h5>
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
            <td><input required type="text" name='namaBrg' class="form-control col-12" ></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td><input required type="text" name='satuan' class="form-control" ></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input required type="text" name='stok' class="form-control" ></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input required type="text" name='harga' class="form-control" ></td>
        </tr>
        <tr>
            <td colspan=2>
                <button class="btn btn-primary mt-3" type="submit">Simpan</button>
                <a href="http://localhost/percetakan/index.php?halaman=barang"><button class="btn btn-success mt-3" type="button">Cancel</button></a>
            </td>
        </tr>
         <input type="hidden" name="halaman" value="barang" >
    </table>   
</form>
</div>