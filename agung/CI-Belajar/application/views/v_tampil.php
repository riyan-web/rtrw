<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>Silahkan Tambah Data !</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>ID Barang</th>
			<th>Nama Barang</th>
			<th>Stok Barang</th>
			<th>Harga</th>
			<th>Button</th>
		</tr>
		<?php 
		$no = 1;
		foreach($tb_menu as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id_barang ?></td>
			<td><?php echo $u->nama_barang ?></td>
			<td><?php echo $u->stok_barang ?></td>
			<td><?php echo $u->harga ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id_barang,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id_barang,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>