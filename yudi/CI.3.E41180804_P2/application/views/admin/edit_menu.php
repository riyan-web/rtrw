<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<h3>Edit menu cafe</h3>

     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Menu Cafe</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('adminlte/overview'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Menu Cafe</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<?php foreach($tb_barang as $u){ ?>
	<form action="<?php echo base_url(). 'adminlte/menu/update'; ?>" method="post">
		<table style="margin:20px auto;">
            <tr>
                <input type="hidden" name="kd_barang" value="<?php echo $u->kd_barang ?>">
            </tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang" value="<?php echo $u->nama_barang ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $u->harga ?>"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kd_kategori"value="<?php echo $u->kd_kategori ?>"></td>
			</tr>
            <tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi" value="<?php echo $u->deskripsi ?>"></td>
			</tr>
            <tr>
				<td>Foto</td>
				<td><input type="text" name="foto" value="<?php echo $u->foto ?>"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="edit"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
    </div>
</body>
</html>