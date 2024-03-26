<?php
    include '../connection.php';


    if (isset($_GET["garden"]) && $_GET["garden"] == "on"){
        $_GET["garden"] = 1;
    }
    else{
        $_GET["garden"] = 0;
    }
    if (isset($_GET["flat"]) && $_GET["flat"] == "on"){
        $_GET["flat"] = 1;
    }
    else{
        $_GET["flat"] = 0;
    }


    $uploadFlat = [
        $_GET['city'],
        $_GET['street'],
        $_GET['number'],
        $_GET['floorDoor'],
        $_GET['description'],
        $_GET['price'],
        $_SESSION['LOGUSER']["USERID"],
        $_GET['startdate'],
        $_GET['enddate'],
        $_GET['style']
    ];
    echo $_GET["garden"];
    //$query = "INSERT INTO `rentingflats` (`fpostalCode`, `fCounty`, `fAddress`, `userID`, `fdescription`, `garden`, `flat`, `fdateStart`, `fdateEnds`, `fstyle`, `fcity`) VALUES ($uploadFlat[0], '$uploadFlat[1]', '$uploadFlat[2]', '$uploadFlat[3]', '$uploadFlat[4]', '$uploadFlat[5]', '$uploadFlat[6]', '$uploadFlat[7]', '$uploadFlat[8]', '$uploadFlat[9]', '$uploadFlat[10]')";
    $query = "INSERT INTO `flats`(`city`, `street`, `number`, `floorDoor`, `description`, `price`, `user_id`, `start_date`, `end_date`, `style_id`) VALUES ('$uploadFlat[0]', '$uploadFlat[1]', '$uploadFlat[2]', '$uploadFlat[3]', '$uploadFlat[4]', '$uploadFlat[5]', '$uploadFlat[6]', '$uploadFlat[7]', '$uploadFlat[8]', '$uploadFlat[9]')";
    echo $query;
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('Sikeres felvétel!');window.location.href = 'home.php';</script>";
    } else {
        echo "<script>alert('Sajnos nem sikerült felvinnünk, próbáld meg újra!');window.location.href = 'home.php';</script>";
    }

?>
