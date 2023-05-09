<?php


$mahasiswa = [ 
        [
            "nama" => "Flavio Boni",
            "nrp" => "223040053",
            "email" => "flavioboni@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "flavio.png"
        ], 
        [
            "nama" => "Ahmad Suherman",
            "nrp" => "223040066",
            "email" => "ahmadsuherman@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "1.jpg"
        ],
         [
            "nama" => "Aldi Pradana",
            "nrp" => "223040035",
            "email" => "aldipradana@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "2.jpg"
        ],
        [
            "nama" => "Arya Saputra",
            "nrp" => "223040051",
            "email" => "aryasaputra@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "3.jpg"
        ],
        [
            "nama" => "Rangga Dhani",
            "nrp" => "223040063",
            "email" => "ranggadhani@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "4.png"
        ],
        [
            "nama" => "Rama Dhaniaji Refin",
            "nrp" => "223040040",
            "email" => "ramadhaniaji@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "5.jpg"
        ],
        [
            "nama" => "Fakih Helmi",
            "nrp" => "223040056",
            "email" => "fakih@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "6.jpg"
        ],
        [
            "nama" => "Fikryawan Nugraha",
            "nrp" => "223040058",
            "email" => "fikryawan@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "7.jpg"
        ],
        [
            "nama" => "Anggi Mauliya",
            "nrp" => "223040064",
            "email" => "anggi@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "2.jpg"
        ],
        [
            "nama" => "Muhammad Alief",
            "nrp" => "223040061",
            "email" => "alief@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "5.jpg"
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