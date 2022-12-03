<?php 
    include 'koneksi.php';
    session_start();
    error_reporting(0);
if (isset($_SESSION['username'])) {
    header("location: index.html");
}
        // $username = $_POST['username'];
        // $password = $_POST['password'];
        
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['username'] = $row['username'];
                    header("Location: index.html");
                } else {
                    echo "<script>alert('Woops! username or password is wrong.')</script>";
                }
         }
        // if (!empty($username) && !empty($password)) {
        //     $sql = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
        //     $result = mysqli_num_rows($sql);
        //     if ($result) {
        //         echo "anda berhasil masuk!";
        //         echo "klik <a href ='home.html'> disini</a> untuk melanjutkan";
        //     } else {
        //         echo "username dan password salah";
        //     }
        // } else {
        //     echo "email dan password anda kosong, silahkan diisi.";
        // }
?>
