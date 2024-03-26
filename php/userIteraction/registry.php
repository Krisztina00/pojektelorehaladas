<?php
    include '../connection.php';
    $newUser = [
        $_GET["username"],
        $_GET["password"],
        $_GET["firstName"],
        $_GET["lastName"],
        $_GET["born"],
        $_GET["email"],
        $_GET["phone"],
        $_GET["permission"] = 0,
       
    ];
    $sql = "SELECT * FROM users WHERE username = '$newUser[0]'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Ez a felhasználó név már foglalt, próbáld újra!');window.location.href='home.php';</script>";
    }
    $sql = "INSERT INTO users (username, password, firstname, lastname, dateofbirth, email, phone, permission)
    VALUES ('$newUser[0]', '$newUser[1]', '$newUser[2]', '$newUser[3]', '$newUser[4]', '$newUser[5]', '$newUser[6]', $newUser[7])";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Sikeres regisztráció!');window.location.href = '../../home.php';</script>";
    } else {
        echo "<script> alert('Sajnos nem sikerült a regisztrációd, kérlek próbáld újra.')</script>";
    }
?>