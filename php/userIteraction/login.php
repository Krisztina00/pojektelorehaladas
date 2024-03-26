<?php
    include '../connection.php';
    $loginUser = [
        $_GET['username'],
        $_GET['password']
    ];
    $sql = 'SELECT * FROM users WHERE username LIKE "' . $loginUser[0] . '" AND password LIKE "' . $loginUser[1].'"';
    echo $sql;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1){
        $_SESSION['LOGUSER'] = [];
        while ($row = mysqli_fetch_assoc($result)){
            $_SESSION["LOGUSER"]["USERNAME"] = $row["username"];
            $_SESSION["LOGUSER"]["USERID"] = $row["id"];
            $_SESSION["LOGUSER"]["EMAIL"] = $row["email"];
            $_SESSION["LOGUSER"]["FIRSTNAME"] = $row["firstname"];
            $_SESSION["LOGUSER"]["LASTNAME"] = $row["lastname"];
            $_SESSION["LOGUSER"]["DATEOFBIRTH"] = $row["dateofbirth"];
            $_SESSION["LOGUSER"]["PHONENUMBER"] = $row["phone"];
            $_SESSION["LOGUSER"]["PERMISSION"] = $row["permission"];
        }
        echo "<script>alert('Sikeres Belépés!');window.location.href = '../../home.php';</script>";
    }
    else{
        echo "<script>alert('Hibás felhasználónév vagy jelszó!');window.location.href = '../../home.php';</script>";
    }
?>