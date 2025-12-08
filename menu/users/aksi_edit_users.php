<?php
    function sanitize($koneksi, $data) {
    $data = trim($data);                               // hapus spasi
    $data = strip_tags($data);                         // hilangkan tag HTML
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8'); // cegah XSS
    $data = mysqli_real_escape_string($koneksi, $data);   // cegah SQL Injection
    return $data;
    }


    $koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');
    $nama = sanitize($koneksi,$_POST['nama']);
    $email  = sanitize($koneksi,$_POST['email']);
    $password   = sha1(sanitize($koneksi,$_POST['password']));
    $role   = sanitize($koneksi,$_POST['role']);
    $id_users   = sanitize($koneksi,$_POST['id_users']);

    // Query aman
    // $sql = "INSERT INTO barang (nama_barang, satuan,stok, harga) 
    //         VALUES ('$namaBrg', '$satuan', '$stok', '$harga')";
    $sql = "UPDATE users SET
            nama= '$nama',
            email='$email',
            role='$role'
            WHERE id_user='$id_users'";
    // echo $sql;
    mysqli_query($koneksi,$sql);    
    ?>
    <script>
    alert("Users Berhasil Diedit");
    window.location.href = "http://localhost/percetakan/index.php?halaman=users"; // atau halaman mana saja
    </script>
