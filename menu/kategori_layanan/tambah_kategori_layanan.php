<div class="formulir">
<form action="menu/kategori_layanan/aksi_tambah_kategori_layanan.php" method="POST">

    <h5 class="judul-form">Form Tambah Kategori Layanan</h5>

    <style>
        .label-col {
            width: 150px;
            white-space: nowrap;
            padding-right: 5px;
        }
    </style>

    <table width="100%">
        <tr>
            <td class="label-col">Nama Kategori</td>
            <td>
                <input required type="text" name="nama_kategori" class="form-control col-12">
            </td>
        </tr>

        <tr>
            <td class="label-col">Deskripsi</td>
            <td>
                <textarea name="deskripsi" class="form-control" rows="4"></textarea>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <button class="btn btn-primary mt-3" type="submit">
                    Simpan
                </button>

                <a href="http://localhost/percetakan/index.php?halaman=kategori_layanan">
                    <button class="btn btn-success mt-3" type="button">
                        Cancel
                    </button>
                </a>
            </td>
        </tr>
    </table>

</form>
</div>
