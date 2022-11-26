<?php
    session_start();
    include "koneksi2.php";

    $nisn  = $_REQUEST['nisn'];
    $nama  = $_REQUEST['nama'];
    $kelas  = $_REQUEST['kelas'];
    $nilai = $_REQUEST['nilai'];
    $mysqli  = "INSERT INTO rapot (nisn, nama, kelas, nilai) VALUES ('$nisn', '$nama', '$kelas', '$nilai')";
    $result  = mysqli_query($koneksi, $mysqli);

    if ($result) {
        header("location:hasil-rapot.php");
    } else {
        echo "Input gagal";
    }

    mysqli_close($koneksi);
?>
