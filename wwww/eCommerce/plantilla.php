<!doctype html>
<?php
    session_start();
    $usuario = $_SESSION['Nombre'];
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
    <div id="headerLinks"><a href="../Login/Login.html" title="Login/Register">Login/Register</a><a href="#" title="Cart">Cart</a></div>
  </header>
  <section id="offer"> 
    <!-- The offer section displays a banner text for promotions -->
      <h1><?php echo "Hola, ".$usuario; ?></h1>
    <h3>OFFER 50%</h3>
    <p>REALLY AWESOME DISCOUNTS THIS JULY</p>
  </section>
  <div id="content">
    <section class="sidebar"> 
      <!-- This adds a sidebar with 1 searchbox,2 menusets, each with 4 links -->
      <input type="text"  id="search" value="search">
      <div id="menubar">
        <nav class="menu">
          <h2><!-- Title for menuset 1 -->MENU ITEM 1 </h2>
          <hr>
          <ul>
            <!-- List of links under menuset 1 -->
            <li><a href="#" title="Link">Link 1</a></li>
            <li><a href="#" title="Link">Link 2</a></li>
            <li><a href="#" title="Link">Link 3</a></li>
            <li class="notimp"><!-- notimp class is applied to remove this link from the tablet and phone views --><a href="#"  title="Link">Link 4</a></li>
          </ul>
        </nav>
        <nav class="menu">
          <h2>MENU ITEM 2 </h2>
          <!-- Title for menuset 2 -->
          <hr>
          <ul>
            <!--List of links under menuset 2 -->
            <li><a href="#" title="Link">Link 1</a></li>
            <li><a href="#" title="Link">Link 2</a></li>
            <li><a href="#" title="Link">Link 3</a></li>
            <li class="notimp"><!-- notimp class is applied to remove this link from the tablet and phone views --><a href="#" title="Link">Link 4</a></li>
          </ul>
        </nav>
      </div>
    </section>
    <section class="mainContent">
      <div class="productRow"><!-- Each product row contains info of 3 elements -->
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../../../../../../Applications/XAMPP/xamppfiles/htdocs/emailPHP/eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder </p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../../../../../../Applications/XAMPP/xamppfiles/htdocs/emailPHP/eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../../../../../../Applications/XAMPP/xamppfiles/htdocs/emailPHP/eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
      </div>
      <div class="productRow"> 
        <!-- Each product row contains info of 3 elements -->
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../../../../../../Applications/XAMPP/xamppfiles/htdocs/emailPHP/eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../../../../../../Applications/XAMPP/xamppfiles/htdocs/emailPHP/eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../../../../../../Applications/XAMPP/xamppfiles/htdocs/emailPHP/eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
      </div>
      <div class="productRow">
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../../../../../../Applications/XAMPP/xamppfiles/htdocs/emailPHP/eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../../../../../../Applications/XAMPP/xamppfiles/htdocs/emailPHP/eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../../../../../../Applications/XAMPP/xamppfiles/htdocs/emailPHP/eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
      </div>
    </section>
  </div>
  <footer> 
    <!-- This is the footer with default 3 divs -->
    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius sem neque. Integer ornare.</p>
    </div>
    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius sem neque. Integer ornare.</p>
    </div>
    <div class="footerlinks">
      <p><a href="#" title="Link">Link 1 </a></p>
      <p><a href="#" title="Link">Link 2</a></p>
      <p><a href="#" title="Link">Link 3</a></p>
    </div>
  </footer>
</div>
</body>
</html>
