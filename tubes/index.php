<?php 
require "koneksi.php";

$queryProduk = mysqli_query($conn, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy | Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>

    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>Flavio Pharmacy</h1>
            <h3>Toko Kesehatan Terlengkap dan Terpercaya</h3>
            <div class="col-md-8 offset-md-2">
                <form  action="produk.php" method="get">
                <div class="input-group input-group-lg my-4">
                <input type="text" class="form-control" placeholder="Cari Produk" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword" autocomplete="off">
                <button type="submit" class="btn warna2 text-white">Telusuri</button>
            </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <!-- highligted kategori -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Kategori</h3>
            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highligted-kategori kategori-medical-devices d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=medical-devices">Alat Kesehatan</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highligted-kategori kategori-body-care d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=body-care">Perawatan Tubuh</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highligted-kategori kategori-suplemen d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=suplemen">Vitamin & Suplemen</a></h4>
                    </div>
                </div>
                    <div class="col-md-4 mt-3">
                        <div class="highligted-kategori kategori-herbal d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=herbal">Herbal</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="highligted-kategori kategori-ibu d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=ibu-dan-anak">Ibu & Anak</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="highligted-kategori kategori-obat d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=obat">Obat & Perawatan</a></h4>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- tentang kami -->
    <div class="container-fluid warna2 py-5">
        <div class="container text-center">
            <h3>Tentang Kami</h3>
            <p>Kenapa harus beli obat secara Online?</p>
            <p>Saat ini sudah banyak dan menjamur pembelian produk secara online. Dengan teknologi yang semakin maju, banyak industri yang menghadirkan aplikasi beli barang yang diinginkan dan dibutuhkan secara online. Masyarakat dimudahkan dengan cara pembelian secara online. Customer hanya perlu smartphone, selanjutnya pilih produk yang diinginkan dan barang pilihannya akan dikirimkan ke alamat sesuai yang diinginkan.</p>
            <p>Tidak hanya produk seperti baju, makanan, transportasi atau kebutuhan lainnya, saat ini Obatpun juga bisa dibeli secara online. Aplikasi Beli Obat secara online, seharusnya tidak asing didengar. Aplikasi beli obat obat secara online menghadirkan kemudahan yang dapat menguntungkan customer atau pasien disaat mereka membutuhkan obat, maupun kebutuhan kesehatan lainnya. Apalagi, disaat kondisi virus Covid-19 yang mulai meluas yang menyebabkan masyrakat mulai mengurangi bertemu dengan orang dan ditambah lagi dibeberapa daerah yang mengalami PSBB, aplikasi beli obat online adalah salah satu solusi yang tepat untuk masyarakat mendapatkan obat yang diinginkan. Tidak perlu masyarakat harus mendatangi satu apotek ke apotek lain, obat yang diinginkan bisa diterima.</p>
        </div>
    </div>

        <!-- produk -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Produk Terlaris</h3>

            <div class="row mt-5">
                <?php while($data = mysqli_fetch_array($queryProduk)) { ?>
                <div class=" col-sm-6 col-md-3 mb-3">
                        <div class="card h-100">
                            <!-- <div class="image-box"> -->
                                <img src="img/<?= $data['foto']; ?>" class="card-img-top" alt="...">
                            <!-- </div> -->
                            <div class="card-body">
                                <h4 class="card-title"><?= $data['nama']; ?></h4>
                                <p class="card-text text-truncate"><?= $data['detail']; ?>.</p>
                                <p class="card-text text-harga">Rp <?= $data['harga']; ?></p>
                                <a href="produk-detail.php?nama=<?= $data['nama']; ?>" class="btn warna2 text-white">Lihat Detail</a>
                            </div>
                        </div>
                </div>
                <?php } ?>
            </div>
            <a href="produk.php" class="btn btn-outline-success mt-3">See More</a>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php" ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>