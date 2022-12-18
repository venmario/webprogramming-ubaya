<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            width: 20%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            float: left;
            margin: 15px 35px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .card-desc {
            margin-left: 10px;
        }

        .card-button {
            text-align: center;
            padding: 10px;
        }

        .card-button button {
            border: none;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .card-button button:hover {
            background-color: green;
            color: white;
        }
    </style>
</head>

<body>
    <?php 
    $foods = array(
        array('nama'=>'Bakso', 'harga'=>15000, 'gambar'=>'bakso.jpg'), 
        array('nama'=>'Soto', 'harga'=>20000, 'gambar'=>'soto.jpg'),
        array('nama'=>'Sate Ayam', 'harga'=>20000, 'gambar'=>'sate.jpg'),
        array('nama'=>'Rawon', 'harga'=>25000, 'gambar'=>'rawon.jpg'),
        array('nama'=>'Rujak Cingur', 'harga'=>18000,'gambar'=>'rujak.jpg')
    );
    ?>

    <?php foreach ($foods as $food) : ?>
    <div class="card">
        <div class="card-image">
            <img src="img/<?= $food['gambar'] ?>" style="width: 100%; height: 200px;">
        </div>
        <div class="card-desc">
            <p>Nama : <?= $food['nama'] ?></p>
            <p>Harga : <?= $food['harga'] ?></p>
        </div>
        <div class="card-button">
            <button>Tambah</button>
        </div>
    </div>
    <?php endforeach ?>


</body>

</html>