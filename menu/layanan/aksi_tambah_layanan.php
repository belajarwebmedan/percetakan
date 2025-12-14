<?php
function sanitize($koneksi, $data) {
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    $data = mysqli_real_escape_string($koneksi, $data);
    return $data;
}

$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');

// Ambil & sanitasi data
$id_kategori  = sanitize($koneksi, $_POST['id_kategori']);
$nama_layanan = sanitize($koneksi, $_POST['nama_layanan']);
$harga_dasar  = sanitize($koneksi, $_POST['harga_dasar']);
$satuan       = sanitize($koneksi, $_POST['satuan']);
$keterangan   = sanitize($koneksi, $_POST['keterangan']);

// Query insert
$sql = "INSERT INTO layanan (id_kategori, nama_layanan, harga_dasar, satuan, keterangan)
        VALUES ('$id_kategori', '$nama_layanan', '$harga_dasar', '$satuan', '$keterangan')";

mysqli_query($koneksi, $sql);
?>

<script>
alert("Layanan berhasil ditambahkan");
window.location.href = "http://localhost/percetakan/index.php?halaman=layanan";
</script>
