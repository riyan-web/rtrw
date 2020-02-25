
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
      <!-- Bootstrap Select Css -->
    <link href="https://demonya.xyz/sirt/assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="https://demonya.xyz/sirt/assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="https://demonya.xyz/sirt/assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="https://demonya.xyz/sirt/assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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

            
	
	<div class="col-md-4">
		<form action="aksi-upload.php" method="post" enctype="multipart/form-data">
			<div class="card">
				<div class="header bg-blue">Upload Logo</div>
				<div class="body">
					<input type="file" name="logo" class="form-control">
				</div>
				<div class="footer">
					<button type="submit" class="btn btn-primary waves-effect form-control">Upload</button>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-8">
		<div class="card">
				<div class="header bg-blue">Logo Saat ini</div>
				<div class="body">
					<img src="#">
				</div>
			</div>
	</div>
	
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery/jquery.min.js"></script>
      <!-- Jquery Validation Plugin Css -->
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/bootstrap/js/bootstrap.js"></script>
   

    <!-- Select Plugin Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/node-waves/waves.js"></script>




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


    <!-- Custom Js -->
    <script src="https://demonya.xyz/sirt/assets/js/admin.js"></script>
    
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