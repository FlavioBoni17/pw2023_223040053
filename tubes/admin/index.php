<?php 
    require "session.php";
    require "../koneksi.php";

    $queryKategori = mysqli_query($conn, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);

    $queryProduk = mysqli_query($conn, "SELECT * FROM produk");
    $jumlahProduk = mysqli_num_rows($queryProduk);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharmacy | Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="../dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
    <script nonce="6e9e8c8a-b2f4-4e30-8dea-4553623bad89">(function(w,d){!function(Y,Z,_,ba){Y[_]=Y[_]||{};Y[_].executed=[];Y.zaraz={deferred:[],listeners:[]};Y.zaraz.q=[];Y.zaraz._f=function(bb){return function(){var bc=Array.prototype.slice.call(arguments);Y.zaraz.q.push({m:bb,a:bc})}};for(const bd of["track","set","debug"])Y.zaraz[bd]=Y.zaraz._f(bd);Y.zaraz.init=()=>{var be=Z.getElementsByTagName(ba)[0],bf=Z.createElement(ba),bg=Z.getElementsByTagName("title")[0];bg&&(Y[_].t=Z.getElementsByTagName("title")[0].text);Y[_].x=Math.random();Y[_].w=Y.screen.width;Y[_].h=Y.screen.height;Y[_].j=Y.innerHeight;Y[_].e=Y.innerWidth;Y[_].l=Y.location.href;Y[_].r=Z.referrer;Y[_].k=Y.screen.colorDepth;Y[_].n=Z.characterSet;Y[_].o=(new Date).getTimezoneOffset();if(Y.dataLayer)for(const bk of Object.entries(Object.entries(dataLayer).reduce(((bl,bm)=>({...bl[1],...bm[1]})),{})))zaraz.set(bk[0],bk[1],{scope:"page"});Y[_].q=[];for(;Y.zaraz.q.length;){const bn=Y.zaraz.q.shift();Y[_].q.push(bn)}bf.defer=!0;for(const bo of[localStorage,sessionStorage])Object.keys(bo||{}).filter((bq=>bq.startsWith("_zaraz_"))).forEach((bp=>{try{Y[_]["z_"+bp.slice(7)]=JSON.parse(bo.getItem(bp))}catch{Y[_]["z_"+bp.slice(7)]=bo.getItem(bp)}}));bf.referrerPolicy="origin";bf.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(Y[_])));be.parentNode.insertBefore(bf,be)};["complete","interactive"].includes(Z.readyState)?zaraz.init():Y.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <i class="fas fa-home"></i> 
                Home
            </li>
        </ol>
        </nav>
    </ul>

    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
    <i class="fas fa-expand-arrows-alt"></i>
    </a>
    </li>
    </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
    <img src="../img/user.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    <a href="#" class="d-block"><?= $_SESSION['username']; ?></a>
    </div>
    </div>


    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item">
    <a href="index.php" class="nav-link">
    <i class="fas fa-home nav-icon"></i>
    <p>Home</p>
    </a>
    </li>

    <li class="nav-item">
    <a href="kategori.php" class="nav-link">
    <i class="fas fa-align-justify nav-icon"></i>
    <p>Kategori</p>
    </a>
    </li>

    <li class="nav-item">
    <a href="produk.php" class="nav-link">
    <i class="fas fa-box nav-icon"></i>
    <p>Produk</p>
    </a>
    </li>

    <li class="nav-item">
    <a href="logout.php" class="nav-link">
    <i class="fas fa-sign-out-alt nav-icon"></i>
    <p>Logout</p>
    </a>
    </li>

    </ul>
    </li>

    </ul>
    </nav>

    </div>
    </aside>

    <div class="content-wrapper">

    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Dashboard</h1>
    </div>

    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
    </div>
    </div>
    </div>
    </div>


    <section class="content">
    <div class="container">
    <div class="row">

    <div class="col-lg-4 col-6 p-3">
    <div class="small-box bg-success">
    <div class="inner">
    <h3><?= $jumlahKategori; ?> Kategori</h3>
    <p>Kategori</p>
    </div>
    <div class="icon">
    <i class="fas fa-align-justify"></i>
    </div>
    <a href="kategori.php" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-4 col-6 p-3">
    <div class="small-box bg-info">
    <div class="inner">
    <h3><?= $jumlahProduk; ?> Produk</h3>
    <p>Produk</p>
    </div>
    <div class="icon">
    <i class="fa fa-box"></i>
    </div>
    <a href="produk.php" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    </div>
    </div>
    </section>

    


    </div>

    <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="https://adminlte.io">flavioboni</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
    </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

    </div>


    <script src="../plugins/jquery/jquery.min.js"></script>

    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../plugins/chart.js/Chart.min.js"></script>

    <script src="../plugins/sparklines/sparkline.js"></script>

    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>

    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="../plugins/summernote/summernote-bs4.min.js"></script>

    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="../dist/js/adminlte.js?v=3.2.0"></script>

    <script src="../dist/js/demo.js"></script>

    <script src="../dist/js/pages/dashboard.js"></script>
    </body>
    </html>
