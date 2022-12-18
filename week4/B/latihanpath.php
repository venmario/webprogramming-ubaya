<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Path</title>
    <link rel="stylesheet" href="../Asset/css/style.css">
</head>

<body>
    <?php 
    $random = rand(1,6);
    echo $random;
    ?>
    <br>
    <!-- absolute path -->
    <p class="text-center">
        <img src="http://localhost/webprog/week4/Asset/image/<?php echo $random; ?>.png" alt="dadu"
            class="round border image">
        <br>
        <!-- relative path -->
        <img src="../Asset/image/<?php echo $random; ?>.png" alt="" class="round border image">
    </p>
    <a href="latihanquerystring.php?angka=<?php echo $random; ?>">
        Click Me
    </a>
</body>

</html>