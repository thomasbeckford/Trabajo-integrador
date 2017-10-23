<?php

  // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['user_id'])){
    // Le doy la bienvenida al usuario.
    ?>
      <button type="button" class="btn col-sm-12 btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php echo '<span>Bienvenido <strong>' . $_SESSION['email'] . '</strong></span>'; ?>
      </button>
      <div class="dropdown-menu dropdown-menu-right">
        <button class="dropdown-item" type="link" onclick="window.location.href='./database/close-session.php'">Cerrar session</button>
      </div>
    <?php

  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("Location ../index.php");

  }
?>
