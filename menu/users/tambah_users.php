
<!-- <link rel="stylesheet" href="../style.css"> -->
<div class="formulir">
<form action="menu/users/aksi_tambah_users.php" method="POST">
    <h5 class="judul-form"> Form Tambah Users</h5>
    <style>
        .label-col {
            width: 120px;        /* atur lebarnya agar pas */
            white-space: nowrap; /* biar tidak turun baris */
            padding-right: 5px;  /* jarak minimal dengan input */
        }
    </style>
    <table width="100%">
        <tr>
            <td class="label-col">Nama Users</td>
            <td><input required type="text" name='nama' class="form-control col-12" ></td>
        </tr>
        <tr>
            <td>email</td>
            <td>
                <div class="col-6">
                    <input required type="email" name='email' class="form-control" >
                </div>
            </td>
        </tr>
        <tr>
            <td>password</td>
            <td>
                <div class="col-6">
                    <input required type="password" name='password' class="form-control" >
                </div>
            </td>
        </tr>
        <tr>
            <td>role</td>
            <td>
                <div class="col-4">
                   <select name="role" id="" class="form-select col-4">
                    <option value="admin">admin</option>
                    <option value="kasir">kasir</option>
                    <option value="operator">operator</option>
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
    </table>   
</form>
</div>