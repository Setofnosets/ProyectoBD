<!doctype html>
<?php
session_start();
$array = array_unique($_SESSION['carrito']);
$cantidad = $_SESSION['cantidad'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Comprar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="Comprar.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="FormWrapper">
<form method="post">
    <fieldset class="Tarjeta">
        <h4>Compra: </h4>
        <table>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
                <?php
                $total = 0;
                $mysqli = mysqli_connect("localhost","root","","tienda");
                for ($i = 0; $i < count($array); $i++){
                $result = mysqli_query($mysqli, "SELECT Nombre, Precio FROM productos WHERE id_producto = $array[$i]");
                $row = mysqli_fetch_array($result);
                $total += ($row['Precio'] * $cantidad[$i]);
                echo "<tr>";
                echo "<td>".$row['Nombre']."</td>";
                echo "<td>".$row['Precio']."</td>";
                echo "<td>".$cantidad[$i]."</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <table
            <th>Total: </th>
            <tr>
                <t><?php echo $total; ?></t>
            </tr>
        </table>
    </fieldset>
    <form method="post">
        <fieldset>
        <h4>Ingresar datos bancarios</h4>
        <label class="labelOne" for="Tarjeta">Tarjeta:	</label>
        <input name="Tarjeta"/>
        <label for="FechaExpiracion">FechaExpiracion: </label>
        <input name="FechaExpiracion"/>
        <label for="CVC">CVC: </label>
        <input name="CVC"/>
        </fieldset>
        <fieldset>
            <input class="btn" name="submit" type="submit" value="Pagar"/>
            <input type="submit" name="regresar" value="Regresar"/>
        </fieldset>
    </form>
<?php

if(isset($_POST['submit'])){
    $_SESSION['Tarjeta'] = $_POST['Tarjeta'];
    $_SESSION['FechaExpiracion'] = $_POST['FechaExpiracion'];
    $_SESSION['CVC'] = $_POST['CVC'];
    header("Location: ConfirmarContraseña.php");
}

if(isset($_POST['regresar'])){
    header("Location: Carrito.php");
}
?>
    </fieldset>
</form>

</div>
</body>
</html>