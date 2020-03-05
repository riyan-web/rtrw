<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Kategori</th>
            <th>Deskripsi</th>
		</tr>
		<?php foreach($tb_barang as $u){ ?>
		<tr>
			<td><?php echo $u->nama_barang ?></td>
			<td><?php echo $u->harga ?></td>
			<td><?php echo $u->kd_kategori ?></td>
            <td><?php echo $u->deskripsi ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>