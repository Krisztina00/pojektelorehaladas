<?php
    // include 'php/connection.php';
    //$sql = 'SELECT * FROM rentingflatsimg, rentingflats where rentingflatsimg.flatID = rentingflats.flatID';
    $sql = 'SELECT * FROM flatsimgs,flats where flatsimgs.id = .flats.id';
    $result = mysqli_query($conn, $sql);
    $_SESSION["FLATS"]  = [];
    while ($row = mysqli_fetch_array($result))
    {
      array_push($_SESSION["FLATS"], $row);
    }
?>