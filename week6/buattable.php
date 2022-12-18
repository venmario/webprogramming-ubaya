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
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <?php 
    
    $row = $_GET['row'];
    $col = $_GET['col'];
    ?>
    <table>
        <?php 
        for ($i=0; $i < $row; $i++) { 
            echo "<tr>";
                for ($j=0; $j < $col; $j++) { 
                    echo "<td>lorem ipsum</td>";
                }
            echo "</td>";
        }
            
        ?>
    </table>
</body>

</html>