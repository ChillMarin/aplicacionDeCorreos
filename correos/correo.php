<?php
include'conexion.php';
$nameExcel = $_FILES['excelFile']['name'];
$locationExcel = $_FILES['excelFile']['tmp_name'];

$excelInformation = $_FILES['excelFile'];
$excelInformation = file_get_contents($excelInformation['tmp_name']); 
print_r($excelInformation);
echo"<br>";
echo"<br>";

$excelInformation = explode("\n", $excelInformation);
$excelInformation = array_filter($excelInformation); 

print_r($excelInformation);
// preparar contactos (convertirlos en array)
foreach ($excelInformation as $contact) {
	$infoExcel[] = explode(";", $contact);
}

$infoExcel = array_filter($infoExcel);
echo"<br>";
echo"<br>";
print_r($infoExcel);

// insertar contactos

 
foreach ($infoExcel as $contactData) 
{
	$conexion->query("INSERT INTO usuarios 
						(nombre,
						 apellido,
						 correo,
						 telefono,
						 fecha)
						 VALUES

                         (
                            '{$contactData[0]}',
                            '{$contactData[1]}',
                            '{$contactData[2]}',
                            '{$contactData[3]}',
                            '{$contactData[4]}'
                         )

						 "); 
}





//correo!!!!!
/*
//Variables
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
// Varios destinatarios
$para  = 'marcelmarin256@gmail.com';// . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
$título = 'Recordatorio de cumpleaños para Agosto';

// mensaje
$mensaje = '
<html>
<head>
  <title>'.$asunto.'</title>
</head>
<body>
  '.$mensaje.'
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
/* $cabeceras .= 'To: Marcel <marcelmarin256@gmail.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <meditavivir@gmail.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
/*
$cabeceras .= 'From: MeditaVivir <meditavivir@gmail.com>' . "\r\n";
// Enviarlo
mail($para, $asunto, $mensaje, $cabeceras);

echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='../vistas/index.php'\",1000)</script>";

*/
?>