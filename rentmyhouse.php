
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
    <title>Rent ur own house</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'templates/nav.php';
      ?>
       <div class="position-absolute top-50 start-50 translate-middle">
        <form action="php/flats/uploadFlat.php" method="get">
            <input class="form-control my-3" type="text" name="city" placeholder="city">
            <input class="form-control my-3" type="text" name="street" placeholder="street">
            <input class="form-control my-3" type="text" name="number" placeholder="number">
            <input class="form-control my-3" type="text" name="floorDoor" placeholder="floor/door">
            <input class="form-control my-3" type="text" name="description" placeholder="description">
            <input class="form-control my-3" type="number" name="price" placeholder="price">
            <input class="form-control my-3" type="date" name="startdate" placeholder="startdate">
            <input class="form-control my-3" type="date" name="enddate" placeholder="enddate">
            <input class="form-control my-3" type="text" name="style" placeholder="style">

            <input class="btn btn-primary my-3 mx-auto" type="submit" name="uploadBTN" value="Submit">
        </form>   
        </div>

    </div>
</body>
</html>