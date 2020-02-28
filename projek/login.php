<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SISTEM INFORMASI RT/RW</title>
    <!-- Favicon-->
    <link rel="icon" href="https://demonya.xyz/sirt/assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="https://demonya.xyz/sirt/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="https://demonya.xyz/sirt/assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="https://demonya.xyz/sirt/assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="https://demonya.xyz/sirt/assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo" style="width: 100%; color: white;"><center>
            <h3>SISTEM INFORMASI RT/RW </h3>
            </center>
        </div>
        <div class="card">
            <div class="body">
                                 <form id="sign_in" action="https://demonya.xyz/sirt/index.php/Auth/doLogin" method="POST">
                    <div class="msg">Gunakan NIK untuk Login</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Nomor Induk Kependudukan" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-blue waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="https://demonya.xyz/sirt/assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="https://demonya.xyz/sirt/assets/js/admin.js"></script>
    <script src="https://demonya.xyz/sirt/assets/js/pages/examples/sign-in.js"></script>
</body>

</html>