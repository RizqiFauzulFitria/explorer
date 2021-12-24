<?php 
 
include '../auth/config.php';
 
error_reporting(0);
 
session_start(); //memulai session, fungsinya, misal dia udah login dan belum logout bakal ke home
 
if (isset($_SESSION['username'])) { //jika sessionnya benar atau true
    header("Location: ../../home.php"); //ngarahin ke home kalau udah login
}
 
if (isset($_POST['submit'])) { //saat button dengan name submit ditekan, maka menjalankan dibawah ini
    $email = $_POST['email']; //mengisi variabel email dengan nilai dari input email
    $password = md5($_POST['password']); //mengisi variabel password yang sudah di hash atau enkripsi dengan md5

    $result = mysqli_query($db, "SELECT * FROM user WHERE email='$email' AND password='$password'"); //memasukkan data email dan password ke database tabel user
    if ($result->num_rows > 0) { // kondisi jika email dan password ada di database
        $row = mysqli_fetch_assoc($result); 
        $_SESSION['username'] = $row['username'];
        header("Location: ../../home.php"); //diarahin ke home.php
    }else{
      echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>"; //kalau salah ada peringatan ini
    }
}
 
?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.icon">
    <link rel="stylesheet" href="../styles/sign-up.css">
</head>
<body>
    <div class="container">
        <!-- //form makai action file itu sendiri dan dengan method post -->
        <form class="form" action="" method="POST" id="login"> 
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="email" class="form__input" autofocus placeholder="email" required name="email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" required name="password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="submit">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="../templates/register.php" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>

    </div>
    <script src="./src/scripts/sign-up.js"></script>
</body>
