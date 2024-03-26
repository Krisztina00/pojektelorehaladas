<?php
    include '../connection.php';
    $newReserve = [
        $_SESSION["LOGUSER"]["USERID"],
        $_GET["flatID"],
        "RESERVED"
    ];
    //$sql = "insert into reservation (userID, flatID, rstatus) VALUES ($newReserve[0], $newReserve[1], '$newReserve[2]')";
    $sql = "insert into reservations (user_id, flat_id, status) VALUES ($newReserve[0], $newReserve[1], '$newReserve[2]')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Sikeres foglalás!');window.location.href = '../../home.php';</script>";
    } else {
        echo "<script> alert('Sajnos nem sikerült a foglalás, kérlek próbáld újra.')</script>";
    }
?>