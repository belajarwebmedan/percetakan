<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');
$hasil= mysqli_query($koneksi,"select * from users;");
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<h5 class="judul-form">Data Users</h5>
<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
  <a href="http://localhost/percetakan/index.php?halaman=tambah_users"><button class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah</button></a>
  <table class="table table-hover">
    <thead>
      <th>No.</th>
      <!-- <th>ID users</th> -->
      <th>Nama</th>
      <th>Email</th>
      <th>Password</th>
      <th>Role</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      <?php
      $no=1;
      while ($row= mysqli_fetch_array($hasil)) {

      ?>
      <tr>
      <td><?=$no?></td>
      <!-- <td><?=$row['id_user']?></td> -->
      <td><?=$row['nama']?></td>
      <td><?=$row['email']?></td>
      <td><?=$row['password']?></td>
      <td><?=$row['role']?></td>
      <td>
        <a href="http://localhost/percetakan/index.php?halaman=edit_users&id_users=<?=$row['id_user']?>">
          <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
        </a>
        <button class="btn btn-sm btn-danger" onclick="hapusData(<?= $row['id_user']; ?>)">
            <i class="fa fa-trash"></i>
        </button>

      </td>
      </tr>

      <?php
      $no++;
      }
      ?>
      <script>
        function hapusData(id) {
            Swal.fire({
                title: "Hapus data?",
                text: "Data akan dihapus permanen!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "http://localhost/percetakan/menu/users/aksi_hapus_users.php?id_users=" + id;
                }
            });
        }
      </script>

    </tbody>
  </table>
</div>
