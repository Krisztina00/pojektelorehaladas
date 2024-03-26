<?php
    include '../connection.php';
    $alma= $_GET["id"];
    // echo $_SESSION["FLATrequest"];
    $flatDetails = [];

    // $sqld = "SELECT * FROM rentingflats WHERE flatID='$alma';";
    $sqld = "SELECT * FROM flats WHERE id='$alma';";
    
    //echo $sqld;
    $result = mysqli_query($conn, $sqld);
    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($flatDetails,$row);
        }
        //echo $_SESSION["FLATrequest"][0]["flatID"];
    }
    $sql = "SELECT * FROM flatsimgs WHERE flatID = '".$_SESSION['FLATrequest'][0]["flatID"]."'";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result))
    {
        array_push($flatDetails,$row);
    }
    $_SESSION["FLATrequest"] = $flatDetails;

    //echo $_SESSION["FLATrequest"][1]["IMGname"];
    echo "<script>window.location.href = '../../details.php';</script>";
?>