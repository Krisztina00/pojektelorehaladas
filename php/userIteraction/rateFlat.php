<?php
include '../connection.php';
    $newRates = [
        $_SESSION["LOGUSER"]["USERID"],
        $_GET["flatid"],
        $_GET["ratenum"],
        $_GET["description"]
    ]; 

    $query = "INSERT INTO `flatRates` (`userID`, `flatID`, ratenumber, rateDiscription) VALUES ($newRates[0], $newRates[1], $newRates[2], '$newRates[3]')";
    echo $query;
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('Sikeres felvétel!');window.location.href = 'home.php';</script>";
    }
    else{
        echo "<script>alert('Sajnos nem sikerült az értékelés!');window.location.href = 'home.php';</script>";
        
    }
?>