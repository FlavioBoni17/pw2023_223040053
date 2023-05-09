<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tokyo Sport</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#home" class="navbar-logo"><span>Tokyo Sport.</span></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#menu">Brand</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="navbar-extra">
        <!-- <a href="#" id="search"><i data-feather="search"></i></a> -->
        <a href="login.php" id="log-in"><i data-feather="log-in"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Ayo Belanja Di <span>Tokyo Sport</span></h1>
        <!-- <p>Login sekarang untuk mengetahui dan membeli banyak produk di toko kami dengan harga yang terjangkau dan produk yang original.</p> -->
        <a href="login.php" class="cta">Login</a>
      </main>
    </section>
    <!-- Hero section end -->
    <!-- About Section Start -->
    <section id="about" class="about">
      <h2><span>About Us</span></h2>

      <div class="row">
        <div class="about-img">
          <img src="img/ll.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa Harus Belanja Di Toko Kami?</h3>
          <p>
            Tokyo Sport adalah toko retail yang menyediakan berbagai macam produk olahraga, mulai dari pakaian, sepatu, aksesoris, hingga alat olahraga. Di Tokyo Sport, tersedia berbagai macam produk olahraga yang dapat dipilih sesuai dengan kebutuhan dan aktivitas olahraga yang diinginkan. Tokyo Sport juga telah menyediakan berbagai produk olahraga terbaik dengan harga yang terjangkau. <p>Temukan berbagai macam perlengkapan & peralatan olahraga terlengkap dan kualitas terbaik dengan aman, dan mudah! Produk olahraga yang tersedia di Tokyo Sport didesain dengan bahan-bahan berkualitas & tahan lama. Rasakan pengalaman berbelanja dengan mudah dan aman hanya di Tokyo Sport.</p>
          </p>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Menu Section Start -->
    <section id="menu" class="menu">
      <h2><span>Our  Brand Best Selling</span></h2>
      <p>Toko kami telah tersedia dengan brand - brand ternama semacam, nike, adidas, ortuseight, dan specs.</p>

      <div class="row">
        <div class="menu-card">
          <img src="img/nke.png" alt="Original" class="menu-card-img" />
          <h3 class="menu-card-title">- NIKE-</h3>
          <!-- <p class="manu-card-price">IDR 5K</p> -->
        </div>
        <div class="menu-card">
          <img src="img/ad.jpeg" alt="Original" class="menu-card-img" />
          <h3 class="menu-card-title">- ADIDAS -</h3>
        </div>
        <div class="menu-card">
          <img src="img/or.jpg" alt="Original" class="menu-card-img" />
          <h3 class="menu-card-title">- ORTUSEIGHT -</h3>
        </div>
        <div class="menu-card">
          <img src="img/specs.png" alt="Original" class="menu-card-img" />
          <h3 class="menu-card-title">- SPECS-</h3>
        </div>
      </div>
    </section>
    <!-- Menu Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="contact">
      <h2><span>Contact Us</span></h2>
      <p>Sebagai penikmat olahraga khususnya sepak bola dan futsal, kami memiliki jawaban untuk semua pertanyaan Anda. Kami berkomitmen untuk memberikan saran dan pengalaman terbaik tentang produk dan layanan yang ditawarkan oleh Tokyo Sport. Hubungi kami, kami ingin mengerti sepatu favorit Anda dan mungkin saja, membantu Anda menemukan sesuatu yang baru !</p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.565496225866!2d107.81393571468698!3d-6.449787095333802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6939dc0a00f609%3A0xb4eef25d1dfbe176!2sToko%20Yopie!5e0!3m2!1sid!2sid!4v1676726650320!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-grup">
            <i data-feather="user"></i>
            <input type="text" placeholder="Nama" />
          </div>
          <div class="input-grup">
            <i data-feather="mail"></i>
            <input type="text" placeholder="Email" />
          </div>
          <div class="input-grup">
            <i data-feather="phone"></i>
            <input type="text" placeholder="Phone" />
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer start -->
    <footer>
      <div class="socials">
        <a href="https://www.instagram.com/fboni17_"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#menu">Brand</a>
        <a href="#contact">Contact Us</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">flavioboni</a>. | &copy; 2023</p>
      </div>
    </footer>
    <!-- Footer End -->
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
