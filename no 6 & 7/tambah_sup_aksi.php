<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$company_name = $_POST['company_name'];
$addres = $_POST['addres'];
$phone = $_POST['phone'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into supliers_tb values('','$company_name','$addres','$phone')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>