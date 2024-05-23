<?php
// Sessión para cookies etc
session_start();


// Verificar si el formulario ha sido enviado mediante el método POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
         // variables superglobales
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        //
        $to = "socelsergi@gmail.com";
        $subject = "Nuevo mensaje del formulario de contacto";
        $body = "Nombre: $name\n Usuario: $username\n Mail: $email\n Mensaje: $message";

        $_SESSION['name'] = $name;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;

        // Mostrar los valores recogidos del formulario
        echo "<h2>Datos del formulario:</h2>";
        echo "Nombre: " . htmlspecialchars($name) . "<br>";
        echo "Username: " . htmlspecialchars($username) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Mensaje: " . nl2br(htmlspecialchars($message)) . "<br>";



    if(mail($to, $subject, $body)){
        echo "El mensaje se ha enviado";
    }
    else {
        echo "Ha habido un error en el envío. Inténtalo más tarde";
    }
}

else {
    echo "Error: No se han recibido los datos del formulario.";
}


?>