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
 
		<form method="POST" action="tambah_sup_aksi.php">
			<label>company_name</label>
			<input type="text" name="company_name" class="form_tambah" placeholder="masukkan company_name ..">
 
			<label>addres</label>
			<input type="text" name="addres" class="form_tambah" placeholder="masukkan addres ..">

			<label>phone</label>
			<input type="text" name="phone" class="form_tambah" placeholder="masukkan phone ..">
 	
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