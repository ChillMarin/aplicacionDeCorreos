<?php

include'conexion.php';
$nameExcel = $_FILES['excelFile']['name'];
$locationExcel = $_FILES['excelFile']['tmp_name'];

$excelInformation = $_FILES['excelFile'];
$excelInformation = file_get_contents($excelInformation['tmp_name']); 

echo"<br>";
echo"<br>";

$excelInformation = explode("\n", $excelInformation);
$excelInformation = array_filter($excelInformation); 


// preparar contactos (convertirlos en array)
foreach ($excelInformation as $contact) {
	$infoExcel[] = explode(";", $contact);
}

$infoExcel = array_filter($infoExcel);



// insertar contactos

foreach ($infoExcel as $contactData) 
{

  $filename = 'E-Book.pdf';
  $path = '../assets/adjuntos/';
  $file = $path . "/" . $filename;

  $mailto = $contactData[2];
  $subject = $_POST['asunto'];
  $message = $_POST['mensaje'];

  $content = file_get_contents($file);
  $content = chunk_split(base64_encode($content));

  // a random hash will be necessary to send mixed content
  $separator = md5(time());

  // carriage return type (RFC)
  $eol = "\r\n";

  // main header (multipart mandatory)
  $headers = "From: name <meditavivir@gmail.com>" . $eol;
  $headers .= "MIME-Version: 1.0" . $eol;
  $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
  $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
  $headers .= "This is a MIME encoded message." . $eol;

  // message
  $body = "--" . $separator . $eol;
  $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
  $body .= "Content-Transfer-Encoding: 8bit" . $eol;
  $body .= $message . $eol;

  // attachment
  $body .= "--" . $separator . $eol;
  $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
  $body .= "Content-Transfer-Encoding: base64" . $eol;
  $body .= "Content-Disposition: attachment" . $eol;
  $body .= $content . $eol;
  $body .= "--" . $separator . "--";

  //SEND Mail
  if (mail($mailto, $subject, $body, $headers)) {
      echo "mail send ... OK"; // or use booleans here
  } else {
      echo "mail send ... ERROR!";
      print_r( error_get_last() );
  }

  /*
    //Variables
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];
  // Varios destinatarios
  $para  = $contactData[2];// . ', '; // atención a la coma
  //$para .= 'wez@example.com';

  // título
  $título = $asunto;

  // mensaje
  $mensaje='qlq';
  /*
  $mensaje = '
  <html>
  <head>
    <title>'.$asunto.'</title>
  </head>
  <body>
    '.$mensaje.'
    este mensaje fue enviado para '.$contactData[0].' '.$contactData[1].'
  </body>
  </html>
  ';

*//*
  //preparing attachment
    $separator = md5(time());
    $file="../assets/adjuntos/deudas.xlsx";
    $contentFile = file_get_contents($file);
    $contentFile = chunk_split(base64_encode($contentFile));
    $eol = "\r\n";
    // attachment
    $mensaje .= "--" . $separator . $eol;
    $mensaje .= "Content-Type: application/octet-stream; name=\"" . $file. "\"" . $eol;
    $mensaje .= "Content-Transfer-Encoding: base64" . $eol;
    $mensaje .= "Content-Disposition: attachment" . $eol;
    $mensaje .= $contentFile . $eol;
    $mensaje .= "--" . $separator . "--";


  // Para enviar un correo HTML, debe establecerse la cabecera Content-type
  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


/*
// Cabeceras adicionales
$cabeceras .= 'To: Marcel <marcelmarin256@gmail.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <meditavivir@gmail.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/

/*
$cabeceras .= 'From: MeditaVivir <meditavivir@gmail.com>' . "\r\n";
// Enviarlo
mail($para, $asunto, $mensaje, $cabeceras);

*/

  /* CONEXION CON LA BASE DE DATOS
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

       */      
}



/*



echo "<script> setTimeout(\"location.href='../vistas/index.php'\",1000)</script>";

*/
?>
