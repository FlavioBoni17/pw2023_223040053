-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2023 at 03:28 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Alat Kesehatan'),
(2, 'Ibu dan Anak'),
(3, 'Suplemen'),
(4, 'Herbal'),
(5, 'Perawatan Tubuh'),
(6, 'Obat');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `detail` text,
  `ketersediaan_stok` enum('habis','tersedia') DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `ketersediaan_stok`) VALUES
(1, 3, 'Enervon-C Effervescent 10 Tablet', 39999, 'gEiy0I7hn3g9gmn5Q4BU.jpg', 'ENERVON C EFFERVESCENT merupakan obat dengan kandungan Vit C 1000, Vit B1, Vit B2, Vit B6mg, Vit B12, Niacinamide, Ca Pantothenate dalam bentuk tablet effervescent. Obat ini digunakan untuk supplemen membantu menjaga daya tahan tubuh serta membantu memulihkan kondisi setelah sakit.                                 ', 'tersedia'),
(2, 3, 'Vitacimin 500 mg Rasa Lemon 2 Tablet', 2899, '3iZhUK99UsNomTzPgQ5x.jpeg', 'VITACIMIN LEMON merupakan suplemen makanan yang mengandung vitamin C. Vitamin ini membantu untuk menjaga daya tahan tubuh.             ', 'tersedia'),
(3, 3, 'Redoxon Effervescent Double Action 10 tablet', 52999, '9rqNscIFeCm0f3Q8tFdk.jpg', 'REDOXON DOUBLE ACTION merupakan suplemen yang mengandung kombinasi vitamin dan mineral yang berguna sebagai suplementasi Vitamin C dan Zinc untuk memelihara daya tahan tubuh. Vitamin C 1000 mg bermanfaat untuk kesehatan dan sebagai antioksidan untuk menangkal radikal bebas, sedangkan Zinc mempengaruhi aktifitas enzim dalam memelihara daya tahan tubuh.                                    ', 'tersedia'),
(4, 6, 'Sanmol 500 mg Isi 4 Tablet', 2799, 'LbqiYDPi7wR86oHPJqBP.jpg', 'SANMOL merupakan obat dengan kandungan Paracetamol 500 mg. Obat ini digunakan untuk meringankan rasa sakit pada keadaan sakit kepala, sakit gigi dan menurunkan demam. Sanmol bekerja pada pusat pengatur suhu di hipotalamus untuk menurunkan suhu tubuh (antipiretik) serta menghambat sintesis prostaglandin sehingga dapat mengurangi nyeri ringan sampai sedang (analgesik).                                                                        ', 'tersedia'),
(5, 2, 'SGM Eksplor 3 Plus Cokelat 400 g', 36999, '2Tuert0zpCJuyyfVY2pW.png', 'SGM EKSPLOR 3 PLUS dengan formula Complinutri merupakan susu bubuk yang ditujukan untuk anak usia 3-5 tahun. Susu ini dapat membantu melengkapi nutrisi untuk dukung si Kecil memiliki 5 Potensi Prestasi Anak Generasi Maju : Berpikir Kreatif, Bantu Tumbuh Kembang, Supel, Mandiri, Percaya Diri. Formula Complinutri membantu melengkapi nutrisi si Kecil karena mengandung zat-zat gizi yang saling mendukung, diantaranya yaitu: 1. Minyak Ikan, Omega 3, Omega 6, zat Besi untuk mendukung daya pikir si Kecil. 2. Tinggi Protein yang penting untuk mendukung pertumbuhan &amp; perkembangan si Kecil. 3. Kalsium &amp; Vitamin D untuk mendukung pembentukan &amp; mempertahankan kepadatan tulang &amp; gigi si Kecil. 4. Vitamin C &amp; Zinc untuk mendukung daya tahan tubuh si Kecil.                                                                        ', 'tersedia'),
(6, 3, 'Vitamin C IPI 50 mg 45 Tablet', 6899, 'zxtimFsNQBFWpwG22lcw.png', 'VITAMIN C IPI merupakan vitamin C berbentuk tablet dengan rasa jeruk yang bermanfaat untuk membantu memenuhi kebutuhan vitamin C.                                    ', 'tersedia'),
(7, 5, 'Scarlett Whitening Shower Scrub Coffee', 72899, 'SV2Dsdtl6EAcMgg3QTD0.jpg', 'Rasakan sensasi kesegeran aroma dari Scarlett Shower Scrub Coffee ketika kamu membersihkan tubuh! Kandungan Glutathione (Mother of Antioxidant), Vitamin E, Collagen dan buliran scrub halus yang terdapat didalam Scarlett Whitening Shower Scrub Coffee apabila digunakan secara rutin dapat membantu meregenerasi, melembabkan serta mencerahkan kulit tubuh secara lebih maksimal.                                    ', 'tersedia'),
(8, 4, 'Listerine Cool Mint 500 ml', 43735, 'Gv8gq1S2lxDGpibUJUWt.png', 'LISTERINE COOL MINT MOUTHWASH merupakan Obat Kumur Antiseptik dengan rasa lebih kuat. Mampu mengurangi 99.9% kuman penyebab masalah mulut seperti bau mulut, plak dan masalah gusi, dengan rasa mint mulut ekstra bersih dan napas lebih segar hingga 12 jam di bandingkan hanya sikat gigi dan flossing saja. Mengandung 4 Essential Oil yaitu Eucalyptol, Menthol, Methyl Salicylate dan Thymol . Digunakan 2x sehari setelah meyikat gigi. Telah tersertifikasi HALAL oleh MUI                                                                                                            ', 'tersedia'),
(9, 1, 'Thermo One Thermometer Alpha 1G', 28999, 'v1HTfKNw6Tlcr5tFoQwO.png', 'Thermometer Digital merek Thermo One Alpha 1 OneMed mudah digunakan, Layar LCD lebar serta dilengkapi tutup pelindung. Ada alarm pada akhir pengukuran suhu dan memori pengukuran terakhir, mati otomatis sesaat setelah tidak digunakan.                                    ', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2a$12$bX6pe0Pj3JPHdg0/ki3cXuauvydqE8GDJJ0p8Z9r7AMZLFax2wmKu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
