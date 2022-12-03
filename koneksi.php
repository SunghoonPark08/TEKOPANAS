<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'tekopanas';

    $conn = mysqli_connect ($host, $user, $pass, $db); //sesuaikan dengan password dan username mysql anda
    if ($conn) {
        //  echo "<script>alert('koneksi berhasil')</script>";
    }
    else{
    die("gagal");
    }
    // mysqli_select_db($conn, $db);

    // "localhost:8080"
?>