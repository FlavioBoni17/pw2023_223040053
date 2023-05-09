<!-- Built in Function -->

<?php 
// FUNCTION

// Date
// Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// Menggabungkan date & time
// echo date( "d-M-Y", time() -60*60*24*100 );

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,10,17,2006));

// strtotime
// echo date( "l", strtotime("17 oct 2006"));



?>