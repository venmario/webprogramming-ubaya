<?php 
session_start();
if (!isset($_SESSION['nrps'])) {
    $_SESSION['nrps'] = array();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label>Masukkan NRP : </label><input type="text" name="txtnrp">
        <br>
        <input type="submit" name="submit" value="Simpan">
    </form>
    <?php 
    if (isset($_POST['submit'])) {
        $nrp = $_POST['txtnrp'];//1234

        if(!isset($_SESSION['s'.$nrp])){
            $_SESSION['s'.$nrp] = $nrp;//$_SESSION['s1234'] = 1234
            $_SESSION['nrps'][] = $_SESSION['s'.$nrp];
            echo "<p>NRP $nrp Berhasil disimpan</p>";
        }
        else{
            echo "<p>NRP : $nrp sudah ada</p>";
        }  
    }
    ?>
</body>

</html>