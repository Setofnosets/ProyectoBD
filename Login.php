<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="tienda";
$db_table_name="usuario";
$db_table_name2="nombre_usuario";
$db_connection = mysqli_connect("localhost","root","","tienda");
if (!$db_connection) {
    die('Sorry, you could not connect to the database!!');
}

$subs_email = utf8_decode($_POST['Correo']);
$subs_contraseña = utf8_decode($_POST['Contraseña']);

mysqli_select_db($db_connection, $db_name);

$result = mysqli_query($db_connection,"SELECT * FROM $db_table_name WHERE Correo='$subs_email' AND Contraseña='$subs_contraseña'");
$result2 = mysqli_query($db_connection,"SELECT * FROM $db_table_name2 WHERE Correo='$subs_email'");

if (mysqli_num_rows($result) == 1 && mysqli_num_rows($result2) == 1) {
    session_start();
    $_SESSION['Correo'] = $subs_email;
    $_SESSION['Nombre'] = mysqli_query($db_connection, "SELECT nombre FROM $db_table_name2 WHERE Correo='$subs_email'")->fetch_row()[0];
    header('Location: index.php');
} else {
    header('Location: wwww/Login/Login.html');
}
mysqli_close($db_connection);
?>