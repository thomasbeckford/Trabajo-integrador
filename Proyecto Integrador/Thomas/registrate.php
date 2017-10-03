<?php include("./shared/head/head.php");
      include("./shared/navbar/navbar.php"); ?>

<div class="container py-3 animated fadeIn fast">
    <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
                <div class="card card-body">
                    <h3 class="text-center mb-4">Registrate</h3>
                    <form action="./database/register.php" method="post">
                      <!-- <div class="alert alert-danger">
                        <a class="close" data-dismiss="alert" href="#">×</a>La contraseña es corta.
                      </div> -->
                      <div class="form-group"><span class="font-weight-bold">Usuario / Telefono movil</span>
                          <input class="form-control input-lg" name="username" type="text">
                      </div>
                        <div class="form-group"><span class="font-weight-bold">Email</span>
                            <input class="form-control input-lg"  name="email" type="email">
                        </div>
                        <div class="form-group"><span class="font-weight-bold">Contraseña</span>
                            <input class="form-control input-lg" name="password" value="" type="password" pattern=".{6,}">
                        </div>
                        <div class="form-group"><span class="font-weight-bold">Confirma contraseña</span>
                            <input class="form-control input-lg" name="confirm_password" value="" type="password" pattern=".{6,}">
                        </div>
                        <div class="checkbox">
                            <label class="small">
                                <input name="terms" type="checkbox"> Acepto los <a href="#">terminos y condiciones del servicio</a>.
                            </label>
                        <input class="btn btn-lg btn-primary btn-block" name="register" value="Creá tu cuenta de Freemarket" type="submit">
                        <hr>
                      <span>¿Ya tenés una cuenta?
                        <a class="a-link-emphasis font-weight-bold" href="ingresa.php">Ingres&aacute ac&aacute <i class="fa fa-angle-right"></i></a>
                      </span>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</div>


<?php include("./shared/footer/footer.php"); ?>
