<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Nilai Rapot</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style copy.css" rel="stylesheet">
</head>
<body>
     <!-- Navbar Start -->
     <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>Matematika SMP</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="home.php" class="nav-item nav-link active">Home</a>
                    <!--<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Bilangan Bulat</a>
                        <div class="dropdown-menu m-0">
                            <a href="#indikator"class="dropdown-item">Indikator</a>
                            <a href="#manfaat" class="dropdown-item">Manfaat</a>
                            <a href="#tujuan" class="dropdown-item">Tujuan</a>
                            <a href="#" class="dropdown-item">Materi</a>
                        </div>
                    </div>-->
                    <a href="#indikator"class="nav-item nav-link">Indikator</a>
                    <a href="#manfaat" class="nav-item nav-link">Manfaat</a>
                    <a href="#tujuan" class="nav-item nav-link">Tujuan</a>
                    <a href="#materi" class="nav-item nav-link">Materi</a>
                    <a href="latsoal.php" class="nav-item nav-link">Latihan Soal</a>
                    <a href="#footer" class="nav-item nav-link">About Us</a>
                </div>
                <a href="rapot.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Rapor</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
<br>
<br>
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 60px;">
    <div class="container text-center my-4 py-4">
        <h1 class="text-white mt-4 mb-4">HASIL RAPOR SISWA MATERI BILANGAN BULAT</h1>
        <div class="text-white mx-auto mb-5" style="width: 100%; max-width: 400px;">
            <?php
            session_start();
            include "koneksi2.php";
            $rapot = mysqli_query($koneksi, 'SELECT * FROM rapot');
            $hasil = mysqli_fetch_array($rapot);

            echo "NISN : " . $hasil['nisn'] . "</br>";
            echo "Nama : " . $hasil['nama'] . "</br>";
            echo "Kelas : " . $hasil['kelas'] . "</br>";
            echo "Nilai Latihan Bilangan Bulat : " . $hasil['nilai'] . "</br>";
            ?>
        </div>
</body>
</html>