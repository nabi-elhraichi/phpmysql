<?php
    $servername = "localhost";
    $username= "sqluser";
    $password = "0606620463Baba*";
    $dbname = "notes";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn){
        die("Connection failed" . mysqli_connect_error());
    }

?>