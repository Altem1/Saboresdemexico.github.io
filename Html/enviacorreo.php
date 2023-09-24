<?php

if(isset($_POST["Enviar"])){
    if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['descripcion'])){
        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $tel = $_POST['telefono'];
        $des = $_POST['descripcion'];

        $header = "From: sabores.de.mexico.04@gmail.com" . "\r\n";
        $header.= "Reply-To: sabores.de.mexico.04@gmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $email = "sabores.de.mexico.04@gmail.com";
        $pemail = "Mi correo es: ".$_POST['email'] . "\r\n";
        $name = "De: ".$_POST['nombre'] . "\r\n";
        $des = "Descripcion de lo acontecido: ".$_POST['descripcion'] . "\r\n";
        $mail = @mail($email,$name,$des,$pemail);

        if ($mail){
            echo "<h4>Se envio via email</h4>";
        }
    }
}

?>