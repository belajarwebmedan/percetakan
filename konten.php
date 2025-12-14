<!-- CONTENT -->
<div class="content-wrapper">
<?php
if (!isset($_GET['halaman']) || $_GET['halaman']=='home') {
    include("menu/home.php");
} elseif ($_GET['halaman']=='barang') {
    include("menu/barang/barang.php");
} elseif ($_GET['halaman']=='tambah_barang') {
    include("menu/barang/tambah_barang.php");
} elseif ($_GET['halaman']=='edit_barang') {
    include("menu/barang/edit_barang.php");
} elseif ($_GET['halaman']=='users') {
    include("menu/users/users.php");
} elseif ($_GET['halaman']=='tambah_users') {
    include("menu/users/tambah_users.php");
} elseif ($_GET['halaman']=='edit_users') {
    include("menu/users/edit_users.php");
} elseif ($_GET['halaman']=='kategori_layanan') {
    include("menu/kategori_layanan/kategori_layanan.php");
} elseif ($_GET['halaman']=='tambah_kategori_layanan') {
    include("menu/kategori_layanan/tambah_kategori_layanan.php");
} elseif ($_GET['halaman']=='edit_kategori_layanan') {
    include("menu/kategori_layanan/edit_kategori_layanan.php");
} elseif ($_GET['halaman']=='layanan') {
    include("menu/layanan/layanan.php");
} elseif ($_GET['halaman']=='tambah_layanan') {
    include("menu/layanan/tambah_layanan.php");
} elseif ($_GET['halaman']=='edit_layanan') {
    include("menu/layanan/edit_layanan.php");
} elseif ($_GET['halaman']=='pelanggan') {
    include("menu/pelanggan/pelanggan.php");
} elseif ($_GET['halaman']=='tambah_pelanggan') {
    include("menu/pelanggan/tambah_pelanggan.php");
} elseif ($_GET['halaman']=='edit_pelanggan') {
    include("menu/pelanggan/edit_pelanggan.php");
} elseif ($_GET['halaman']=='transaksi') {
    include("menu/transaksi.php");
}elseif ($_GET['halaman']=='tambah_pesanan') {
    include("menu/pesanan/tambah_pesanan.php");
}
?>
</div>
