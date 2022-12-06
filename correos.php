<?php
  $ destinatario = 'bglg.777@gmail.com';

  // este el correo  al que emviara el mensaje //

   $nombre = $_POST['nombre'];
   $email =  $_POST['email'];
   $tema =  $_POST['tema'];
   $mensaje =  $_POST['mensaje'];

   $header = "Embiado desde la pagina de WHIDY";
   $mensajeCompleto = $mensaje . "\nAtentamente " . $nombre;

   mail($destinatario,  $asunto , $mensajeCompleto, $header);
   echo "<script> alert('correo emviado exitosamente')</script>"; 
   echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>  