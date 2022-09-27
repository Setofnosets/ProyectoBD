<!doctype html>
<?php
    session_start();
    $usuario = $_SESSION['Nombre'];
    if(isset($_SESSION['carrito'])){
        $array = $_SESSION['carrito'];
    }else{
        $array = array();
        $_SESSION['carrito'] = $array;
    }
    $mysqli = mysqli_connect("localhost","root","","tienda");

    function addIDtoArray($id, $array){
        $array[] = $id;
        $_SESSION['carrito'] = $array;
    }

?>
<html>
<head>
<meta charset="UTF-8">
<title>eCommerce template By Adobe Dreamweaver</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="eCommerceStyle.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
<div id="mainWrapper">
  <header> 
    <!-- This is the header content. It contains Logo and links -->
    <div id="logo"> <!-- <img src="logoImage.png" alt="sample logo"> --> 
      <!-- Company Logo text --> 
      LOGO </div>
    <div id="headerLinks"><a href="../Login/Login.html" title="Login/Register">Login/Register</a><a href="Carrito.php" title="Cart">Cart</a></div>
  </header>
  <section id="offer"> 
    <!-- The offer section displays a banner text for promotions -->
      <h1>Tienda de comida: </h1>
      <h1><?php echo "Hola, ".$usuario; ?></h1>
      <?php
          //No se porque pero literal si no esta esto se muere
          $array = $_SESSION['carrito'];
          for($i = 0; $i < count($array); $i++){
              //echo $array[$i];
          }
          ?>

  </section>
  <div id="content">
    </section>
    <section class="mainContent">
      <div class="productRow"><!-- Each product row contains info of 3 elements -->
        <article class="productInfo"><!-- Each individual product description -->
            <?php $row = $_SESSION['products']; ?>
          <div><img alt="sample" src="./Imagenes/<?php echo $row[1]['ID_Producto']?>.jpg" height="100" width="150"></div>
            <p class="productContent"><?php echo $row[1]['Nombre']; ?> </p>
          <p class="price"><?php echo "$".$row[1]['Precio']; ?></p>
            <?php if(array_key_exists('add1', $_POST)){ addIDtoArray($row[1]['ID_Producto'], $array); } ?>
            <form method="post">
                <input type="submit" name="add1" value="Add to cart" class="button">
            </form>
        </article>
        <article class="productInfo"><!-- Each individual product description -->
            <div><img alt="sample" src="./Imagenes/<?php echo $row[2]['ID_Producto']?>.jpg" height="100" width="150"></div>
            <p class="productContent"><?php echo $row[2]['Nombre']; ?> </p>
            <p class="price"><?php echo "$".$row[2]['Precio']; ?></p>
            <?php if(array_key_exists('add2', $_POST)){ addIDtoArray($row[2]['ID_Producto'], $array); } ?>
            <form method="post">
                <input type="submit" name="add2" value="Add to cart" class="button">
            </form>
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
            <div><img alt="sample" src="./Imagenes/<?php echo $row[3]['ID_Producto']?>.jpg" height="100" width="150"></div>
            <p class="productContent"><?php echo $row[3]['Nombre']; ?> </p>
            <p class="price"><?php echo "$".$row[3]['Precio']; ?></p>
            <?php if(array_key_exists('add3', $_POST)){ addIDtoArray($row[3]['ID_Producto'], $array); } ?>
            <form method="post">
                <input type="submit" name="add3" value="Add to cart" class="button">
            </form>
        </article>
      </div>
      <div class="productRow"> 
        <!-- Each product row contains info of 3 elements -->
        <article class="productInfo"> <!-- Each individual product description -->
            <div><img alt="sample" src="./Imagenes/<?php echo $row[4]['ID_Producto']?>.jpg" height="100" width="150"></div>
            <p class="productContent"><?php echo $row[4]['Nombre']; ?> </p>
            <p class="price"><?php echo "$".$row[4]['Precio']; ?></p>
            <?php if(array_key_exists('add4', $_POST)){ addIDtoArray($row[4]['ID_Producto'], $array); } ?>
            <form method="post">
                <input type="submit" name="add4" value="Add to cart" class="button">
            </form>
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
            <div><img alt="sample" src="./Imagenes/<?php echo $row[5]['ID_Producto']?>.jpg" height="100" width="150"></div>
            <p class="productContent"><?php echo $row[5]['Nombre']; ?> </p>
            <p class="price"><?php echo "$".$row[5]['Precio']; ?></p>
            <?php if(array_key_exists('add5', $_POST)){ addIDtoArray($row[5]['ID_Producto'], $array); } ?>
            <form method="post">
                <input type="submit" name="add5" value="Add to cart" class="button">
            </form>
        </article>
        <article class="productInfo"><!-- Each individual product description -->
            <div><img alt="sample" src="./Imagenes/<?php echo $row[6]['ID_Producto']?>.jpg" height="100" width="150"></div>
            <p class="productContent"><?php echo $row[6]['Nombre']; ?> </p>
            <p class="price"><?php echo "$".$row[6]['Precio']; ?></p>
            <?php if(array_key_exists('add6', $_POST)){ addIDtoArray($row[6]['ID_Producto'], $array); } ?>
            <form method="post">
                <input type="submit" name="add6" value="Add to cart" class="button">
            </form>
        </article>
      </div>
      <div class="productRow">
        <article class="productInfo"> <!-- Each individual product description -->
            <div><img alt="sample" src="./Imagenes/<?php echo $row[7]['ID_Producto']?>.jpg" height="100" width="150"></div>
            <p class="productContent"><?php echo $row[7]['Nombre']; ?> </p>
            <p class="price"><?php echo "$".$row[7]['Precio']; ?></p>
            <?php if(array_key_exists('add7', $_POST)){ addIDtoArray($row[7]['ID_Producto'], $array); } ?>
            <form method="post">
                <input type="submit" name="add7" value="Add to cart" class="button">
            </form>
        </article>
        <article class="productInfo"><!-- Each individual product description -->
            <div><img alt="sample" src="./Imagenes/<?php echo $row[8]['ID_Producto']?>.jpg" height="100" width="150"></div>
            <p class="productContent"><?php echo $row[8]['Nombre']; ?> </p>
            <p class="price"><?php echo "$".$row[8]['Precio']; ?></p>
            <?php if(array_key_exists('add8', $_POST)){ addIDtoArray($row[8]['ID_Producto'], $array); } ?>
            <form method="post">
                <input type="submit" name="add8" value="Add to cart" class="button">
            </form>
        </article>
        <article class="productInfo"><!-- Each individual product description -->
            <div><img alt="sample" src="./Imagenes/<?php echo $row[9]['ID_Producto']?>.jpg" height="100" width="150"></div>
            <p class="productContent"><?php echo $row[9]['Nombre']; ?> </p>
            <p class="price"><?php echo "$".$row[9]['Precio']; ?></p>
            <?php if(array_key_exists('add9', $_POST)){ addIDtoArray($row[9]['ID_Producto'], $array); } ?>
            <form method="post">
                <input type="submit" name="add9" value="Add to cart" class="button">
            </form>
        </article>
      </div>
    </section>
  </div>
  <footer> 
    <!-- This is the footer with default 3 divs -->
    <div>
      <p>Buscamos darte el mejor servicio.</p>
    </div>
    <div>
      <p>Cualquier duda preguntele a montserrat.</p>
    </div>
  </footer>
</div>
</body>
</html>
