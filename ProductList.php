<?php

function getList(){
    $mysqli = mysqli_connect("localhost","root","","tienda");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


    $result = mysqli_query($mysqli, "SELECT * FROM productos");


    session_start();
    $array[] = array();
    while ($row = mysqli_fetch_array($result)) {
        $array[] = $row;
    }
    $_SESSION['products'] = $array;


    mysqli_close($mysqli);
}
?>