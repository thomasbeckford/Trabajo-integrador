<?php include("./shared/head.php");
      include("./shared/navbar.php"); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class="container py-3 animated fadeIn fast">
    <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
                <div class="card card-body">
                    <h3 class="text-center mb-4">Registrate</h3>

                    <form action="./json-database/save-json.php" method="post"> <!-- En vez que apunte a la base mysql ( ./database/register.php ), apunta al json ( ./json-database/save-json.php ) -->
                      <script src="./assets/passValidator.js"></script>
                      <div class="form-group"><span class="font-weight-bold">Usuario / Telefono movil</span>
                          <input id="fname"  class="form-control input-lg" name="username" required type="text" >
                      </div>
                        <div class="form-group"><span class="font-weight-bold">Email</span>
                            <input class="form-control input-lg"  name="email" required type="email">
                        </div>
                        <div class="form-group"><span class="font-weight-bold">Contraseña ( 6 caracteres minimo )</span>
                            <input id="password" class="form-control input-lg" name="password" value="" required type="password" onkeyup='check();' pattern=".{6,}">
                        </div>
                        <div class="form-group"><span class="font-weight-bold">Confirma contraseña</span>
                            <input id="confirm_password" class="form-control input-lg" name="confirm_password" required value="" onkeyup='check();' type="password" pattern=".{6,}">
                        </div>

                        <div class="form-group"><span class="font-weight-bold">Seleciona tu imagen</span>
                          <input type="file" name="imagen" accept="image/*" required /></div>

                          <div id='message'></div>
                        <div class="checkbox">
                            <label class="small">
                              <p><b> * Todos los campos son requeridos.</b></p>
                                <input name="terms" type="checkbox" required> Acepto los <a href="#">terminos y condiciones del servicio</a>.

                            </label>
                        <input id="createAccount" class="btn btn-lg btn-primary btn-block" name="register" value="Creá tu cuenta de Freemarket" type="submit">
                        <hr>
                      <span>¿Ya tenés una cuenta?
                        <a class="a-link-emphasis font-weight-bold" href="login.php">Ingresá acá <i class="fa fa-angle-right"></i></a>
                      </span>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</div>


<?php include("./shared/footer.php"); ?>
