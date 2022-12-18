<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    
    if (isset($_POST['date1'])) {
        $date1 = $_POST['date1'];
        echo "<p class='paragraf' >tanggal saat ini ".$_POST['date1']."</p>";
        echo "<p class='paragraf' >".strtotime($date1)."</p>";

        $nHari = $_POST['tanggalTambahan'];
        $dateTambahan = strtotime($date1." $nHari days");
        echo "<p class='paragraf'>$date1 ditambah $nHari hari jadinya ".date('d-m-Y',$dateTambahan)."</p>";
    }
    if (isset($_POST['date2'])) {
        $date2 = $_POST['date2'];
        echo "<p class='paragraf' >tanggal yang akan datang ".$_POST['date2']."</p>";
        echo "<p class='paragraf' >".strtotime($date2)."</p>";
    }
    
    $selisih = (strtotime($date2) - strtotime($date1)) / (60 * 60 * 24);
    echo "<p class='paragraf' >selisih ".$selisih." hari</p>"

    ?>
</body>

</html>