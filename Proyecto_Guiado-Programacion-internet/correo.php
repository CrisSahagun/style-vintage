<?php
    $destinatario ="cristian.sahagun8863@alumnos.udg.mx";

    $nombre = $_POST['nomb'];
    $email = $_POST['correo'];
    $telefono = $_POST['telef'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la pagina Style Vintage";
    $mensajeCompleto = $mensaje . "\nAtentamente: . $nombre"; 

    mail($destinatario,$mensajeCompleto,$header);
    echo "<script>alert('correo enviado exitosamente ..')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>