<!DOCTYPE html>
<html>
<head>
	<title>tambh data products</title>
	<link rel="stylesheet" href="css/style_tambah_pro.css">
</head>
<body>
 
	<h1>tambah data products</h1>
 
	<div class="kotak_tambah">
		<p class="tulisan_tambah">Silahkan tambah data</p>
 
		<form method="POST" action="tambah_pro_aksi.php">
			<label>product name</label>
			<input type="text" name="product_name" class="form_tambah" placeholder="masukkan product ..">
 
			<label>supliers_id</label>
			<input type="text" name="suppliers_id" class="form_tambah" placeholder="masukkan id supliers ..">
 	
			<button type="submit" class="tombol_tambah">tambah</button>
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>