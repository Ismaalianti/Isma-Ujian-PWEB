<?php
    include 'koneksi.php';
    $nama_barang = $_POST['nama_barang'];

    mysqli_query($conn, "delete from toko where nama_barang = '$nama_barang'");
    header("Location: index.php");
?>