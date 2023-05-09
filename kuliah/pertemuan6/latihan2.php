<?php 
// Array Numerik
// $mahasiswa = [
//     ["Flavio", "223040053", "flavioboni17@gmail.com", "Teknik Informatika" ],
//     ["Oktaviola", "223040050", "oktaviola17@gmail.com", "Teknik Informatika" ]
// ];

// Array Associative
// definisinya sama seperti array numerik,
// Key-nya bukan index  / Key-nya adalah string yang kita buat sendiri
$mahasiswa = [ 
        [
            "nama" => "Flavio Boni",
            "nrp" => "223040053",
            "email" => "flavioboni@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "flavio.png"
        ], 
          [
            "nama" => "Oktaviola Zyoffy",
            "nrp" => "223040050",
            "email" => "oktaviolazyoffy@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "1.jpg"
        ], 
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

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?php echo $mhs["gambar"]; ?>">
            </li>
            <li> Nama : <?= $mhs["nama"] ?></li>
             <li> NRP : <?= $mhs["nrp"] ?></li>
              <li> Email : <?= $mhs ["email"] ?></li>
               <li> Jurusan : <?= $mhs["jurusan"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>

