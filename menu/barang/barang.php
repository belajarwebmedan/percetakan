<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');
$hasil= mysqli_query($koneksi,"select * from barang;");
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<h5 class="judul-form">Data Barang</h5>
<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
  <a href="http://localhost/percetakan/index.php?halaman=tambah_barang"><button class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah</button></a>
  <table class="table table-hover">
    <thead>
      <th>No.</th>
      <!-- <th>ID Barang</th> -->
      <th>Nama Barang</th>
      <th>Satuan Barang</th>
      <th>Stok</th>
      <th>Harga</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      <?php
      $no=1;
      while ($row= mysqli_fetch_array($hasil)) {

      ?>
      <tr>
      <td><?=$no?></td>
      <!-- <td><?=$row['id_barang']?></td> -->
      <td><?=$row['nama_barang']?></td>
      <td><?=$row['satuan']?></td>
      <td><?=$row['stok']?></td>
      <td><?=$row['harga']?></td>
      <td>
        <a href="http://localhost/percetakan/index.php?halaman=edit_barang&id_brg=<?=$row['id_barang']?>">
          <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
        </a>
        <button class="btn btn-sm btn-danger" onclick="hapusData(<?= $row['id_barang']; ?>)">
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
                    window.location = "http://localhost/percetakan/menu/barang/aksi_hapus_barang.php?id_brg=" + id;
                }
            });
        }
      </script>

    </tbody>
  </table>
</div>
