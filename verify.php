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
$subs_name = utf8_decode($_POST['Nombre']);
$subs_apellido1 = utf8_decode($_POST['Apellido1']);
$subs_apellido2 = utf8_decode($_POST['Apellido2']);
$subs_email = utf8_decode($_POST['Correo']);
$subs_contraseña = utf8_decode($_POST['Contraseña']);

$resultado=mysqli_query($db_connection, "SELECT * FROM ". $db_table_name);
$resultado2=mysqli_query($db_connection, "SELECT * FROM ". $db_table_name2);
$rowcount=mysqli_num_rows($resultado);
$rowcount2=mysqli_num_rows($resultado2);

    $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`Correo` , `Contraseña`) VALUES ("' . $subs_email . '", "' . $subs_contraseña . '")';
    $insert_value2 = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name2.'` (`Correo`, `Nombre`, `Apellido1`, `Apellido2`) VALUES ("' . $subs_email . '", "' . $subs_name . '", "' . $subs_apellido1 . '", "' . $subs_apellido2 . '")';
    mysqli_select_db($db_connection, $db_name);
    $retry_value = mysqli_query($db_connection,$insert_value);
    $retry_value2 = mysqli_query($db_connection,$insert_value2);

    if (!$retry_value || !$retry_value2) {
        die('Error: ' . mysqli_error());
    }
    header('Location: index.php');

mysqli_free_result($resultado);
mysqli_free_result($resultado2);
mysqli_close($db_connection);
?>
