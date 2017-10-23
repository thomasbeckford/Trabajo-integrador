
<?php session_start();?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark"><a class="navbar-brand" href="index.php">Freemarket</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

  <!--  <a class="navbar-brand" href="index.php"></a> -->
    <div class="col-lg-6 ml-auto mt-2 mt-lg-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Aun no realizo busquedas!...">
        <span class="input-group-btn">
          <button class="btn btn-secondary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
        </span>
      </div>
    </div>

    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <?php
        if(isset($_SESSION['user_id'])){
      ?>

      <li class="nav-item"><button type="button" class="btn col-sm-12 bg-secondary text-white disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right:10px"><h6 style="display: inline">Vende</h6></button></li>
      <li class="nav-item"><a class="nav-link" href="#"><?php include("./database/check_session.php"); ?> </a></li>

      <?php

  } else {
      ?>
      <li class="nav-item">
          <button type="button" class="btn text-center bg-secondary text-white disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right:10px"><h6 style="display: inline">Vende</h6></button>
          <button type="button" class="btn  bg-danger dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h6 style="display: inline">Menu</h6></button>
        <div class="dropdown-menu dropdown-menu-right animated fadeIn fast">
          <a class="menu-drop" href="registrate.php"><button class="dropdown-item" type="button">Registrate</button>
          <a class="menu-drop" href="login.php"><button class="dropdown-item" type="button">Ingresa</button></a>
          <a class="menu-drop" href="preguntas.php"><button class="dropdown-item">Preguntas frecuentes</button></button></a>
        </div>
      </li>
     <?php
  }
     ?>
   </ul>

  </div>
</nav>
