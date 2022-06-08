<?php
    $conn= mysqli_connect("localhost", "root", "","exam");

    if(!$conn){
        echo "Connection Error".mysqli_connect_error();
    }
?>