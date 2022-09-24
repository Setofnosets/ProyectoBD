<?php
    require __DIR__ . '/ProductList.php';
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
        $uri = 'http://';
    }
	$uri .= $_SERVER['HTTP_HOST'];
    session_start();
    getList();
    if (isset($_SESSION['Correo']) && isset($_SESSION['Nombre'])) {
        header('Location: '.$uri.'/wwww/eCommerce/plantilla.php');
    }else{
        $_SESSION['Correo'] = "";
        $_SESSION['Nombre'] = "Invitado";
        header('Location: '.$uri.'/wwww/eCommerce/Login/Login.html');
    }
	exit;
?>
