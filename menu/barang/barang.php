<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');
$hasil= mysqli_query($koneksi,"select * from barang;");
?>
<h5 class="judul-form">Data Barang</h5>

<table class="table table-hover">
  <thead>
    <th>No.</th>
    <th>ID Barang</th>
    <th>Nama Barang</th>
    <th>Satuan Barang</th>
    <th>Stok</th>
    <th>Harga</th>
  </thead>
  <tbody>
    <?php
    $no=1;
    while ($row= mysqli_fetch_array($hasil)) {

    ?>
    <tr>
    <td><?=$no?></td>
    <td><?=$row['id_barang']?></td>
    <td><?=$row['nama_barang']?></td>
    <td><?=$row['satuan']?></td>
    <td><?=$row['stok']?></td>
    <td><?=$row['harga']?></td>
    </tr>

    <?php
    $no++;
    }
    ?>
  </tbody>
</table>