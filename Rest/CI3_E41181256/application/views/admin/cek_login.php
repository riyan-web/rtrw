<?php
session_start();
$username = $_POST['username'];
$password = $_POST['pass'];
$cek      = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username = '$username' AND pass = '$password'");
$result   = mysqli_fetch_array($cek);

if(mysqli_num_rows($cek)==1){
    header('location:index.php/Overview');
}else{
    echo "<script>alert('Maaf Hak Akses Salah');location=index.php/Overview/login;</script>";   
}
?>