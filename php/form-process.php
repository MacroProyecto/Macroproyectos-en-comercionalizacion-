<?php

$errorMSG = "Ingrese sus datos";

// NAME
if (empty($_POST["Name"])) {
    $errorMSG .= "El nombre es requerido ";
} else {
    $name = $_POST["Name"];
}


// EMAIL
if (empty($_POST["Email"])) {
    $errorMSG .= "El email es requerido ";
} else {
    $email = $_POST["Email"];
}

// MSG Guest
if (empty($_POST["guest"])) {
    $errorMSG .= "Subject is required ";
} else {
    $guest = $_POST["guest"];
}


// MSG Event
if (empty($_POST["event"])) {
    $errorMSG .= "Subject is required ";
} else {
    $event = $_POST["event"];
}


// MESSAGE
if (empty($_POST["Message"])) {
    $errorMSG .= "El mensaje es requerido ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "Logistic.contacto@gmail.com";
$Subject = "Nuevo Mensaje Recibido";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "guest: ";
$Body .= $guest;
$Body .= "\n";
$Body .= "event: ";
$Body .= $event;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == "Habido un error"){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>
