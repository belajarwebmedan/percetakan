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
$nama   = sanitize($koneksi, $_POST['nama']);
$telp   = sanitize($koneksi, $_POST['telp']);
$alamat = sanitize($koneksi, $_POST['alamat']);

// Query insert
$sql = "INSERT INTO pelanggan (nama, telp, alamat)
        VALUES ('$nama', '$telp', '$alamat')";

mysqli_query($koneksi, $sql);
?>

<script>
alert("Pelanggan berhasil ditambahkan");
window.location.href = "http://localhost/percetakan/index.php?halaman=pelanggan";
</script>
