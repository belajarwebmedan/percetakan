<?php
function sanitize($koneksi, $data) {
    $data = trim($data);                                 // hapus spasi
    $data = strip_tags($data);                           // hilangkan tag HTML
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');// cegah XSS
    $data = mysqli_real_escape_string($koneksi, $data);  // cegah SQL Injection
    return $data;
}

$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');

// Ambil ID dari URL
$id_kategori = sanitize($koneksi, $_GET['id_kategori']);

// Query DELETE
$sql = "DELETE FROM kategori_layanan 
        WHERE id_kategori = '$id_kategori'";

mysqli_query($koneksi, $sql);
?>

<script>
    alert("Kategori Layanan berhasil dihapus");
    window.location.href = "http://localhost/percetakan/index.php?halaman=kategori_layanan";
</script>
