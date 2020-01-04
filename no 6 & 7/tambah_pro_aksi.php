<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$product_name = $_POST['product_name'];
$suppliers_id = $_POST['suppliers_id'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into products_tb values('','$product_name','$suppliers_id')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>