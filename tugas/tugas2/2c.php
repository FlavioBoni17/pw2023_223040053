<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>

        td{
            width: 50px;
            height: 50px;
            background-color: greenyellow;
            border: 2px solid black;
            text-align:center;
        }

    </style>
</head>
<body>


    <table cellpadding="10" cellspacing="0">
        <?php 

        $baris= 1;

        for ($no = 10; $no >= $baris; $no--) {
            echo "<tr>";
            for ($kolom = 1; $kolom <= $no; $kolom++) {
                echo "<td>$kolom</td>";
            }
            echo "</tr>";
        }
        
        ?>
    </table>
</body>
</html>