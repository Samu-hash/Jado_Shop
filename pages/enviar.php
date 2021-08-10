<?php
//Declarcion de variables 
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['Email'];
$telefono = $_POST['Telefono'];
$mensaje = $_POST['Mensaje'];
$direccion = $_POST['Direccion'];


//Datos de Email
$para = $email;
$titulo = 'S&S Solitud de Compras';
$header = 'From: gomez.aviles3021js@gmail.com';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
if ($_POST['Enviar']) {
    $msjCorreo = "Nombre: $nombre\n  Apellido: $apellido\n Telefono: $telefono\n Email: $email\n Direccion $direccion\n Mensaje: $mensaje\n";
    if (mail($para, $titulo, $msjCorreo, $header, $headers)) {
        echo "<script lenguaje='javascript'>
            alert ('Mensaje enviado, Muchas garcias por contactarse con nosotros. ') 
            </script>";
    } else {
        echo 'Fallo el envio';
    }
}
