<?php include("./shared/head/head.php");
      include("./shared/navbar/navbar.php"); ?>

<div class="container py-3 animated fadeIn fast">
    <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
                <div class="card card-body">
                    <h3 class="text-center mb-4">Recuperar password</h3>
                    <span>Ingresa tu email o tu numero de telefono movil y recupera tu contraseña.</span><br>
                    <form action="./database/login.php" method="post">

                        <span  class="font-weight-bold">Email o telefono movil </span>
                        <div class="form-group">
                            <input class="form-control input-lg" name="password" type="text">
                        </div>

                        <input class="btn btn-lg btn-primary btn-block" name="login" value="Continuar" type="submit">
                        <hr>
                        <p>¿Cambio tu email o telefono?</p>
                        <span>Contactanos y te ayudamos a solucionar el problema.</span>
                    </form>
                </div>
        </div>
    </div>
</div>

<?php include("./shared/footer/footer.php"); ?>
