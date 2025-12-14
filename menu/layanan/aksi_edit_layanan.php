<?php
function sanitize($koneksi, $data) {
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    $data = mysqli_real_escape_string($koneksi, $data);
    return $data;
}

$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');

// Ambil & sanitasi data dari form
$id_layanan   = sanitize($koneksi, $_POST['id_layanan']);
$id_kategori  = sanitize($koneksi, $_POST['id_kategori']);
$nama_layanan = sanitize($koneksi, $_POST['nama_layanan']);
$harga_dasar  = sanitize($koneksi, $_POST['harga_dasar']);
$satuan       = sanitize($koneksi, $_POST['satuan']);
$keterangan   = sanitize($koneksi, $_POST['keterangan']);

// Query UPDATE
$sql = "UPDATE layanan SET
        id_kategori  = '$id_kategori',
        nama_layanan = '$nama_layanan',
        harga_dasar  = '$harga_dasar',
        satuan       = '$satuan',
        keterangan   = '$keterangan'
        WHERE id_layanan = '$id_layanan'";

mysqli_query($koneksi, $sql);
?>

<script>
alert("Layanan berhasil diedit");
window.location.href = "http://localhost/percetakan/index.php?halaman=layanan";
</script>
