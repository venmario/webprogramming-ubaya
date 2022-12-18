<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table td,
        table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;

            <?php if (isset($_GET['color'])) {
                echo 'background-color:'.$_GET['color'].";";
            }

            else {
                echo 'background-color: #04AA6D;';
            }

            ?>color: white;
        }
    </style>
</head>

<body>
    <?php 
    
    $mahasiswas = array(
        array('nrp'=>'160419091','nama'=>'Venansius Mario','umur'=>20),
        array('nama'=>'andi','nrp'=>'160419092','umur'=>21),
        array('umur'=>19,'nrp'=>'160419092','nama'=>'budi'),
    );
    //array asosiatif array dengan pasangan key dan value

    // foreach ($mahasiswa as $key => $mhs) {
    //     foreach ($mhs as $key => $value) {
    //         echo $key." ".$value."<br>";
    //     }
    // }

    ?>
    <table>
        <thead>
            <tr>
                <th>NRP</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            foreach ($mahasiswas as $mahasiswa) {
                echo "<tr>";
                    echo "<td>".$mahasiswa['nrp']."</td>";
                    echo "<td>".$mahasiswa['nama']."</td>";
                echo "</tr>";
            }
            
            ?>
        </tbody>
    </table>
</body>

</html>