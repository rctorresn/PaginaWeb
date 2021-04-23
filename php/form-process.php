<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nombre obligatorio ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Correo Obligatorio ";
} else {
    $email = $_POST["email"];
}

// Telefono
if (empty($_POST["number"])) {
    $errorMSG .= "Celular Obligatorio ";
} else {
    $number = $_POST["number"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "lologrecontuayuda@hotmail.com";
$Subject = "Nuevo Mensaje de Contacto";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Correo: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Numero: ";
$Body .= $number;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>