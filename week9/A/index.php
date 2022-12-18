<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
</head>

<body>
    <?php 
    session_start();

    if (isset($_SESSION['error'])) {
        echo "<p>".$_SESSION['error']."</p>";
        unset($_SESSION['error']);
    }
    
    ?>
    <form action="biodata.php" method="post" enctype="multipart/form-data">
        <label>Nama</label> <input type="text" name="nama"><br>
        <label>Umur</label> <input type="number" name="umur"><br>
        <label>Tanggal Lahir</label> <input type="date" name="tanggal"><br>
        <label>Jenis Kelamin</label>
        <select name="kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        <label>Foto</label><input type="file" name="foto"><br>

        <input type="submit" value="Submit" name="btnsubmit">
    </form>
</body>

</html>