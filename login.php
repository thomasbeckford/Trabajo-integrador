<?php include("./shared/head.php");
      include("./shared/navbar.php"); ?>

<div class="container py-3 animated fadeIn fast">
    <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
                <div class="card card-body">
                    <h3 class="text-center mb-4">Ingresa</h3>
                    <form action="./json-database/login-json.php" method="post"> <!-- En vez de apuntar a Mysql(./database/login.php), aputamos a json ./json-database/login-json.php -->
                      <span class="font-weight-bold">Usuario / Telefono movil</span><div class="form-group">
                          <input class="form-control input-lg" name="username" type="text" required>
                      </div><span class="align-right">
                        <span  class="font-weight-bold">Contraseña </span> <span ><a  href="passrecover.php">¿Olvidaste la contraseña?</a></span><div class="form-group">
                            <input class="form-control input-lg" name="password" type="password" required>
                        </div>
                        <span class="ingresa"><input type="checkbox"> ¿Mantenerme conectado?
                          <a tabindex="0" data-toggle="popover" rel="popover" data-html="true" data-trigger="focus"
                          title="Manteneme conectado" data-placement="top" data-content="<span>Para mantener tu cuenta segura, usa esta opcion <b>solo en tu dispositivo personal  <b/></span>" >Detalles <i class="fa fa-angle-down"></i></a>
                       </span><br><br>
                             <script>
                                $(function () {
                                   $("[data-toggle='popover']").popover();
                                    });
                            </script>
                          <input class="btn btn-lg btn-primary btn-block" name="login" value="Ingres&aacute" type="submit">
                        <hr>
                      <span>¿Nuevo en FreeMarket?
                        <a class="a-link-emphasis font-weight-bold" href="registrate.php">Registrate acá <i class="fa fa-angle-right"> </i></a>
                      </span>
                    </form>
                </div>
        </div>
    </div>
</div>

<?php include("./shared/footer.php"); ?>
