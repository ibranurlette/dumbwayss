<!DOCTYPE html>
<html>
<head>
	<title>tambh data products</title>
	<link rel="stylesheet" href="css/style_tambah_pro.css">
</head>
<body>
 
	<h1>update data </h1>
 	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT products_tb.id, products_tb.product_name, supliers_tb.id, supliers_tb.company_name, supliers_tb.addres, supliers_tb.phone FROM products_tb INNER JOIN supliers_tb ON products_tb.suppliers_id = supliers_tb.id where suppliers_id= '$id'");
	foreach ($data as $d) {
	?>
	<div class="kotak_tambah">
		<p class="tulisan_tambah">Silahkan update data</p>
 
		<form method="POST" action="update.php">
			<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
			<label>product_name</label>
			<input type="text" name="product_name" class="form_tambah" value="<?php echo $d['product_name']; ?>" >
 
			<label>company_name</label>
			<input type="text" name="company_name" class="form_tambah" value="<?php echo $d['company_name']; ?>" >

			<label>addres</label>
			<input type="text" name="addres" class="form_tambah" value="<?php echo $d['addres']; ?>" >

			<label>phone</label>
			<input type="text" name="phone" class="form_tambah" value="<?php echo $d['phone']; ?>" >
 	
			<button type="submit" class="tombol_tambah">update data</button>
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">kembali</a>
			</center>
		</form>
		
	</div>
 <?php } ?>
 
</body>
</html>