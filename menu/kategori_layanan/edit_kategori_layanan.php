<?php
$id_kategori = $_GET['id_kategori'];

$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');
$hasil = mysqli_query(
    $koneksi,
    "SELECT * FROM kategori_layanan WHERE id_kategori = '$id_kategori'"
);

$row = mysqli_fetch_array($hasil);
?>

<div class="formulir">
<form action="menu/kategori_layanan/aksi_edit_kategori_layanan.php" method="POST">

    <h5 class="judul-form">Form Edit Kategori Layanan</h5>

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
                <input
                    placeholder="Nama Kategori"
                    value="<?= $row['nama_kategori'] ?>"
                    type="text"
                    name="nama_kategori"
                    class="form-control col-12"
                    required
                >
            </td>
        </tr>

        <tr>
            <td class="label-col">Deskripsi</td>
            <td>
                <textarea
                    name="deskripsi"
                    class="form-control"
                    rows="4"
                ><?= $row['deskripsi'] ?></textarea>
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

        <input type="hidden" name="id_kategori" value="<?= $id_kategori ?>">
    </table>

</form>
</div>
