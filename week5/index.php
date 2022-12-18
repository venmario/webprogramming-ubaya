<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET & POST</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- default action ke diri sendiri method nya get -->
    <form action="backend.php" method="POST">
        <input type="date" class="form-control" name="date1">
        <input type="date" class="form-control" name="date2">
        <input type="number" class="form-control" name="tanggalTambahan">
        <br>
        <br>
        <button class="button" type="submit">submit</button>
        <!-- <input type="submit"> -->
    </form>
</body>

</html>