<?php
//procesi que envia el email
$emailuser = "axte_vic@hotmail.com";

$cabecera  = "MIME-Version: 1.0"."\r\n";
$cabecera .= "Content-type: text/html; charset=UTF-8"."\r\n";

$nombre = htmlentities($_POST["name"]);
$email  = htmlentities($_POST["email"]);
$messageuser = htmlentities($_POST["asunto"]);
$desc = str_replace("\n", "<br>", $_POST["message"]);
$respuesta = $_POST["operation"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$respuesta1 = $n1+$n2;

if ($email == null || $nombre == null || $messageuser == null || $desc == null || $respuesta == null) {
    die("Error, todos los campos deben estar rellenos");
}

if ($respuesta != $respuesta1) {
    die("Error, la respuesta de la operacion es incorrecto.");
}
if (mail($emailuser, $messageuser, "<b>Nombre</b>: ".$nombre."<br><b>Correo</b>: ".$email."<br><b>Problema</b>: ".$desc, $cabecera)) {
    die($nombre.", El email se ha enviado correctamente.");
}
echo "Error, no se ha podido enviar el correo, inténtelo más tarde.";
//comentario problema
