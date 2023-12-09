<?php
    include 'koneksi.php';
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    mysqli_query($conn, "update toko set jumlah = '$jumlah', harga = '$harga' where nama_barang = '$nama_barang'");
    header("Location: index.php");
?>