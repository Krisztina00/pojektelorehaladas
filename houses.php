<?php
    include 'php/connection.php';
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Houses</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'templates/nav.php';
        ?>
        <div class="row">
    <?php
        include 'php/flats/listing.php';
        foreach ($_SESSION["FLATS"] as $i){
            echo '<div class="col-3"> <form action="php/flats/reszletek.php" method="get"><input type="hidden" name="id" value="'. $i["id"].'<div class="card"><img src="img/'.$i["img"].'" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">'.$i["city"].'</h5><p class="card-text">'.$i["description"].'</p><input type="submit" class="btn btn-primary" value="Details..."></div></div></form> ';
        }
    ?>
    </div>
    </div>
</body>
</html>