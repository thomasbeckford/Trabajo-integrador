<?php include("./shared/head/head.php");
      include("./shared/navbar/navbar.php"); ?>

<?php
function validar_formulario(){
  $array_de_errores = [];
  if (isset($_POST["username"])){
    if (!strlen($_POST["username"]) > 6){
      $array_de_errores[] = "El nombre debe ser mayor a 6 caracteres";
    }
  }
  if (isset($_POST["password"]) && isset($_POST["confirm_password"])){
    if($_POST["password"] !== $_POST["confirm_password"]){
      $array_de_errores[] = "Las contraseñas no son iguales";
    }else{
      if( strlen($_POST["confirm_password"]) < 6 ){
        $array_de_errores[] = "La contraseña deben tener 6 o mas digitos";
      }
    }
  }
  if(isset($_POST["email"])){
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
      $array_de_errores[] = "El email ingresado, no es un email valido";
    }
  }
  return $array_de_errores;
}
if ($_POST) {
  $array_de_problemas = validar_formulario();
}
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php if (isset($array_de_problemas)){
  echo "<ul>";
  foreach ($array_de_problemas as $value) {
    echo "<li>" . $value . "</li>";
  }
  echo "</ul>";
}?>
<div class="container py-3 animated fadeIn fast">
    <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
                <div class="card card-body">
                    <h3 class="text-center mb-4">Registrate</h3>

                    <form action="./database/register.php" method="post">
                      <script src="./assets/passValidator.js"></script>
                      <div class="form-group"><span class="font-weight-bold">Usuario / Telefono movil</span>
                          <input id="fname" <?php if($_POST){ echo " value="  . $_POST['username'];} ?> class="form-control input-lg" name="username" required type="text" >
                      </div>
                        <div class="form-group"><span class="font-weight-bold">Email</span>
                            <input class="form-control input-lg" <?php if($_POST){ echo " value="  . $_POST['email'];}  ?>  name="email" required type="email">
                        </div>
                        <div class="form-group"><span class="font-weight-bold">Contraseña ( 6 caracteres minimo )</span>
                            <input id="password" class="form-control input-lg" name="password" value="" required type="password" onkeyup='check();' pattern=".{6,}">
                        </div>
                        <div class="form-group"><span class="font-weight-bold">Confirma contraseña</span>
                            <input id="confirm_password" class="form-control input-lg" name="confirm_password" required value="" onkeyup='check();' type="password" pattern=".{6,}">
                        </div>
                          <div id='message'></div>
                        <div class="checkbox">
                            <label class="small">
                              <p><b> * Todos los campos son requeridos.</b></p>
                                <input name="terms" type="checkbox" required> Acepto los <a href="#">terminos y condiciones del servicio</a>.

                            </label>
                        <input id="createAccount" class="btn btn-lg btn-primary btn-block" name="register" value="Creá tu cuenta de Freemarket" type="submit">
                        <hr>
                      <span>¿Ya tenés una cuenta?
                        <a class="a-link-emphasis font-weight-bold" href="ingresa.php">Ingresá acá <i class="fa fa-angle-right"></i></a>
                      </span>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</div>


<?php include("./shared/footer/footer.php"); ?>
