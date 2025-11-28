<?php
    // echo     $_GET['namaBrg'].$_GET['satuan'].$_GET['harga'];
    // echo     $_POST['namaBrg'].$_POST['satuan'].$_POST['harga'];

    function sanitize($koneksi, $data) {
    $data = trim($data);                               // hapus spasi
    $data = strip_tags($data);                         // hilangkan tag HTML
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8'); // cegah XSS
    $data = mysqli_real_escape_string($koneksi, $data);   // cegah SQL Injection
    return $data;
    }


    $koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');
    // Ambil variabel POST
    // $namaBrg = ($_POST['namaBrg']);
    // $satuan  = ($_POST['satuan']);
    // $harga   = ($_POST['harga']);

    $namaBrg = sanitize($koneksi,$_POST['namaBrg']);
    $satuan  = sanitize($koneksi,$_POST['satuan']);
    $harga   = sanitize($koneksi,$_POST['harga']);

    // Query aman
    $sql = "INSERT INTO barang (nama_barang, satuan, harga) 
            VALUES ('$namaBrg', '$satuan', '$harga')";
    mysqli_query($koneksi,$sql);    
    ?>
    <script>
    alert("Barang Berhasil Ditambah");
    window.location.href = "http://localhost/percetakan/index.php?halaman=barang"; // atau halaman mana saja
</script>
