<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
    <style>

        .td-1{
            height: 80px;
            width:80px;
            background-color:black;
        }
        .td-2{
            height: 80px;
            width: 80px;
            background-color: white;
        }
    </style>
</head>
<body>


    <table border="1" cellpadding="10" cellspacing="0">
        <?php

            for ($baris= 1; $baris <= 5 ; $baris++) {
                echo "<tr>";
                for ($kolom = 1; $kolom <= 5 ; $kolom++) {
                  $kotak = $baris + $kolom;
                  if ($kotak % 2 == 0) {
                    echo "<td class='td-1'></td>";
                  } else {
                    echo "<td class='td-2'></td>";
                  }
                }
                echo "</tr>";
              }

        ?>
    </table>
</body>
</html>