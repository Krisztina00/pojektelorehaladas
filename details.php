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
    <title>House</title>
</head>

<body>
    <div class="container-fluid">
        <?php
        include 'templates/nav.php';
        ?>
        <div class="position-absolute top-50 start-50 translate-middle">

        <div class="card" style="width: 18rem;">
            <img src="img/<?php echo  $_SESSION["FLATrequest"][1]["imgname"];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_SESSION["FLATrequest"][0]["city"];?></h5>
                <p class="card-text"><?php
                    echo $_SESSION["FLATrequest"][0]["description"];
                ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php
                    $sql = "SELECT * FROM users WHERE userID =". $_SESSION["FLATrequest"][0]["userID"];
                   
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) == 1) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<b>A kiadó: </b> ".$row["username"];
                        }
                    }
                ?></li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Üzenet a tulajnak</a>
                <form action="php/flats/reserve.php"><input type="hidden" name="flatID"value="<?php echo $_SESSION["FLATrequest"][0]["flatID"]?>"> <input class="btn btn-primary"type="submit" value="Lefoglalom"> Lefoglalom</form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>