<?php

require_once("../auth/config.php"); //menggunakan config


if(isset($_POST['Submit'])){ //ketika button dengan name Submit maka dibawah ini akan dijalankan

    $username = $_POST['username']; //variabel username dimasukkan dengan nilai dari input username
    $email = $_POST['email'];//variabel email dimasukkan dengan nilai dari input email
    $password = md5($_POST['password']); //variabel password dimasukkan dan di enkripsi dengan md5 

    $result = mysqli_query($db, "INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$username','$email','$password')"); //menjalankan query , memasukkan username, email, passwrod kedalam kolom username, email, password

    header("Location: login.php"); //kalau berhasil langsung kehalama login

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
        <!-- action file itu sendiri dengan method POST -->
        <form class="form" action="" method="POST" id="createAccount"> 
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" name="username" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email Address" name="email" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" id="password" name="password" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password" id="confirm-pass" name="confirm_password" required onchange="checkpass()">
                <div class="form__input-error-message"></div>
            </div>

            <button class="form__button" type="submit" name="Submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="./login.php" id="linkCreateAccount">Already have an account? login</a> //kalau udah punya akun arahin ke login
            </p>
        </form>
    </div>
    <script src="./src/scripts/sign-up.js"></script>
</body>
