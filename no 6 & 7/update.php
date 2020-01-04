<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$id = $_POST['id'];
$product_name = $_POST['product_name'];
$company_name = $_POST['company_name'];
$addres = $_POST['addres'];
$phone = $_POST['phone'];

 
// update data ke database
mysqli_query($koneksi,"update products_tb set product_name='$product_name' where suppliers_id='$id'");
mysqli_query($koneksi,"update supliers_tb set company_name='$company_name',addres='$addres',phone='$phone' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>