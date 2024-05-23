<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        $to = "socelsergi@gmail.com";
        $subject = "Nuevo mensaje del formulario de contacto";
        $body = "Nombre: $name\n Usuario: $username\n Mail: $email\n Mensaje: $message";
        

    if(mail($to, $subject, $body)){
        echo "El mensaje se ha enviado";
    }
    else {
        echo "Ha habido un error en el envío. Inténtalo más tarde";
    }
}
else{
    echo "Error: No se han recibido los datos del formulario.";
}


?>