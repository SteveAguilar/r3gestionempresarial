<?php
    $destino= "steveaguilarinsapillo@gmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $message = $_POST["message"];

    $contenido = "Nombre: " . $name ."\nCorreo: " . $email ."\nTeléfono: " . $telephone . "\nMensaje: " . $mensaje;
    mail($destino,"Contacto",$contenido);
    header("Location:index.html")

?>
