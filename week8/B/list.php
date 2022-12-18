<?php 
session_start();
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
    <?php 
    if (isset($_SESSION['nrps'])) {
        $nrps = $_SESSION['nrps'];

        if (count($nrps) > 0) {
            echo "<ul>";
            foreach ($nrps as $nrp ) {
                echo "<li>$nrp</li>";
            }
            echo "</ul>";
        }
    }
    else{
        echo 'gaada';
    }
    ?>
</body>

</html>