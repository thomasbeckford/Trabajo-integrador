<?php
 include("../shared/head/head.php");

    function validar_formulario(){
        $array_de_errores = [];
          if (isset($_POST["password"]) && isset($_POST["confirm_password"])) {
            if($_POST["password"] !== $_POST["confirm_password"]){
              $array_de_errores[] = "Las contraseñas no coinciden";
            } else {
              if( strlen($_POST["confirm_password"]) < 6 ) {
                $array_de_errores[] = "La contraseña debe tener 6 o mas digitos";
              }
            }
          }
              if(isset($_POST["email"])) {
                if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                  $array_de_errores[] = "El email ingresado no es valido";
                }
              }
      return $array_de_errores;
    }

    if ($_POST) {
      $array_de_problemas = validar_formulario();
    }

    if (!empty($array_de_problemas)){
        echo "<div style='margin-top: 40px' class='container col-md-6'><ul>";
          foreach ($array_de_problemas as $value) {
            echo "<li>" . $value . "</li>";
          }
          echo "<a style='margin-top: 40px' href='../registrate.php' role='button' class='btn btn-outline-primary btn-block'>Volver</a>";
      echo "</ul></div>";
      exit;
    }
 ?>
