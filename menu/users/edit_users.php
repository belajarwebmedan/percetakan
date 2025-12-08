<?php
$id_users=$_GET['id_users'];
$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');
$hasil= mysqli_query($koneksi,"select * from users where id_user='$id_users'");
$row= mysqli_fetch_array($hasil);
// var_dump($row);
?>

<!-- <link rel="stylesheet" href="../style.css"> -->
<div class="formulir">
<form action="menu/users/aksi_edit_users.php" method="POST">
    <h5 class="judul-form"> Form Edit Users</h5>
    <style>
        .label-col {
            width: 120px;        /* atur lebarnya agar pas */
            white-space: nowrap; /* biar tidak turun baris */
            padding-right: 5px;  /* jarak minimal dengan input */
        }
    </style>
    <table width="100%">
        <tr>
            <td class="label-col">Nama</td>
            <td><input placeholder="Nama" value="<?=$row['nama']?>" type="text" name='nama' class="form-control col-12" ></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input placeholder="email" value="<?=$row['email']?>" type="email" name='email' class="form-control" ></td>
        </tr>
        <!-- <tr>
            <td>password</td>
            <td><input placeholder="password" value="<?=$row['password']?>" type="password" name='password' class="form-control" ></td>
        </tr> -->
        <tr>
            <td>role</td>
            <td>
                <div class="col-4">
                   <select name="role" id="" class="form-select col-4">
                    <option <?=$row['role']=='admin'?" selected":""?> value="admin">admin</option>
                    <option <?=$row['role']=='kasir'?" selected":""?> value="kasir">kasir</option>
                    <option <?=$row['role']=='operator'?" selected":""?> value="operator">operator</option>
                </select> 
                </div>
            </td>
        </tr>
        <tr>
            <td colspan=2>
                <button class="btn btn-primary mt-3" type="submit">Simpan</button>
                <a href="http://localhost/percetakan/index.php?halaman=users"><button class="btn btn-success mt-3" type="button">Cancel</button></a>
            </td>
        </tr>
         <input type="hidden" name="id_users" value="<?=$id_users?>" >
    </table>   
</form>
</div>