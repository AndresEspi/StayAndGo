<!-- filepath: /C:/Users/Mauricio/StayAndGo/contactme.php -->
<?php   
    require("./mailing/mailfunction.php");

    $name = $_POST["name"];
    $phone = $_POST['phone'];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $body = "<ul><li>Nombre: ".$name."</li><li>Teléfono: ".$phone."</li><li>Correo: ".$email."</li><li>Mensaje: ".$message."</li></ul>";

    $status = mailfunction("andresm.espinosas15@gmail.com", "Company", $body); // Reemplaza con tu dirección de correo
    if($status)
        echo '<center><h1>¡Gracias! Nos pondremos en contacto contigo pronto.</h1></center>';
    else
        echo '<center><h1>¡Error al enviar el mensaje! Por favor, inténtalo de nuevo.</h1></center>';    
?>