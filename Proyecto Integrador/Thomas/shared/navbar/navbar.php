<?php session_start();?>

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="index.php">
    <img  src="./assets/commerce.svg" width="30" height="30" alt="">
      </a>
        <a class="navbar-brand" href="index.php">FreeMarket</a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse"> <!-- No muestra el buscador en tables y moviles -->


        <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
          <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-11" viewBox="0 0 40 40">
            <path d="M15.553 31.106c8.59 0 15.553-6.963 15.553-15.553S24.143 0 15.553 0 0 6.963 0 15.553s6.963 15.553 15.553 15.553zm0-3.888c6.443 0 11.665-5.222 11.665-11.665 0-6.442-5.222-11.665-11.665-11.665-6.442 0-11.665 5.223-11.665 11.665 0 6.443 5.223 11.665 11.665 11.665zM27.76 31.06c-.78-.78-.778-2.05.004-2.833l.463-.463c.783-.783 2.057-.78 2.834-.003l8.168 8.17c.782.78.78 2.05-.003 2.832l-.463.463c-.783.783-2.057.78-2.833.003l-8.17-8.167z"
            fill-rule="evenodd" />
          </symbol>
          <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-2" viewBox="0 0 20 20">
            <path d="M8.96 10L.52 1.562 0 1.042 1.04 0l.522.52L10 8.96 18.438.52l.52-.52L20 1.04l-.52.522L11.04 10l8.44 8.438.52.52L18.96 20l-.522-.52L10 11.04l-8.438 8.44-.52.52L0 18.96l.52-.522L8.96 10z" fill-rule="evenodd" />
          </symbol>
        </svg>

        <form novalidate="novalidate" onsubmit="return false;" class="searchbox sbx-amazon ">
          <div role="search" class="sbx-amazon__wrapper">
            <input placeholder="Funcion buscar no disponible.. " type="search" name="search" autocomplete="off" required="required" class="sbx-amazon__input">
            <button type="submit" title="Submit your search query." class="sbx-amazon__submit">
              <svg role="img" aria-label="Search">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-search-11"></use>
              </svg>
            </button>

            <!-- Clear the search query :) -->

            <button type="reset" title="Clear the search query." class="sbx-amazon__reset">
              <svg role="img" aria-label="Reset">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-clear-2"></use>
              </svg>
            </button>
          </div>
        </form>
        <script type="text/javascript">
          document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
        </script>


      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto"> <!-- class ml-auto set right items -->
    <!-- Que hago aca ?:
          Inicio seccion. Pregunto si existe la variable "user" dentro de la sesion. Si existe, le doy la bienvenida. Si no, le digo que ingrese. -->
        <?php

            if(isset($_SESSION['user_id'])){
              ?><li class="nav-item"><a class="nav-link" href="#"><?php include("./database/check_session.php"); ?> </a></li><?php
            } else {
              ?>
                <!-- <li class="nav-item item"><a class="nav-link" href="registrate.php">Registrate </a></li> -->
                <li class="nav-item item">
                  <div class="btn-group">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span>Accedé</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="menu-drop" href="registrate.php"><button class="dropdown-item" type="button">Registrate</button>
                      <a class="menu-drop" href="ingresa.php"><button class="dropdown-item" type="button">Ingresa</button></a>
                    </div>
                  </div>

                </li>
                <?php
            }
         ?>

        </ul>
    </div>

</nav>
