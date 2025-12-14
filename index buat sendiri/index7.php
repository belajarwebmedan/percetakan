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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zen Tutorial</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

</head>
<body>
    <div class="container">
        <div class="header">
            <span class="judul">Sistem Informasi Percetakan Berjaya Selamanya</span>
            <div class="hero-container">
                <div class="hero-item">
                     Kami menyediakan layanan percetakan lengkap, termasuk print warna, fotokopi, penjilidan dokumen, serta pembuatan spanduk, banner, dan media promosi lainnya secara cepat dan berkualitas.
                </div>
                <div class="hero-item" >Kontak Person : <i class="fa fa-phone"></i> 081211111111</div>
                <div class="hero-item">Alamat : <i class="fa fa-map-pin"></i> Jalan Utama 2 Kampung Kolam</div>
            </div>
        </div>
            <div class="leftSide">
                <ul class="menu">
                    <a href="http://localhost/percetakan/index.php?halaman=home" style="color: inherit;        /* ikut warna teks di sekitarnya */
    text-decoration: none;">
                    <li class="menu-item"> <i class="fa fa-home"></i> Home</li>
                    
                    <a href="http://localhost/percetakan/index.php?halaman=barang" style="color: inherit;        /* ikut warna teks di sekitarnya */
    text-decoration: none;">
                    <li class="menu-item"><i class="fa fa-list-alt"></i> Barang</li>
                    </a>
                    
                    <a href="http://localhost/percetakan/index.php?halaman=users" style="color: inherit;        /* ikut warna teks di sekitarnya */
    text-decoration: none;">
                    <li class="menu-item"><i class="fa fa-users"></i> Users</li>
                    </a>

                    <a href="http://localhost/percetakan/index.php?halaman=transaksi" style="color: inherit;        /* ikut warna teks di sekitarnya */
    text-decoration: none;">
                    <li class="menu-item"> <i class="fa fa-credit-card"></i> Transaksi</li>
                    </a>

                    <div class="dropdown">
                    <button class="btn btn-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b><i class="fa fa-list"></i> Layanan</b>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="http://localhost/percetakan/index.php?halaman=kategori_layanan">Kategori Layanan</a></li>
                        <li><a class="dropdown-item" href="#">Layanan</a></li>
                    </ul>
                    </div>

                    <a href="http://localhost/percetakan/logout.php" style="color: inherit;        /* ikut warna teks di sekitarnya */
    text-decoration: none;">
                    <li class="menu-item"> <i class="fa fa-power-off"></i> Logout</li>
                    </a>
                </ul>
            </div>
            <div class="konten">
                <div class="isi-konten">
                    <?php
                    if (!isset($_GET['halaman'])) {
                       include("menu/home.php");
                    }else {
                        if ($_GET['halaman']=='home') {
                            include("menu/home.php");
                        }elseif ($_GET['halaman']=='barang') {
                            include("menu/barang/barang.php");
                        }elseif ($_GET['halaman']=='tambah_barang') {
                            include("menu/barang/tambah_barang.php");
                        }elseif ($_GET['halaman']=='edit_barang') {
                            include("menu/barang/edit_barang.php");
                        }elseif ($_GET['halaman']=='users') {
                            include("menu/users/users.php");
                        }
                        

                        elseif ($_GET['halaman']=='users') {
                            include("menu/users/users.php");
                        }elseif ($_GET['halaman']=='tambah_users') {
                            include("menu/users/tambah_users.php");
                        }elseif ($_GET['halaman']=='edit_users') {
                            include("menu/users/edit_users.php");
                        }


                        elseif ($_GET['halaman']=='kategori_layanan') {
                            include("menu/kategori_layanan/kategori_layanan.php");
                        }elseif ($_GET['halaman']=='tambah_kategori_layanan') {
                            include("menu/kategori_layanan/tambah_kategori_layanan.php");
                        }elseif ($_GET['halaman']=='edit_kategori_layanan') {
                            include("menu/kategori_layanan/edit_kategori_layanan.php");
                        }
                        
                        
                        
                        
                        elseif ($_GET['halaman']=='transaksi') {
                            include("menu/transaksi.php");
                        }
                    }
                        
                    ?>
                </div>
            </div>
            <div class="rightSide">
                <div class="p-1">
                    <h6>Halo, <?php echo $_SESSION['user']['nama']; ?></h6>
                </div>
                <div class="slogan">Mengelola Percetakan Lebih Cepat, Lebih Tepat.</div>
            </div>
        <div class="footer">&copy; Zen Tutorial 2025</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
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
            buttons: [
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    className: 'btn btn-success btn-sm'
                },
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    className: 'btn btn-danger btn-sm'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    className: 'btn btn-primary btn-sm'
                }
            ],
            pageLength: 5,
            lengthMenu: [5, 10, 25, 50],
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ data",
                info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                paginate: {
                    next: "Berikutnya",
                    previous: "Sebelumnya"
                }
            }
        });
    });
    </script>
</body>
</html>