<?php
/*
$a=10;
$b=35;
echo "Hasil $a + $b adalah ".$a+$b;

if ($a % 2 == 0) {
    echo "<br> $a adalah Bilangan Bulat ";
}else {
    echo "<br> $a adalah Bilangan Ganjil ";
}

if ($b % 2 == 0) {
    echo "<br> $b adalah Bilangan Bulat ";
}else {
    echo "<br> $b adalah Bilangan Ganjil ";
}

for ($i=0; $i < 10 ; $i++) { 
    echo "<br>Ini adalah perulanga ke $i";
}
tambah(67,90);
function tambah($a, $b){
    echo "<br>$a + $b = ". $a+$b;
} 

$nilai[1]=60;
$nilai[2]=80;
$nilai[3]=82;
$nilai[4]=84;
$nilai[5]=86;
$nilai= array('andi','budi','ayu','anggi','calvin');
for ($i=0; $i < 5; $i++) { 
    echo "<br>". $nilai[$i];
    # code...
}
    */

error_reporting(0);
?>
<!-- <link rel="stylesheet" href="../style.css"> -->
<div class="formulir">
<form action="menu/barang/aksi_tambah_barang.php" method="POST">
    <h5 class="judul-form"> Form Tambah Barang</h5>
    <table>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name='namaBrg'></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td><input type="text" name='satuan'></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name='harga'></td>
        </tr>
        <tr>
            <td colspan=2><button>Simpan</button></td>
        </tr>
         <input type="hidden" name="halaman" value="barang">
    </table>   
</form>
</div>