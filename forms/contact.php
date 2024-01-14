<?php

  # Dirección de email que recibirá los correos enviados
  $direccion_email_receptora = 'contacto@fudefu.cl';
  
  # Verificamos si se apretó el botón enviar, luego verificamos si están vacíos los campos enviados.
  if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) and !empty($_POST['email']) and !empty($_POST['asunto']) and !empty($_POST['mensaje'])) {
      
      # Asignamos los valores de los campos a variables.
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $asunto = $_POST['asunto'];
      $mensaje = $_POST['mensaje'];
      
      # Enviamos todo a la función mail, la cuál enviará el mail.
      $mail = mail($direccion_email_receptora, $asunto, $mensaje);

      # Si mail retornó true, mostramos un mensaje de éxito.
      if ($mail) {
        echo('<div class="sent-message d-block">Mensaje Enviado</div>');
      } else {
        echo('<div class="error-message d-block">Error: Algo salió mal</div>');
      }
    }
  }


?>
