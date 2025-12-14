<?php
function sanitize($koneksi, $data) {
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    $data = mysqli_real_escape_string($koneksi, $data);
    return $data;
}

$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');

// Ambil ID dari URL
$id_layanan = sanitize($koneksi, $_GET['id_layanan']);

// Query DELETE
$sql = "DELETE FROM layanan WHERE id_layanan = '$id_layanan'";

mysqli_query($koneksi, $sql);
?>

<script>
alert("Layanan berhasil dihapus");
window.location.href = "http://localhost/percetakan/index.php?halaman=layanan";
</script>
