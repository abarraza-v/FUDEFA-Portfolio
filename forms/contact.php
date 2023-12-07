<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address

  $direccion_email_receptora = 'abarraza.pk@gmail.com';

  if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) and !empty($_POST['email']) and !empty($_POST['asunto']) and !empty($_POST['mensaje'])) { 
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $asunto = $_POST['asunto'];
      $mensaje = $_POST['mensaje'];
      
      $encabezado = "From: " . $email .  "\r\n";
      $encabezado .= "Reply-To: " . $direccion_email_receptora . "\r\n";
      $encabezado .= "X-Mailer: PHP/" . phpversion() . "\r\n";

      
      $mail = @mail($direccion_email_receptora, $asunto, $mensaje, $encabezado);
      if ($mail) {
        echo('<div class="sent-message d-block">Mensaje Enviado</div>');
      }
    }
  }


?>
