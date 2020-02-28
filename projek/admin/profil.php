
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SISTEM INFORMASI RT/RW</title>
    <!-- Favicon-->
    <link rel="icon" href="#" type="image/x-icon">
     <style type="text/css">
        input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
    </style>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<!-- Bootstrap Core Css -->
    <link href="https://demonya.xyz/sirt/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="https://demonya.xyz/sirt/assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="https://demonya.xyz/sirt/assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="https://demonya.xyz/sirt/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="https://demonya.xyz/sirt/assets/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="https://demonya.xyz/sirt/assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="https://demonya.xyz/sirt/assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="https://demonya.xyz/sirt/assets/css/themes/all-themes.css" rel="stylesheet" />
    
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">Cari</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">Tutup</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="col-md-2"><img src="#" height="50px" width="50px"></div>
                <div class="col-md-10">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="home-admin.php">SISTEM INFORMASI RT/RW</a>
                </div>
                
                
            </div>
            
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h3></h3></div>
                    <div class="email"><h4>  </h4></div>
                   
                </div>
            </div>
            <!-- #User Info -->
                        <!-- Menu -->
            <div class="menu">
                
<ul class="list">
<li class="header">MENU WARGA</li>
                    <li><a href="logout.php">
                        <i class="material-icons">input</i>
                        <span>Keluar</span>
                    </a></li>
                    <li class="active">
                        <a href="home-admin.php">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="pengajuan-surat.php">
                            <i class="material-icons">mail</i>
                            <span>Status Pengajuan Surat</span>
                        </a>
                    </li>
                    <li>
                        <a href="iuran-bulanan.php">
                            <i class="material-icons">money</i>
                            <span>Iuran Bulanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="profil.php">
                            <i class="material-icons">person</i>
                            <span>Profil</span>
                        </a>
                    </li>
                    <li>
                        <a href="laporan-keuangan-rt.php">
                            <i class="material-icons">book</i>
                            <span>Laporan Keuangan RT</span>
                        </a>
                    </li>
                    <li>
                        <a href="laporan-keuangan-rw.php">
                            <i class="material-icons">book</i>
                            <span>Laporan Keuangan RW</span>
                        </a>
                    </li>
                    <li>
                        <a href="gantipassword.php">
                            <i class="material-icons">lock</i>
                            <span>Ganti Password</span>
                        </a>
                    </li>
                    
                    <li class="header">MENU ADMIN</li>
                    
                    <li>
                        <a href="dashboard-admin.php">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                    
                                        
                    
                    
                    
                </ul>            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
            <div class="copyright">
                    &copy; 2020 <a href="home-admin.php">Sistem Informasi RT/RW</a>.
                </div>
                <div class="version">
                    <b>Version: </b> BETA
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>

    <section class="content">
         
      <hr>
        <div class="container-fluid">
                </div>

            <div class="card">
	<div class="header"><h2>Profil Warga</h2></div>
	<div class="body">

		<button class="btn btn-primary waves-effect" data-toggle="modal" data-target="#ktp">Lihat KTP</button> <button class="btn btn-primary waves-effect" data-toggle="modal" data-target="#kk">Lihat KK</button> <a href="https://demonya.xyz/sirt/index.php/Warga/edit/" class="btn bg-orange waves-effect">Edit Profil</a>  <a class='btn btn-success' href='https://demonya.xyz/sirt/index.php/Warga/ganti_rt/'>Ganti RT</a><br><br>
<table border="0" width="100%" class="table table-hover">
	<tr>
		
		<td width="15%">Nama Lengkap</td>
		<td width="1%">:</td>
		<td width="40%"></td>
	</tr>
	<tr>
		
		<td>Nomor KTP</td>
		<td>:</td>
		<td></td>
	</tr>
    <tr>
        
        <td>Email</td>
        <td>:</td>
        <td></td>
    </tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td>:</td>
		<td>
	<tr>
		<td>Agama</td>
		<td>:</td>
		<td></td>
	</tr>
	<tr>
		<td>Pendidikan</td>
		<td>:</td>
		<td></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td></td>
	</tr>
	<tr>
		<td>Nomor Rumah</td>
		<td>:</td>
		<td></td>
	</tr>
	<tr>
		<td>Nomor Kontak</td>
		<td>:</td>
		<td></td>
	</tr>
</table>
<br>
<h4>Keluarga dalam satu rumah</h4>
<table class="table table-hover">
	<thead>
		<th>No</th>
		<th>Nama Lengkap</th>
		<th>Umur</th>
		<th>Hubungan</th>
	</thead>
	<tbody>
			</tbody>
</table>
</div>
</div>

