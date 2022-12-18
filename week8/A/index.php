<?php 
session_start();
// session_destroy();
if(!isset($_SESSION['nrps'])){
    $_SESSION['nrps'] = array();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Session</title>
</head>

<body>
    <form method="POST">
        <label>Masukkan NRP : </label><input type="text" name="txtnrp">
        <br>
        <input type="submit" name="submit" value="Simpan">
    </form>
    <?php 
    if(isset($_POST['submit'])){
        $nrp = $_POST['txtnrp'];//1234

        if(!isset($_SESSION['s'.$nrp])){
            $_SESSION['s'.$nrp] = $nrp; //$_SESSION['s1234'] = 1234
            $_SESSION['nrps'][] = $_SESSION['s'.$nrp];
            
            echo "NRP berhasil disimpan";
        }
        else{
            echo "NRP : $nrp sudah ada";
        }
    }
    ?>
</body>

</html>