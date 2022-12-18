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
    
    if (isset($_GET['nrp'])) {
        echo $_GET['nrp'];
    }
    echo "<br>";
    if (isset($_GET['nama'])) {
        echo $_GET['nama'];
    }

    if (isset($_GET['angka'])) {
        echo 
        '<p class="text-center">
            <img src="../Asset/image/'.$_GET['angka'].'.png" alt="" class="round border image">
    </p>';
    }
    ?>
</body>

</html>