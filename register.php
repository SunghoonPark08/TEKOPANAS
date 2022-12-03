<?php
    include 'koneksi.php';
    // error_reporting(0);
    // session_start();

// if (isset($_SESSION['username'])) {
//     header("location: index.html");
// }
    
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        $sql = "INSERT INTO user (username, email, password)
                VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Wow! user registrastion complete.'</script>";
            $username = "";
            $email = "";
            $_POST['password'] = "";
    // $referer = $_SERVER['HTTP_REFERER'];
        header('index.html');
        } else {
            echo "<script>alert('Woops! something wrong went.')</script>";
        }
                
?>