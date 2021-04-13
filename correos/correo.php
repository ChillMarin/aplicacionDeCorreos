<?php
$para      = 'marcelmarin256@gmail.com';
$titulo    = 'El título';
$mensaje   = 'Hola';
$cabeceras = 'From: meditavivir@gmail.com' . "\r\n" .
    'Reply-To: marcelmarin720@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>