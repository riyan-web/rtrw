<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1></h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			
					<input type="hidden" name="id_barang" value="<?php echo $u->id_barang ?>">
					
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang" value="<?php echo $u->nama_barang ?>"></td>
			</tr>
			<tr>
				<td>Stok Barang</td>
				<td><input type="text" name="stok_barang" value="<?php echo $u->stok_barang ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $u->harga ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>