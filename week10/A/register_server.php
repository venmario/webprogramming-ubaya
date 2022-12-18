<?php 
session_start();

$username = $_POST['username'];
$password = $_POST['pass'];
$repassword = $_POST['repass'];

$_SESSION['username'] = $username;

if (strlen($password) < 8) {
    $_SESSION['passkurang'] = 'Password harus lebih dari 8 karakter!';
    header('location: register.php');
}

if ($password != $repassword) {
    $_SESSION['passgakcocok'] = 'Password yang diisi tidak sama';
    header('location: register.php');
}

?>