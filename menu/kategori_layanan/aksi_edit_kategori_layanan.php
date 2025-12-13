<?php
function sanitize($koneksi, $data) {
    $data = trim($data);                                // hapus spasi
    $data = strip_tags($data);                          // hilangkan tag HTML
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8'); // cegah XSS
    $data = mysqli_real_escape_string($koneksi, $data);   // cegah SQL Injection
    return $data;
}

$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');

// Ambil & sanitasi data dari form
$id_kategori   = sanitize($koneksi, $_POST['id_kategori']);
$nama_kategori = sanitize($koneksi, $_POST['nama_kategori']);
$deskripsi     = sanitize($koneksi, $_POST['deskripsi']);

// Query UPDATE
$sql = "UPDATE kategori_layanan SET
        nama_kategori = '$nama_kategori',
        deskripsi     = '$deskripsi'
        WHERE id_kategori = '$id_kategori'";

mysqli_query($koneksi, $sql);
?>

<script>
    alert("Kategori Layanan berhasil diedit");
    window.location.href = "http://localhost/percetakan/index.php?halaman=kategori_layanan";
</script>
