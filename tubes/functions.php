<?php 

function koneksi() {
$conn = mysqli_connect( 'localhost', 'root', '', 'pharmacy') or die ('KONEKSI KE DATABASE GAGAL!');
return $conn;
}

    // file foto biar tidak sama
function generateRandomString($length = 10) {
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWQYZ";
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>