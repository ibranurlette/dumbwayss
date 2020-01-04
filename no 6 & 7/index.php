<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP </title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<h1 align="center">INVENTORY</h1>
	<div class="tambah">
	<a href="tambah_products.php" class="add_pro">add products</a>
	<a href="tambah_suppliers.php" class="add_sup">add supliers</a>
	</div>
	<br/>
	
	<table border="1">
		<tr>
			<th>NO</th>
			<th>product name</th>
			<th>company name</th>
			<th>addres</th>
			<th>phone</th>
			<th>action</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT products_tb.id, products_tb.product_name, supliers_tb.id, supliers_tb.company_name, supliers_tb.addres, supliers_tb.phone FROM products_tb INNER JOIN supliers_tb ON products_tb.suppliers_id = supliers_tb.id");
		foreach ($data as $d) {
			?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $d['product_name']; ?></td>
				<td><?= $d['company_name']; ?></td>
				<td><?= $d['addres']; ?></td>
				<td><?= $d['phone']; ?></td>
				<td>
					<a href="edit.php?id=<?= $d['id']; ?>" class="edit">update</a>
					<a href="hapus.php?id=<?= $d['id']; ?>" class="hapus">delete</a>
				</td>
			</tr>
			<?php } ?>
	</table>

</body>
</html>