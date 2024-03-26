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
    <title>Profile</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'templates/nav.php';
        ?>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h1>DATA OF THE USER</h1>
                <p>Username : <span class="text-primary"> <?php echo  $_SESSION["LOGUSER"]["USERNAME"]?></span></p>
                <p>First name : <span class="text-primary"> <?php echo  $_SESSION["LOGUSER"]["FIRSTNAME"]?></span></p>
                <p>Last name: <span class="text-primary"> <?php echo  $_SESSION["LOGUSER"]["LASTNAME"]?></span></p>
                <p>Email : <span class="text-primary"> <?php echo  $_SESSION["LOGUSER"]["EMAIL"]?></span></p>
                <p>Date of birth : <span class="text-primary"> <?php echo  $_SESSION["LOGUSER"]["DATEOFBIRTH"]?></span></p>
                <p>Phone number : <span class="text-primary"> <?php echo  $_SESSION["LOGUSER"]["PHONENUMBER"]?></span></p>
            </div>
            <div class="col-sm-12 col-md-6">
                <h2>Change some data?</h2>
                <form action="userIteractuion/change.php" method="GET">
                <select class="form-select form-select-lg mb-3" aria-label="Large select example" onchange="megjelenik()">
                    <option selected>Open this select menu</option>
                    <option value="EMAIL">One</option>
                    <option value="PHONENUMBER">Two</option>
                </select>
                </form>
            </div>
        </div>
    </div>
    <script>
    function megjelenik(){
       //Ezt még meg kell írni, hogy lehessen változtatni :) 
    } </script>
</body>
</html>