  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Menu Cafe Turkey</h1>
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
	<center><?php echo anchor('adminlte/menu/tambah','Tambah Data'); ?></center>
	<table style="margin:40px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Kategori</th>
			<th>Deskripsi</th>
      <th>Foto</th>
      <th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($menu as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_barang ?></td>
			<td><?php echo $u->harga ?></td>
			<td><?php echo $u->kd_kategori ?></td>
      <td><?php echo $u->deskripsi ?></td>
      <td><img src="<?= base_url('img/'.$u->foto)?>" alt=""></td>
			<td>
			      <?php echo anchor('adminlte/menu/edit/'.$u->kd_barang,'Edit'); ?>
                  <?php echo anchor('adminlte/menu/hapus/'.$u->kd_barang,'Hapus'); ?>
			</td>
		</tr>
    <?php }
    print_r($u->nama_barang);
    ?>
	</table>
  </div>
 