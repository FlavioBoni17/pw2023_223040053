<?php 
$mahasiswa = [
            ["Flavio Boni", "223040053", "Teknik Informatika", "flavioboni17@gmail.com"], 
             ["Oktaviola Zyoffy", "223040050", "Teknik Informatika", "zyoffy@gmail.com"]
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

<!--  cara 1 menggunakan pengulangan foreach -->
        <!-- <?php foreach( $mahasiswa as $mhs ) : ?> -->
            <!-- <li><?= $mhs; ?></li>
        <?php endforeach ?> -->
        
<!-- cara 2 menggunakan langsung echo -->
            <!-- <li><?php echo $mahasiswa[0]; ?></li>
            <li><?php echo $mahasiswa[1];  ?></li>
            <li><?php echo $mahasiswa[2]; ?></li>
            <li><?php echo $mahasiswa[3]; ?></li> -->

<!-- cara 3 Menambah banyak array-->
<?php foreach( $mahasiswa as $mhs) :  ?>
  <ul>
             <li> Nama : <?= $mhs[0]; ?></li>
            <li> NRP : <?= $mhs[1];  ?></li>
            <li> Jurusan : <?= $mhs[2]; ?></li>
            <li> Email : <?= $mhs[3]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>