<?php 
session_start();
require "../koneksi.php";
require "../functions.php";

if(isset($_POST["register"])) {
    
    if(registrasi($_POST) > 0 ) {
        echo "<script>
                    alert('user baru berhasil ditambahkan!');
                </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<style>
    .main{
        height: 100vh;
    }

    .login-box{
        width: 500px;
        height: 400px;
        box-sizing: border-box;
        border-radius: 10px;
    }

    body {
        background-image: url(../img/n.jpg);
    }
</style>
<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 shadow">
            <h3 class="d-flex justify-content-center">Daftar Sekarang</h3>
            <form action="" method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                    <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div>
                    <label for="password2">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="password2" id="password">
                </div>
                <div>
                    <button class="btn btn-success form-control mt-3" type="submit" name="register">Register</button>
                </div>
                <a href="login.php">Sudah Punya Akun ? Silahkan Login</a>
            </form>
        </div>


    </div>
</body>
</html>