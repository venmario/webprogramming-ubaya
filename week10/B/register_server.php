<?php 
session_start();

$username = $_POST['username'];
$password = $_POST['pass'];
$repassword = $_POST['repass'];

if (strlen($password < 8)) {
    $_SESSION['username'] = $username;
    $_SESSION['errorpass'] = 'Password harus lebih dari 8 karakter!';
    header('location: register.php');
}

if ($password != $repassword) {
    $_SESSION['username'] = $username;
    $_SESSION['errorrepass'] = 'Password yang diinput tidak cocok';
    header('location: register.php');
}

$_SESSION['success'] = 'Registrasi Berhasil!';
header('location: register.php');
?>