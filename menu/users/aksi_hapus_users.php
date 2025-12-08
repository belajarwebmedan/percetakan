<?php
    function sanitize($koneksi, $data) {
    $data = trim($data);                               // hapus spasi
    $data = strip_tags($data);                         // hilangkan tag HTML
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8'); // cegah XSS
    $data = mysqli_real_escape_string($koneksi, $data);   // cegah SQL Injection
    return $data;
    }


    $koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');
//     $namaBrg = sanitize($koneksi,$_POST['namaBrg']);
//     $satuan  = sanitize($koneksi,$_POST['satuan']);
//     $stok   = sanitize($koneksi,$_POST['stok']);
//     $harga   = sanitize($koneksi,$_POST['harga']);
    $id_users   = sanitize($koneksi,$_GET['id_users']);

    // Query aman
    // $sql = "INSERT INTO barang (nama_barang, satuan,stok, harga) 
    //         VALUES ('$namaBrg', '$satuan', '$stok', '$harga')";
    $sql = "DELETE FROM users 
            WHERE id_user='$id_users'";
    // echo $sql;
    mysqli_query($koneksi,$sql);    
    ?>
    <script>
    alert("Users Berhasil Dihapus");
    window.location.href = "http://localhost/percetakan/index.php?halaman=users"; // atau halaman mana saja
    </script>
