<?php 
require "koneksi.php";

$nama = htmlspecialchars($_GET['nama']);
$queryProduk = mysqli_query($conn, "SELECT * FROM produk WHERE nama='$nama'");
$produk = mysqli_fetch_array($queryProduk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy | Produk Detail</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php" ?>

    <!-- detail produk -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="img/<?= $produk['foto']; ?>" class="w-100" alt="">
                </div>
                    <div class="col-lg-6 offset-lg-1">
                        <h1><?= $produk['nama']; ?></h1>
                        <p class="fs-5"><?= $produk['detail']; ?></p>
                        <p class="text-harga">
                            Rp <?= $produk['harga']; ?>
                        </p>
                        <p class="fs-5">Status Ketersediaan : <strong><?= $produk['ketersediaan_stok']; ?></strong></p>
                    </div>
            </div>
        </div>
    </div>
    
    <?php 
    require "footer.php";
    ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>