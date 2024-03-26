<?php
    include '../connection.php';
    session_destroy();
    echo "<script>alert('Sikeres kijelentkezés!');window.location.href = '../../home.php';</script>";
?>