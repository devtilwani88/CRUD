<?php

function connectDB($db){

    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    

    $conn = mysqli_connect($host, $user, $pwd,$db);

    if ($conn === false) {
        return false;
    }
    else{
        return $conn;
    }
}

?>