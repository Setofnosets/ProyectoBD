<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmar Contraseña</title>
    <link rel = "stylesheet" type="text/css" href="ConfirmarContraseñaStyle.css">
</head>
<body>
<form method="post">
    <h1>Confirmar Contraseña</h1>
    <fieldset>
        <label for="Contraseña">Contraseña: </label>
        <input name="Contraseña"/>
    </fieldset>
    <fieldset>
        <input class="btn" name="submit" type="submit" value="Confirmar"/>
        <input class="btn" name="reset" type="reset" value="Clear Form"/>
    </fieldset>
</form>
<?php
    $mysqli = mysqli_connect("localhost","root","","tienda");
    $result = mysqli_query($mysqli, "SELECT Contraseña FROM usuario WHERE Correo='$_SESSION[Correo]'");
    $row = mysqli_fetch_array($result);
    if (isset($_POST['submit'])){
        if ($_POST['Contraseña'] == $row['Contraseña']){
            //Store tarjeta
            $mysqli = mysqli_connect("localhost","root","","tienda");
            $result = mysqli_query($mysqli, "SELECT * FROM tarjeta");
            if($result->num_rows > 0){
                mysqli_query($mysqli, "UPDATE tarjeta SET Tarjeta='$_SESSION[Tarjeta]' WHERE Correo='$_SESSION[Correo]' AND Contraseña='$_SESSION[Contraseña]'");
            }else{
                mysqli_query($mysqli, "INSERT INTO tarjeta (Correo, Contraseña, Tarjeta, FechaExpiracion, CVC) VALUES ('$_SESSION[Correo]', '$row[Contraseña]', '$_SESSION[Tarjeta]', '$_SESSION[FechaExpiracion]', '$_SESSION[CVC]')");
            }

            header("Location: Envio.php");
        } else {
            echo "Contraseña incorrecta";
        }
    }
?>
</body>
</html>