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
$id_pelanggan = sanitize($koneksi, $_GET['id_pelanggan']);

// Query DELETE
$sql = "DELETE FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'";

mysqli_query($koneksi, $sql);
?>

<script>
alert("Pelanggan berhasil dihapus");
window.location.href = "http://localhost/percetakan/index.php?halaman=pelanggan";
</script>
