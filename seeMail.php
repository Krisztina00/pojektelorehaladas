<?php
    include 'php/connection.php';
    $message = [
        $_SESSION["LOGUSER"]["USERID"],
        $_GET["receiver"]
    ];

    $sql = "SELECT * FROM messages WHERE sender_id = $message[0] OR receiver_id= $message[0] ORDER BY date DESC";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["message"]."<br>";
        }
    }
    
?>