<form action="tambah-warga.php" method="post" enctype="multipart/form-data">
<div class="modal fade" id="tambah" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Tambah Warga</h4>
                        </div>
                        <div class="modal-body">
                        	<input type="hidden" name="no_parent" value="">
                        	<input type="hidden" name="rt" value="">
                        	<input type="hidden" name="no_rumah" value="">
                            <div class="form-group form-float">
                            	<div class="form-line">
                            		<input type="text" name="no_ktp" class="form-control" required>
                            		<label class="form-label">No KTP / ID Lainnya</label>
                            	</div>
                            </div>
                            <div class="form-group form-float">
                            	<div class="form-line">
                            		<input type="text" name="nama_lengkap" class="form-control" required>
                            		<label class="form-label">Nama Lengkap</label>
                            	</div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="email_warga" class="form-control" required>
                                    <label class="form-label">Email</label>
                                </div>
                            </div>
                            <div class="form-group">
                            	<label class="form-label">Jenis Kelamin</label>
                               <select name="sex" class="form-control" required>
                               	<option value="">--Pilih--</option>
                               	<option value="Pria">Pria</option>
                               	<option value="Wanita">Wanita</option>
                               </select>
                            </div>
                           <div class="form-group form-float">
                            	<label class="form-label">Tanggal Lahir</label>
                            	<div class="input-group">
                            		<span class="input-group-addon">
                            			<i class="material-icons">date_range</i>
                            		</span>
                            		<div class="form-line">
                            			<input type="text" name="tgl_lahir" class="datepicker form-control" placeholder="Format : thn-bln-tgl Ex: 2000-03-30">
                            		</div>
                            	</div>

                            </div>
                            <div class="form-group">
                            	<label class="form-label">Agama</label>
                            	<select name="agama" required class="form-control">
                            		<option value="">--Pilih--</option>
                            		<option value="Islam">Islam</option>
                            		<option value="Hindu">Hindu</option>
                            		<option value="Budha">Budha</option>
                            		<option value="Protestan">Protestan</option>
                            		<option value="Katolik">Katolik</option>
                            		<option value="Konghucu">Konghucu</option>
                            	</select>
                            </div>
                           
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="no_kontak" class="form-control" >
                                    <label class="form-label">Nomor Kontak</label>
                                </div>
                            </div>
                            <div class="form-group">
                            	<label class="form-label">Pendidikan</label>
                            	<select name="pendidikan" class="form-control" required>
                            		<option value="">--Pilih--</option>
                            		<option value="Belum Sekolah">Belum Sekolah</option>
                            		<option value="SD">SD</option>
                            		<option value="SMP">SMP</option>
                            		<option value="SMA">SMA/SMK</option>
                            		<option value="S1">S1</option>
                            		<option value="S2">S2</option>
                            		<option value="S3">S3</option>
                            	</select>
                            </div>
                            <div class="form-group">
                            	<label class="form-label">Pekerjaan</label>
                            	<select name="pekerjaan" class="form-control" required>
                            		<option value="">--Pilih--</option>
                            		<option value="Belum Bekerja">Belum Bekerja</option>
                            		<option value="PNS">PNS</option>
                            		<option value="Militer">Militer</option>
                            		<option value="Polisi">Polisi</option>
                            		<option value="Dokter">Dokter</option>
                            		<option value="Akademisi">Akademisi</option>
                            		<option value="Karyawan Swasta">Karyawan Swasta</option>
                            		<option value="Wirausaha">Wirausaha</option>
                            	 </select>
                            </div>
                            <div class="form-group">
                            	<label class="form-label">Hubungan</label>
                            	<select name="hubungan" class="form-control">
                            		<option value="">--Pilih--</option>
                            		<option value="Suami/Istri">Suami/Istri</option>
                            		<option value="Anak">Anak</option>
                            		<option value="Saudara">Saudara</option>
                            	</select>
                            </div>
                            <div class="form-group">
                            	<label class="form-label">Foto</label>
                            	<input type="file" name="foto" class="form-control">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                           
                        </div>
                    </div>
                </div>
            </div>

            </form>

<form action="upload-ktp.php" method="post" enctype="multipart/form-data">
<div class="modal fade" id="ktp" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Upload / Lihat KTP</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="no_ktp" value="">
                            <label class="form-label">Upload KTP</label>
                            <input type="file" name="ktp" class="form-control" required>

                            <hr>
                            
                                                    </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect">Upload</button>
                           
                        </div>
                    </div>
                </div>
            </div>

            </form>

<form action="upload-kk.php" method="post" enctype="multipart/form-data">
<div class="modal fade" id="kk" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Upload / Lihat KK</h4>
                        </div>
                        <div class="modal-body">
                        <input type="hidden" name="no_ktp" value="">
                            <label class="form-label">Upload KK</label>
                            <input type="file" name="kk" class="form-control" required>

                            <hr>
                            
                                                    </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect">Upload</button>
                           
                        </div>
                    </div>
                </div>
            </div>

            </form>        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->

     <!-- Jquery DataTable Plugin Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="https://demonya.xyz/sirt/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="https://demonya.xyz/sirt/assets/js/admin.js"></script>
    <script src="https://demonya.xyz/sirt/assets/js/pages/forms/basic-form-elements.js"></script>
    <script src="https://demonya.xyz/sirt/assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="https://demonya.xyz/sirt/assets/js/demo.js"></script>
</body>
    <script type="text/javascript">
        $(document).ready(function(){
            $('input[type=number]').on('mousewheel',function(e){ $(this).blur(); });
// Disable keyboard scrolling
$('input[type=number]').on('keydown',function(e) {
    var key = e.charCode || e.keyCode;
    // Disable Up and Down Arrows on Keyboard
    if(key == 38 || key == 40 ) {
    e.preventDefault();
    } else {
    return;
    }
});
        })
        
    </script>
</html>