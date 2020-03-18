<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1></h1>
		<h3>Tambah Data Baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID Barang</td>
				<td><input type="text" name="id_barang"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang"></td>
			</tr>
			<tr>
				<td>Stok Barang</td>
				<td><input type="text" name="stok_barang"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>