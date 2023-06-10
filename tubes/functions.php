<?php 

function koneksi() {
$conn = mysqli_connect( 'localhost', 'root', '', 'pharmacy') or die ('KONEKSI KE DATABASE GAGAL!');
return $conn;
}
    
    function hapus($id) {
    $conn = koneksi();
    $query = "DELETE FROM kategori WHERE id = '$id' ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
    }

?>