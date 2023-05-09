<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 80px;
            height: 80px;
            background-color: aquamarine;
            text-align: center;
            font-size: large;
            line-height: 80px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php 

$angka = [[1,2,3], [4,5,6], [7,8,9]];
// echo $angka[1][1];
?>

<?php foreach ( $angka as $a ) : ?>
    <?php foreach ( $a as $b ) : ?>
    <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
 <?php endforeach; ?>
</body>
</html>