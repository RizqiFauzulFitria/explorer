<?php

    $db_host = "localhost"; //host karena di lokal, jadi localhost
    $db_user = "root"; // normalnya user dari phpmyadmin itu root, kalau beda disesuaikan aja
    $db_pass = ""; //pass juga defaultnya itu kosong jadi nanti kalau ada di sesuaikan
    $db_name = "explorer"; //nama database explorer

    $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // try {    
    //     //koneksi ke database
    //     $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    // } catch(PDOException $e) {
    //     //jika gagal nanti muncul errornya
    //     die("Terjadi masalah: " . $e->getMessage());
    // }

?>