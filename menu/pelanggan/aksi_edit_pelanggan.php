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
$id_pelanggan = sanitize($koneksi, $_POST['id_pelanggan']);
$nama         = sanitize($koneksi, $_POST['nama']);
$telp         = sanitize($koneksi, $_POST['telp']);
$alamat       = sanitize($koneksi, $_POST['alamat']);

// Query UPDATE
$sql = "UPDATE pelanggan SET
        nama   = '$nama',
        telp   = '$telp',
        alamat = '$alamat'
        WHERE id_pelanggan = '$id_pelanggan'";

mysqli_query($koneksi, $sql);
?>

<script>
alert("Pelanggan berhasil diedit");
window.location.href = "http://localhost/percetakan/index.php?halaman=pelanggan";
</script>
