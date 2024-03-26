<?php
    include '../connection.php';
    $message = [
        $_SESSION['LOGUSER']["USERID"],
        $_GET['receiver_id'],
        $_GET['message']
    ];

    $sql = "INSERT INTO messages(message, sender_id, receiver_id, date) VALUES ('$message[2]', '$message[0]', '$message[1]')";
    $result = mysqli_query($conn, $sql);
?>