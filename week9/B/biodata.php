<?php 
session_start();
die(var_dump($_FILES));
if ($_FILES['foto']['name']) {
    $file_info = getimagesize($_FILES['foto']['tmp_name']);

    if ($file_info) {
        // foto.jpg
        $nama_baru = sha1($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], "images/$nama_baru.jpg");
    }
    else{
        //kalau gambarnya palsu
        $_SESSION['error'] = 'File yang diupload bukan gambar!';
        header('location: index.php');
    }
}
else{
    //kalau tidak upload
    $_SESSION['error'] = 'Silahkan upload gambar terlebih dahulu!';
    header('location: index.php');
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
    <label>Nama :
        <?php echo $_POST['nama'];?></label> <br>
    <label>Umur : <?= $_POST['umur'];?></label> <br>
    <label>Tanggal Lahir : <?= $_POST['tanggal'];?></label><br>
    <label>Jenis Kelamin : <?= $_POST['kelamin'];?></label>
    <br>
    <img src="images/<?= $nama_baru ?>.jpg">
</body>

</html>