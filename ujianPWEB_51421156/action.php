<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

// menginput data ke database
mysqli_query($conn,"insert into toko values('','$nama_barang','$jumlah','$harga')");

//mengalihkan halaman kembali ke index.php
header("location:update.php");

?>