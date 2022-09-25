<?php
//get product list from database
//connect to database

function getList(){
    $mysqli = mysqli_connect("localhost","root","","tienda");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

//get products from database
    $result = mysqli_query($mysqli, "SELECT * FROM productos");

//display fetched products in a list
    session_start();
    $array[] = array();
    while ($row = mysqli_fetch_array($result)) {
        $array[] = $row;
    }
    $_SESSION['products'] = $array;
    /*echo "<ul>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<li>";
        echo $row['Nombre'];
        echo " (";
        echo $row['Precio'];
        echo ")";
        echo "</li>";
    }
    echo "</ul>";*/


//close connection
    mysqli_close($mysqli);
}
?>