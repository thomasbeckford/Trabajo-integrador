<?php
session_start();
include('lib/password.php');
include('dbconnect.php');

// Si existe post de login ...
if(isset($_POST['login'])){

    // Asigno variables
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

    //Traigo la info de la variable username y comparo con la tabla.
    $sql = "SELECT id, username, password, email FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);

    //Bind value.
    $stmt->bindValue(':username', $username);

    //Execute.
    $stmt->execute();

    // Agarro la row
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //If $row is FALSE.
    if($user === false){
        // No encuentro el usuario en la base.
            die('<div style="margin-top:40px; text-align: center" class="container py-3 col-md-3 card card-body">
                  <div><h3>Datos incorrectos!</h3><br><br><a href="../passrecover.php" class="btn btn-block btn-primary" role="button">Recuperar contraseña<br>
                    <a href="../login.php" class="btn btn-block btn-success" role="button">Volver</a></div>');
    } else {
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.

        //Compare the passwords.
        $validPassword = password_verify($passwordAttempt, $user['password']);

        //If $validPassword is TRUE, the login has been successful.
        if($validPassword){

            //Provide the user with a login session.
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['myusername'] = $user['username'];
            $_SESSION['logged_in'] = time();
            $_SESSION['email'] = $user['email'];

            //Redirect to our protected page, which we called home.php
            header('Location: ../index.php');

            exit;

        } else {
            //$validPassword was FALSE. Passwords do not match.
    die('<div class="container col-md-5">
          <h3 style="margin-top: 50px">Datos incorrectos.</h3>
           <h4>Quedan n intentos, recupera tu password aca
           <a href="../passrecover.php">Recuperar password</a>
          .</h4> <br><br>
          <a class="btn btn-block btn-outline-danger" role="button" href="../login.php">Volver</a>
        </div>');
        }
    }

}

?>
