<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Asset/css/style.css">
    <style>
        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php 
    
    $angka = rand(1,6);
    echo $angka;
    ?>
    <br>
    <!-- relative path -->
    <!-- <img src="../Asset/image/<?php echo $angka ?>.png" alt="sd"> -->
    <!-- absolute path -->
    <p class="text-center">
        <img src="http://localhost/webprog/week4/Asset/image/<?php echo $angka ?>.png" class="rounded border image">
    </p>

    <a href="latihanquerystring.php?angka=<?php echo $angka ?>">
        Click Me
    </a>
</body>

</html>