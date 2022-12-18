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
    $nisbi = "AB";
    $nilai = 0;
    echo '<p>Nisbi web programming ku '.$nisbi.'</p>';
    if ($nisbi == "A"){
        $nilai = 81;
    }
    else if($nisbi == 'AB'){
        $nilai = 73;
    }
    else{
        $nilai = 50;
    }

    echo "<h1>Nilai web Programming ku $nilai jadi nisbiku itu $nisbi</h1>";

    switch($nisbi){
        case 'A':
            echo 81;
            break;
        case 'AB':
            echo 73;
            break;
        default:
            echo 'nisbi tidak terdaftar';
    }
    echo "<br>";
    $hari = 'Rabu';
    $sisaHari=  '';

    // if($hari == 'Senin'){
    //     $sisaHari = 'Selasa rabu.. minngu';
    // }
    // else if($hari == 'Selasa'){
    //     $sisaHari = 'Rabu .. minggu'
    // }

    switch($hari){ //rabu
        case 'Senin':
            $sisaHari = $sisaHari."Selasa, ";
        case 'Selasa':
            $sisaHari = $sisaHari."Rabu, ";
        case 'Rabu':
            $sisaHari = $sisaHari."Kamis, ";// kamis,
        case 'Kamis':
            $sisaHari = $sisaHari."Jumat, ";// kamis, jumat, 
        case 'Jumat':
            $sisaHari = $sisaHari."Sabtu, ";// kamis, jumat, Sabtu
        case 'Sabtu':
            $sisaHari = $sisaHari."Minggu ";// kamis, jumat, sabtu, minggu
        case 'Minggu':
            $sisaHari = $sisaHari."";
            break;
        default:
            $sisaHari = 'Bukan hari yang ada di bumi';
    }
    echo $sisaHari;
    ?>
    <br>
    <?php 
    $angka = 1;
    switch ($angka) {
        case 1:
        case 2:
        case 3:
            echo "$angka lebih kecil dari 4";
            break;
        default:
            echo "$angka lebih besar dari 3";
            break;
    }
    echo "<br>";
    for ($i=1; $i <= 10 ; $i++) { 
        echo $i."<br>";
    }

    echo strtoupper("capslock");
    echo strtolower("CAPSLOCK");
    echo round(0.243, 2);

    ?>
    <br>
    <?php 
    
    echo ceil(0.1)."<br>";
    echo floor(0.9)."<br>";
    ?>
</body>

</html>