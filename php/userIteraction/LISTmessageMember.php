<?php
    //include 'php/connection.php';

    $sql = 'SELECT username, receiver_id FROM users, messages WHERE users.id = sender_id or users.id = receiver_id GROUP BY username' ;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >0){
        echo '<div class="row">';
        while ($row = mysqli_fetch_assoc($result)){
            echo '<div class="col-12"> <form action="seeMail.php" method="get"> <input type="hidden"  name="receiver" value="'.$row['receiver_id'].'"> <input class="btn w-100" type="submit" value="'.$row["username"].'"<form></div>';
        }
        echo '</div>';
    }

    mysqli_close($conn);
?>