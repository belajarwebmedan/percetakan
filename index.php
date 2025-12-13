<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Percetakan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

<style>
body {
    background-color: #f4f6f9;
}
.sidebar {
    width: 250px;
    min-height: 100vh;
    background: #343a40;
}
.sidebar a {
    color: #adb5bd;
    text-decoration: none;
}
.sidebar a:hover {
    background: #495057;
    color: #fff;
}
.sidebar .menu-item {
    padding: 12px 20px;
}
.topbar {
    background: #ffffff;
    border-bottom: 1px solid #dee2e6;
}
.content-wrapper {
    padding: 20px;
}
</style>
</head>

<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h5 class="text-white text-center py-3 border-bottom">ADMIN PANEL</h5>

        <a href="index.php?halaman=home">
            <div class="menu-item"><i class="fa fa-home me-2"></i> Dashboard</div>
        </a>

        <a href="index.php?halaman=barang">
            <div class="menu-item"><i class="fa fa-box me-2"></i> Barang</div>
        </a>

        <a href="index.php?halaman=users">
            <div class="menu-item"><i class="fa fa-users me-2"></i> Users</div>
        </a>

        <a href="index.php?halaman=transaksi">
            <div class="menu-item"><i class="fa fa-credit-card me-2"></i> Transaksi</div>
        </a>

        <div class="menu-item text-white mt-2">
            <i class="fa fa-list me-2"></i> Layanan
        </div>
        <a href="index.php?halaman=kategori_layanan">
            <div class="menu-item ps-4">Kategori Layanan</div>
        </a>
        <a href="#">
            <div class="menu-item ps-4">Layanan</div>
        </a>

        <a href="logout.php">
            <div class="menu-item text-danger mt-3">
                <i class="fa fa-power-off me-2"></i> Logout
            </div>
        </a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="flex-grow-1">

        <!-- TOPBAR -->
        <div class="topbar p-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0">Sistem Informasi Percetakan</h6>
            <div>
                <i class="fa fa-user"></i>
                <?= $_SESSION['user']['nama']; ?> (<?= $_SESSION['user']['role']; ?>)
            </div>
        </div>

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
            } elseif ($_GET['halaman']=='transaksi') {
                include("menu/transaksi.php");
            }
            ?>
        </div>

        <!-- FOOTER -->
        <footer class="text-center p-3 text-muted border-top">
            © 2025 Percetakan Berjaya Selamanya
        </footer>

    </div>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<script>
$(document).ready(function () {
    $('#tabelUsers').DataTable({
        dom: 'Bfrtip',
        buttons: ['excel', 'pdf', 'print']
    });
});
</script>

</body>
</html>
