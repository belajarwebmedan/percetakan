<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zen Tutorial</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
                    <a href="http://localhost/percetakan/index.php?halaman=home">
                    <li class="menu-item"> <i class="fa fa-home"></i> Home</li>
                    
                    <a href="http://localhost/percetakan/index.php?halaman=barang">
                    <li class="menu-item"><i class="fa fa-list-alt"></i> Barang</li>
                    </a>

                    <a href="http://localhost/percetakan/index.php?halaman=transaksi">
                    <li class="menu-item"> <i class="fa fa-credit-card"></i> Transaksi</li>
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
                            include("menu/barang/tambah_barang.php");
                        }elseif ($_GET['halaman']=='transaksi') {
                            include("menu/transaksi.php");
                        }
                    }
                        
                    ?>
                </div>
            </div>
            <div class="rightSide">
                <div class="slogan">Mengelola Percetakan Lebih Cepat, Lebih Tepat.</div>
            </div>
        <div class="footer">&copy; Zen Tutorial 2025</div>
    </div>
    
</body>
</html>