<?php 
$destinatario = 'bglg.777@gmail.com'; 
$nombre = $_POST['nombre']; 
$email = $_POST['correo electrónico']; 
$asunto = $_POST['tema']; 
$mensaje = $_POST['mensaje']; 
$header = "De: $nombre <$email>\r\n"; 
$mensajeCompleto = $mensaje . "\n\nAtentamente\n" . $nombre; 
mail($destinatario, $asunto, $mensajeCompleto, $header); 
echo "<script> alert('correo enviado exitosamente'); </script>"; 
echo "<script> setTimeout(\"location.href='index.html'\", 1000); </script>"; 
?>