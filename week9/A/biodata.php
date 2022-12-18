<?php 
session_start();
if ($_FILES['foto']['name']) {
    //upload foto    
    $file_info = getimagesize($_FILES['foto']['tmp_name']);
    if($file_info){
        $nama_baru = sha1($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], "images/$nama_baru.jpg");
    }
    else{
        $_SESSION['error'] = 'File yang diupload bukan gambar!';
        header('Location: index.php');
    }
}
else{
    $_SESSION['error'] = 'Silahkan upload gambar terlebih dahulu!';
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>

<body>
    <h1>Biodata</h1>
    <p>Nama : <?= $_POST['nama'] ?></p>
    <p>Umur : <?= $_POST['umur'] ?></p>
    <p>Tanggal Lahir : <?= $_POST['tanggal'] ?></p>
    <p>Jenis Kelamin : <?= $_POST['kelamin'] ?></p>
    <p>
        <img src="images/<?= $nama_baru ?>.jpg">
    </p>
</body>

</html>