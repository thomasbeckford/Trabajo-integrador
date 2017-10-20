<?php
  session_start();

  // Elimina la variable email en sesión.
  unset($_SESSION['user_id']);

  // Elimina la sesion.
  session_destroy();
  
  // Redirecciona a la página de login.
  header("Location: ../index.php");
?>
