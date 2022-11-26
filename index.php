<?php
    session_start();
    include "koneksi2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
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
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 60px;">
        <div class="container text-center my-4 py-4">
            <h1 class="text-white display-1 mb-1">BILANGAN BULAT</h1>
            <h1 class="text-white mt-4 mb-4">Ayo Gabung di Kelas Belajar Matematika SMP!</h1>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 400px;">
                <div class="input-group">
                    <!-- form start-->
                    <form method="post">
                    <div class="input-form">
                        <div>
                        <br>
                        <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="NISN" name = "fNISN"><br>
                        <input type="text"class="form-control border-light" style="padding: 30px 25px;" placeholder="Nama" name = "fNama"><br>
                        <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Kelas" name = 'fKelas'><br>
                        <button type = "submit" class="btn btn-secondary px-4 px-lg-5" name = "fmasuk">login</button>
                        </div>
                    </div>
                    </form>

                    <?php
                        if (isset($_POST["fmasuk"])){
                            $NISN = $_POST['fNISN'];
                            $Nama = $_POST['fNama'];
                            $qry = mysqli_query($koneksi, "select * from login where NISN = '$NISN' and Nama = '$Nama'");
                            $cek = mysqli_num_rows($qry);
                            if ($cek == 1){
                                $_SESSION['userweb']=$NISN;
                                header ("location:home.php");
                                exit;
                            }
                            else
                            echo '<font color = "white">Maaf username dan password salah</font>';
                        }
                    ?>
                    <!-- form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</body>
</html>