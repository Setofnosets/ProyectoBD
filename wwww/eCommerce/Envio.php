<!doctype HTML>
<?php
session_start();
$array = array_unique($_SESSION['carrito']);
$cantidad = $_SESSION['cantidad'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Envio</title>
    <link href="Envio.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="FormWrapper">
    <form method="post">
        <fieldset>
            <h4>Ubicacion:</h4>
            <label for="Pais">Pais: </label>
            <input name="Pais"/>
            <label for="Ciudad">Ciudad: </label>
            <input name="Ciudad"/>
            <label for="Municipio">Municipio: </label>
            <input name="Municipio"/>
            <label for="Colonia">Colonia: </label>
            <input name="Colonia"/>
        </fieldset>
        <fieldset>
            <h4>Envio:</h4>
            <label for="Calle">Calle: </label>
            <input name="Calle"/>
            <label for="CP">CP: </label>
            <input name="CP"/>
            <label for="No">No: </label>
            <input name="No"/>
            <label for="Telefono">Telefono: </label>
            <input name="Telefono"/>
        </fieldset>
        <fieldset>
            <input class="btn" name="submit" type="submit" value="Enviar"/>
            <input type="submit" name="regresar" value="Regresar"/>
            <?php
            if (isset($_POST['regresar'])){
                header("Location: Pago.php");
            }
            ?>
        </fieldset>
    </form>
    <?php
     if(isset($_POST['submit'])){
            $mysqli = mysqli_connect("localhost","root","","tienda");
            $Pais = $_POST['Pais'];
            $Ciudad = $_POST['Ciudad'];
            $Municipio = $_POST['Municipio'];
            $Colonia = $_POST['Colonia'];
            $Calle = $_POST['Calle'];
            $CP = $_POST['CP'];
            $No = $_POST['No'];
            $Telefono = $_POST['Telefono'];
            $Correo = $_SESSION['Correo'];
            $query = mysqli_query($mysqli, "SELECT * FROM envio");
            if($query->num_rows > 0){
                $result=mysqli_query($mysqli, "UPDATE ubicacion SET Pais='$Pais', Ciudad='$Ciudad', Municipio='$Municipio', Colonia='$Colonia' WHERE CP='$CP'");
                $result2=mysqli_query($mysqli, "UPDATE envio SET Calle='$Calle', No='$No', Telefono='$Telefono' WHERE Correo='$Correo'");
            } else {
                $result = mysqli_query($mysqli, "INSERT INTO ubicacion (CP, Colonia, Municipio, Ciudad, Pais) VALUES ('$CP', '$Colonia', '$Municipio', '$Ciudad', '$Pais')");
                $result2 = mysqli_query($mysqli, "INSERT INTO envio (Correo, CP, No, Calle, Telefono) VALUES ('$Correo', '$CP', '$No', '$Calle', '$Telefono')");
            }
            if($result && $result2){
                echo "Datos guardados";
                for ($i = 0; $i < count($array); $i++){
                    mysqli_query($mysqli,"UPDATE productos_datos SET Disponibilidad = Disponibilidad - $cantidad[$i] WHERE ID_producto = $array[$i]");
                }
                header("Location: Confirmacion.html");
            }else{
                echo "Error";
            }
     }
    ?>
</div>
</html>
