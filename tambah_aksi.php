<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$merek = $_POST['tipe'];
$harga = $_POST['harga'];

// menginput data ke database
mysqli_query($koneksi,"insert into produk values('','$merek','$harga')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>