<?php
$admin_email = "gustavo11casta@gmail.com";
$name = $_POST["Nombre"];
$asunto = $_POST["Asunto"];
$message = $_POST["Mensaje"];
$email = $_POST["Email"];
$subject = "Contacto web para Taller De Cerrajeria Castañeda";
$content = "Nombre: " . $name . "\n" . "Correo: " . $email . "\n" . "Asunto: " . $asunto  . "\n" .  "Mensaje: " . $message;
mail($admin_email, $subject, $content, "From:" . $email);
?>