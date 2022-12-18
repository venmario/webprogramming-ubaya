<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Asset/css/style.css">
</head>

<body>
    <?php 
    
    if (isset($_GET['data'])) {
        echo $_GET['data'];
    }

    if (isset($_GET['angka'])) {
        echo $angka = $_GET['angka'];
    }
    // echo $_GET['nama']."<br>";
    // echo $_GET['nrp'];
    ?>
    <br>
    <p class="text-center">
        <img src="../Asset/image/<?php echo $angka ?>.png" class="rounded border image">
    </p>
</body>

</html>