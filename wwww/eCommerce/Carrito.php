<!doctype html>
<?php
    session_start();
    $array = array_unique($_SESSION['carrito']);
?>
<html>
<head>
<meta charset="UTF-8">
<title>Carrito</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CarritoStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="FormWrapper"
     <form method="post">
         <fieldset class="Carro"
                   <h4>Carrito</h4>
                     <table>
                         <tr>
                             <th>Imagen</th>
                             <th>Producto</th>
                             <th>Precio</th>
                             <th>Descripcion</th>
                             <th>Categoria</th>
                             <th>Cantidad</th>
                         </tr>
                         <?php
                             $mysqli = mysqli_connect("localhost","root","","tienda");
                             for($i = 0; $i < count($array); $i++){
                                 $result = mysqli_query($mysqli, "SELECT * FROM productos WHERE id_producto = $array[$i]");
                                 $result2 = mysqli_query($mysqli, "SELECT * FROM productos_datos WHERE id_producto = $array[$i]");
                                 $row = mysqli_fetch_array($result);
                                 $row2 = mysqli_fetch_array($result2);
                                 echo "<tr>";
                                    echo "<td><img src='./Imagenes/".($i+1).".jpg' width='100' height='100'></td>";
                                 echo "<td>".$row['Nombre']."</td>";
                                 echo "<td>".$row['Precio']."</td>";
                                 echo "<td>".$row2['Descripcion']."</td>";
                                 echo "<td>".$row2['Categoria']."</td>";
                                    echo "<td><input type='number' name='cantidad[]' value='0' min='0' max='$row2[Disponibilidad]'</td>";
                                    if($row2['Disponibilidad'] == 0){
                                        echo "<td><input type='checkbox' name='disponibilidad[]' value='0' disabled></td>";
                                    }
                                 echo "</tr>";
                             }
                         ?>
                        </table>
         </fieldset>
         <fieldset>
             <form method="post">
                 <input type="submit" name="clear" value="Vaciar Carrito"/>
                 <input type="submit" name="comprar" value="Comprar" class="button"/>
                 <input type="submit" name="regresar" value="Regresar"/>
             </form>
             <?php
             if(isset($_POST['comprar'])){
                 $cantidad = $_POST['cantidad'];
                 header("Location: Pago.php");
             }
             if(isset($_POST['clear'])){
                 $array = array();
                 $_SESSION['carrito'] = $array;
                 header("Location: Carrito.php");
             }
             if(isset($_POST['regresar'])){
                 header("Location: plantilla.php");
             }
             ?>
            </fieldset>
     </form>


</body>
</html>

