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
    <title>Registry</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include "templates/nav.php";
        ?>
    <div class="position-absolute top-50 start-50 translate-middle">
        <form action="php/userIteraction/registry.php">
            <input class="form-control my-3" type="text" name="username" placeholder="Username">
            <input class="form-control  my-3"  type="password" name="password" placeholder="PassWord">
            <input class="form-control  my-3"  type="text" name="firstName" placeholder="First name">
            <input class="form-control  my-3"  type="text" name="lastName" id="" placeholder="Last name">
            <input class="form-control  my-3"  type="date" name="born" placeholder="Date of birth">
            <input class="form-control  my-3"  type="text" name="email" placeholder="Email">
            <input class="form-control  my-3"  type="text" name="phone" placeholder="Phone-number"> 
            <input class="btn btn-primary my-3 mx-auto" type="submit" name="registryBTN" value="Submit">
        </form>
    </div>
    </div>
</body>
</html>